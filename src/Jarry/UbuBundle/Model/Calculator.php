<?php

namespace Jarry\UbuBundle\Model;

class Calculator{
    public function add($a, $b){
        return $a + $b;
    }
    
    public function sub($a, $b){
        return $a - $b;
    }
    
    public function mult($a, $b){
        return $a * $b;
    }
    
    public function div($a, $b){
        if($b !== 0){
            return $a / $b;
        }
        else{
            return null;
        }
    }
}

