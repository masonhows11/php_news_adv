<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Jalalian;

class HelperTest extends TestCase
{
    public function test_jdate_function()
    {
        $this->assertTrue(function_exists('jdate'));

        $jdate = jdate('now');
        $this->assertTrue($jdate instanceof Jalalian);
    }
}
