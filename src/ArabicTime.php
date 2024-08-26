<?php

namespace GetArabicTimePackage\ArabicTime;

use Carbon\Carbon;

class ArabicTime
{
    public static function getArabicTime($time)
    {
        // Convert the time to a Carbon instance
        $time = Carbon::parse($time);

        // Get the hour and minute
        $formattedTime = $time->format('H:i:s');

        // Get the hour
        $hour = $time->hour;

        // Determine the Arabic time period based on the hour
        if ($hour >= 0 && $hour < 5) {
            return $formattedTime . ' منتصف الليل';
        } elseif ($hour >= 5 && $hour < 7) {
            return $formattedTime . ' الفجر';
        } elseif ($hour >= 7 && $hour < 12) {
            return $formattedTime . ' صباحا';
        } elseif ($hour >= 12 && $hour < 15) {
            return $formattedTime . ' ظهر';
        } elseif ($hour >= 15 && $hour < 18) {
            return $formattedTime . ' عصر';
        } elseif ($hour >= 18 && $hour < 20) {
            return $formattedTime . ' مغرب';
        } elseif ($hour >= 20 && $hour < 24) {
            return $formattedTime . ' مساء';
        }

        return $formattedTime . ' الوقت غير معروف';
    }
}
