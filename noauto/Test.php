<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new WfcMadCoupon();

        $obj = new WfcMadCouponParser();
        $this->assertEquals(true, $obj->check('MA'));
        $this->assertEquals(false, $obj->check('foo'));
        $obj->doc();
    }
}

