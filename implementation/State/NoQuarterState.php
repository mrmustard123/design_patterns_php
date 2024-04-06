<?php

/**
 * File: NoQuarterState
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 21:43:20
 * User: user
 */

namespace state_pattern;

include_once 'State.php';

class NoQuarterState implements State{
    
    public GumballMachine $gumballMachine;
    
    
    public function __construct(GumballMachine $gumballMachine){
        $this->gumballMachine = $gumballMachine;        
    }
    
    public function insertQuarter(): void {
    
        echo 'You inserted a quarter!<br/>';
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());                
        
    } 
    
    public function ejectQuarter(): void {
        
        echo "You haven't inserted a quarter<br/>";
                
    }    
    
    public function dispense(): void {
        
        echo "You need to pay first!<br/>";
                
    }

    public function turnCrank(): void {
        
    }

    
    
    
}
