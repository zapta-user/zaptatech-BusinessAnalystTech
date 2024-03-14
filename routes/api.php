<?php

use App\Http\Controllers\MeetingController;
use GeoIp2\Database\Reader;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('get-availabe-slots', [MeetingController::class, 'checkAvailableSlots'])->name('getAvailableSlots');
Route::post('get-time-zones', [MeetingController::class, 'getTimeZones'])->name('getTimeZones');


Route::get('test', function () {
    // public function getIp() {
    // $ip = request()->ip();
    // if ($ip == '127.0.0.1') {
    //     return '203.99.174.147';
    // }
    // return $ip;
    // }
    // public function getCountryAgainstIP($ip=null){
    $ipAddress = '203.99.174.147';
    $reader = new Reader(resource_path('GeoLite2-Country.mmdb'));
    $record = $reader->city($ipAddress);
    $timezone = $record->location->timeZone;

    return $timezone;
    // return $reader;
    // if (is_null('203.99.174.147')) {
    //     $ip = $this->getIP();
    // }
    $record = $reader->country('185.60.216.35');
    return  DateTimeZone::listIdentifiers(
        DateTimeZone::PER_COUNTRY,
        $record->country->isoCode
    );
    // return $record->country;
    // }
});
