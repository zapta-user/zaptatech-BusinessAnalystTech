<?php

namespace App\Helpers;

use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Cache;

class Helpers
{

    public static function  getTimeZoneList()
    {
        return Cache::rememberForever('php-timezones', function () {
            $timezones = DateTimeZone::listIdentifiers();
            $formattedTimezones = [];

            foreach ($timezones as $timezone) {
                $dateTime = new DateTime('now', new DateTimeZone($timezone));
                $offset = $dateTime->format('P');

                $formattedTimezones[$timezone] = "GMT$offset - $timezone";
            }
            return $formattedTimezones;
        });
    }
}
