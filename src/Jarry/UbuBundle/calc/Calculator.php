<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Jarry\UbuBundle\calc;
/**
 * Description of Calculator
 *
 * @author david-paul
 */
class Calculator {
    
    public function add($a, $b) {
        return $a+$b;
    }
    public function soustraire($a, $b) {
        return $a-$b;
    }
    public function multiplie($a, $b) {
        return $a*$b;
    }
    public function divise($a, $b) {
        if ($b != 0) {
            return $a/$b;
        }
        else {
            return null;
        }
    }
}
