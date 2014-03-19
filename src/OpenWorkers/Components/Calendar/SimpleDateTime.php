<?php

namespace OpenWorkers\Components\Calendar;


use DateTime;

class SimpleDateTime extends DateTime
{
    /**
     * @inheritdoc
     */
    public static function createFromFormat($format, $time, $timezone = null)
    {
        if ($timezone) {
            $dateTime = DateTime::createFromFormat($format, $time, $timezone);
        } else {
            $dateTime = DateTime::createFromFormat($format, $time);
        }
        $simpleDateTime = new SimpleDateTime("now", $timezone);
        $simpleDateTime->setTimestamp($dateTime->getTimestamp());
        return $simpleDateTime;
    }

    /**
     * Returns the month as Integer
     *
     * @return int
     */
    public function getMonth()
    {
        return (int)$this->format("m");
    }

    /**
     * Returns the day as Integer
     *
     * @return int
     */
    public function getDay()
    {
        return (int)$this->format("d");
    }
    /**
     * Returns the year as Integer
     *
     * @return int
     */
    public function getYear()
    {
        return (int)$this->format("Y");
    }

}
