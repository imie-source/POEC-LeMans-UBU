<?php

namespace Jarry\UbuBundle\Tests;

use Jarry\UbuBundle\Model\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testAdd(){
        $calc = new Calculator();
        $result = $calc->add(2,3);
        $this->assertEquals(5, $result);
    }
    
    /**
     * @test
     */
    public function testSub(){
        $calc = new Calculator();
        $result2 = $calc->sub(4, 3);
        $this->assertEquals(1, $result2);
    }
    
    /**
     * @test
     */
    public function testMult(){
        $calc = new Calculator();
        $result3 = $calc->mult(5, 4);
        $this->assertEquals(20, $result3);
    }
    
    /**
     * @test
     */
    public function testDiv(){
        $calc = new Calculator();
        $result4 = $calc->div(20, 0);
        $this->assertEquals(null, $result4);
    }
}
