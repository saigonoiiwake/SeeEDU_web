<?php

namespace App\Service;

class ChapterService
{
    public static function generateChapterTime($from_date, $to_date, $from_time, $to_time, $day_of_week)
    {
        $chapters = [];

        foreach ($day_of_week as $day) {
            $chapters = array_merge($chapters, self::getListOfDate($from_date, $to_date, $from_time, $to_time, $day));
        }

        sort($chapters);

        return $chapters;
    }

    protected static function getListOfDate($from_date, $to_date, $from_time, $to_time, $day_of_week)
    {
        $tmp = date('Y-m-d', strtotime('-1 day', strtotime($from_date)));
        $time_list = [];
        while ($tmp < $to_date) {
            $next_day = date('Y-m-d', strtotime('next ' . $day_of_week, strtotime($tmp)));
            if ($next_day <= $to_date) {
                $from_datetime = "$next_day" . "T" . "$from_time";
                $to_datetime = "$next_day" . "T" . "$to_time";
                $time_list[] = [
                    "from_datetime" => $from_datetime,
                    "to_datetime"   => $to_datetime,
                ];
            }
            $tmp = date('Y-m-d', strtotime('+1 day', strtotime($next_day)));
        }

        return $time_list;
    }
}