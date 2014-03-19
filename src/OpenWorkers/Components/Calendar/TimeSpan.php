<?php

namespace OpenWorkers\Components\Calendar;


use DateTime;

class TimeSpan
{
    /**
     * @var DateTime
     */
    private $start;
    /**
     * @var DateTime
     */
    private $end;

    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Returns the days between Start and Stop
     * @return int
     */
    public function getDaysBetween()
    {
        return $this->start->diff($this->end)->d;
    }

    public function getDaysInMonth($month)
    {
        return $this->start->diff($this->end)->d;

    }
}
