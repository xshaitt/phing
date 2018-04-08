<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2018/4/4
 * Time: 下午3:56
 */
require __DIR__.'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testPass()
    {
        $this->assertTrue(true);
    }

    public function testFail()
    {
        $this->assertFalse(false);
    }
}