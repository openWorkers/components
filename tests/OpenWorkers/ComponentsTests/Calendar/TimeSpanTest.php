<?php

namespace OpenWorkers\ComponentsTests\Calendar;


use OpenWorkers\Components\Calendar\SimpleDateTime;
use OpenWorkers\Components\Calendar\TimeSpan;
use PHPUnit_Framework_TestCase;

class TimeSpanTest extends PHPUnit_Framework_TestCase
{

    public function testDaysBetween()
    {
        $start = SimpleDateTime::createFromFormat("Y-m-d", "2000-01-01");
        $end = SimpleDateTime::createFromFormat("Y-m-d", "2000-01-10");

        $timeSpan = new TimeSpan($start, $end);
        $this->assertEquals(9, $timeSpan->getDaysBetween());
    }

    public function testDaysinMonth()
    {
        $start = SimpleDateTime::createFromFormat("Y-m-d", "2000-01-30");
        $end = SimpleDateTime::createFromFormat("Y-m-d", "2000-02-05");

        $timeSpan = new TimeSpan($start, $end);
        $this->assertEquals(2, $timeSpan->getDaysInMonth(1));
        $this->assertEquals(4, $timeSpan->getDaysInMonth(2));
    }
}
