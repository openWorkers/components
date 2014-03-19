<?php

namespace OpenWorkers\ComponentsTests\Calendar;


use OpenWorkers\Components\Calendar\TimeSpan;
use PHPUnit_Framework_TestCase;

class TimeSpanTest extends PHPUnit_Framework_TestCase
{

    public function testDaysBetween()
    {
        $start = \DateTime::createFromFormat("Y-m-d", "2000-01-01");
        $end = \DateTime::createFromFormat("Y-m-d", "2000-01-10");

        $timeSpan = new TimeSpan($start, $end);
        $this->assertEquals(9, $timeSpan->getDaysBetween());
    }

    public function testDaysinMonth()
    {
        $start = \DateTime::createFromFormat("Y-m-d", "2000-01-01");
        $end = \DateTime::createFromFormat("Y-m-d", "2000-01-10");

        $timeSpan = new TimeSpan($start, $end);
        $this->assertEquals(9, $timeSpan->getDaysInMonth(1));
    }
}
