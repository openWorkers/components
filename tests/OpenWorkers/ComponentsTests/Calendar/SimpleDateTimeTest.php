<?php
/**
 * Created by IntelliJ IDEA.
 * User: frankhildebrandt
 * Date: 19.03.14
 * Time: 22:00
 */

namespace OpenWorkers\ComponentsTests\Calendar;


use OpenWorkers\Components\Calendar\SimpleDateTime;

class SimpleDateTimeTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMonth()
    {
        $test = SimpleDateTime::createFromFormat("Y-m-d", "2000-01-01");
        $this->assertEquals(1, $test->getMonth());
    }

    public function testGetDay()
    {
        $test = SimpleDateTime::createFromFormat("Y-m-d", "2000-01-01");
        $this->assertEquals(1, $test->getDay());
    }

    public function testGetYear()
    {
        $test = SimpleDateTime::createFromFormat("Y-m-d", "2000-01-01");
        $this->assertEquals(2000, $test->getYear());
    }
}
