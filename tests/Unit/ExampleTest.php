<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

    	$a =5;
    	$b =10;
    	$c = $a + $b; 
        $this->assertEquals($c, 15);
    }

     public function test_Test()
    {

    	$m =20;
    	$d =20;
    	$t = $m + $d; 
        $this->assertEquals($t, 40);
    }
}
