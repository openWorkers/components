<?php

namespace OpenWorkers\Components\Calendar;


class TimeSpan
{
    /**
     * @var SimpleDateTime
     */
    private $start;
    /**
     * @var SimpleDateTime
     */
    private $end;

    public function __construct(SimpleDateTime $start, SimpleDateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Returns the matching days for a given month
     * @param $month
     * @return int
     */
    public function getDaysInMonth($month)
    {
        if ($this->start->getYear() < $this->end->getYear()) {
            return cal_days_in_month(CAL_GREGORIAN, $month, $this->start->getYear());
        }
        $localStart = null;
        $localEnd = null;
        if ($this->start->getMonth() == $month) {
            $localStart = $this->start;
        }
        if ($this->end->getMonth() == $month) {
            $localEnd = $this->end;
        }

        if ($localStart == null) {
            $localStart = SimpleDateTime::createFromFormat("Y-m-d", $this->start->getYear() . "-$month-01");
        }
        if ($localEnd == null) {
            $localEnd = SimpleDateTime::createFromFormat("Y-m-d", $this->start->getYear() . "-" . ($month + 1) . "-01");
        }

        $diff = new TimeSpan($localStart, $localEnd);
        return $diff->getDaysBetween();
    }

    /**
     * Returns the days between Start and Stop
     * @return int
     */
    public function getDaysBetween()
    {
        return $this->start->diff($this->end)->d;
    }
}
