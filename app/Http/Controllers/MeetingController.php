<?php

namespace App\Http\Controllers;

use App\Mail\AdminScheduleCallMail;
use App\Mail\UserScheduleCallMail;
use App\Models\Meeting;
use App\Traits\ApiResponseTrait;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class MeetingController extends Controller
{
    use ApiResponseTrait;

    public function checkAvailableSlots(Request $request)
    {
        $request->validate([
            'timezone' => 'required|timezone',
            'ip' => 'ip|nullable',
            'date' => 'required|date|after_or_equal:today',
        ], [
            'date.after_or_equal' => 'Selected date should be current or future date'
        ]);
        $timeSlots = $this->generateSlots($request->timezone, $request->date);
        return $this->ajaxSuccessResponse("List of Available Slots", $timeSlots);
    }

    public function getTimeZones(Request $request)
    {
        // $query = $request->get('q', '');
        $timeZones = collect(\App\Helpers\Helpers::getTimeZoneList());
        // $timeZones = $timeZones->filter(function ($item, $key) use ($query) {
        //     return stripos($key, $query) !== false || stripos($item, $query) !== false;
        // });
        return $timeZones;
        return $this->ajaxSuccessResponse("List of Available Zones", $timeZones);
    }


    private function generateSlots($timezone, $date)
    {
        $officeTimeZone = new DateTimeZone(config('custom.schedule_call.timezone')); // Your office timezone (Asia/Karachi)
        $userTimeZone = new DateTimeZone($timezone); // User's timezone (London)

        $selectedDate = Carbon::parse($date)->format('Y-m-d'); // The specific date you want to check (in yyyy-mm-dd format)

        // Check if the selected day exist in weekend_off_days then return empty array
        $dayOfWeek = Carbon::parse($selectedDate)->format('l');
        $weekend_off_days = config('custom.schedule_call.weekend_off_days');
        if (in_array(strtolower($dayOfWeek), $weekend_off_days)) {
            return [];
        }

        // check if selected date is exists in off_days then return empty array
        $other_off_days = config('custom.schedule_call.other_off_days');
        if (in_array($selectedDate, $other_off_days)) {
            return [];
        }

        // Parse Value using Office Timezone
        $now = Carbon::parse('now', $officeTimeZone);
        $isToday = ($now->format('Y-m-d') === $selectedDate);

        // Get Office Start/End Time Time with Timezone
        $officeStartTime = Carbon::parse($selectedDate . ' ' . config('custom.schedule_call.office_start_hour'), $officeTimeZone);
        $officeEndTime = Carbon::parse($selectedDate . ' ' . config('custom.schedule_call.office_end_hour'), $officeTimeZone);

        // Fetch all booked meeting times in UTC for the selected date
        $bookedMeetings = Meeting::whereDate('dateTime', '=', $officeStartTime->setTimezone('UTC')->toDateString())->get()->pluck('dateTime')->toArray();

        $duration = new DateInterval('PT' . config('custom.schedule_call.duration') . 'M'); // Set the duration to 30 minutes

        $timeSlots = [];
        $currentSlot = clone $officeStartTime;

        if ($isToday &&  $currentSlot < $now->copy()->addHour()) {

            /* Add 1 hour on First Slot and then ceil upto 10 minutes . If Current time is 5:24 then first slot is 6:30
            and if time is 5:30 and first slot is 6:30 */
            $currentSlot = $now->copy()->addHour()->roundMinute(1, function ($q) {
                return ceil($q / 10) * 10;
            }); // Round up to the next slot
        }

        while ($currentSlot < $officeEndTime) {

            $next_slot = clone $currentSlot;
            // time slot should between office start time and end time and next time slot should be less then endtime slot
            if ($isToday && $currentSlot <= $now || $next_slot->add($duration) > $officeEndTime) {
                $currentSlot->add($duration);
                continue;
            }

            $userStartTime = clone $currentSlot;
            $userStartTime->setTimezone($userTimeZone);

            // Check if the time slot is already booked
            $utcDateTime = $currentSlot->setTimezone('UTC');
            $isBooked = in_array($utcDateTime->format('Y-m-d H:i:s'), $bookedMeetings);
            if (!$isBooked) {
                $timeSlots[] = $userStartTime->format('h:i A');
            }

            $currentSlot->add($duration);
        }

        return $timeSlots;
    }


    public function scheduleMeeting(Request $request)
    {
        $request->validate([
            'timezone' => 'required|timezone',
            'user_ip' => 'ip|nullable',
            'date' => 'required|date|after_or_equal:today',
            'time_slot' => ['nullable', 'date_format:h:i A'],
            'name' => 'required|min:2|max:200',
            'email' => ['required', 'email', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
        ]);

        // check user has register only one slot per day
        // $isMeetingScheduled = Meeting::where('ip', $request->user_ip)->whereDate('created_at', '=', date('Y-m-d'))->exists();
        $isMeetingScheduled = false;
        if ($isMeetingScheduled) {
            return $this->ajaxErrorResponse('You can only register one slot per day.');
        } else {

            // Convert the date and time_slot to DateTime objects
            $dateTime = new DateTime($request->date);
            $time = DateTime::createFromFormat('h:i A', $request->time_slot);

            // Set the time from the time_slot
            $dateTime->setTime($time->format('H'), $time->format('i'));

            // Convert User TimeZone to UTC
            $timezoneDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTime->format('Y-m-d H:i:s'), $request->timezone);
            $utcDateTime = $timezoneDateTime->setTimezone('UTC');

            if (Meeting::where('dateTime', $utcDateTime)->where('timezone', $request->timezone)->exists()) {
                return $this->ajaxErrorResponse('This slot is not free! please choose another slot');
            }


            $cacheKey = 'meeting_lock_' . $utcDateTime->format('Y-m-d H:i');
            $lock = Cache::lock($cacheKey, 10); // lock current timeslot for 10 sec
            if ($lock->get()) {

                // Check If Slot Available Prevent ByPass Data
                $availableSlots = $this->generateSlots($request->timezone, $request->date);
                if (!in_array($request->time_slot, $availableSlots)) {
                    return $this->ajaxErrorResponse('This slot is not free! please choose another slot');
                }

                // if phone number is null then these also be null 
                // if ($request->phone == null) {
                //     $request->country_code = null;
                //     $request->country_phone_code = null;
                // }

                $meeting = Meeting::create([
                    'timezone' => $request->timezone ?? '',
                    'ip' => $request->user_ip ?? '',
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone_no' => $request->phone,
                    'message' => $request->comment,
                    'dateTime' => $utcDateTime,
                    'duration' => config('custom.schedule_call.duration'),
                    // 'country_code' => $request->country_code,
                    // 'country_phone_code' => $request->country_phone_code,
                ]);

                if ($meeting) {
                    // Release the lock
                    $lock->release();

                    Mail::send(new UserScheduleCallMail($request->name, $request->email, $meeting->timezone, $request->phone, $utcDateTime, $request->country_code, $request->country_phone_code));
                    Mail::send(new AdminScheduleCallMail($request->name, $request->email, $request->comment, $request->phone, $utcDateTime, $request->country_code, $request->country_phone_code));
                    // ScheduleGoogleCalendarEventJob::dispatch($request->name, $request->email, $utcDateTime, $meeting->timezone);
                    return $this->ajaxSuccessResponse('Meeting has been scheduled successfully!');
                }

                return $this->ajaxSuccessResponse('Something wrong please try again later!');
            } else {
                // Another user has already selected this slot
                return $this->ajaxErrorResponse('This slot is not free! Please choose another slot.');
            }
        }
    }
}
