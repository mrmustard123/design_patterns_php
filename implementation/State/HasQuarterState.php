<?php

/**
 * File: HasQuarterState
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 21:58:43
 * User: user
 */

namespace state_pattern;

include_once 'State.php';

class HasQuarterState implements State{
    
    public GumballMachine $gumballMachine;
        
    public function __construct(GumballMachine $gumballMachine){
        $this->gumballMachine = $gumballMachine;        
    }
    
    public function insertQuarter(): void {
        
        echo "You can't insert another quarter!<br/>";
        
    } 
    
    public function ejectQuarter(): void {
        
        echo "Quarter returned<br/>";
        
    }  
    
    public function turnCrank(): void {
        
        echo "You turned... <br/>";
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());        
    }    
    
    
    public function dispense(): void {
        echo "No gumball dispensed <br/>";
    }






    
    
    
}

