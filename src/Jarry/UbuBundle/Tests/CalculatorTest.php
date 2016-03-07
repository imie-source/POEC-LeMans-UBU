<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Jarry\UbuBundle\Tests;

use Jarry\UbuBundle\calc\Calculator;
/**
 * Description of CalculatorTest
 *
 * @author david-paul
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @beforeClass
     */
    public static function setUpBeforeClass() {
        
    }
    
    /**
     * @afterClass
     */
    public static function tearDownAfterClass() {
        
    }

        /**
     * @before
     */
    public function setUp() {
        $this->calc = new Calculator();
    }
    
    /**
     * @after
     */
    public function tearDown() {
        
    }
    
    /**
     * @test
     */
    public function testAdd() {
       
        $result = $this->calc->add(2, 3);
        
        $this->assertEquals(5, $result);
    }
    
    /**
     * @test
     */
    public function testSoustraire() {
       
        $result = $this->calc->soustraire(2, 3);
        
        $this->assertEquals(-1, $result);
    }
    
    /**
     * @test
     */
    public function testMultiplie() {
       
        $result = $this->calc->multiplie(2, 3);
        
        $this->assertEquals(6, $result);
    }
    
    /**
     * @test
     */
    public function testDivise() {
        
        $result = $this->calc->divise(2, 3);
        $zero = $this->calc->divise(0, 0);
        
        $this->assertEquals(2/3, $result);
        $this->assertEquals(null, $zero);
    }
    
}
