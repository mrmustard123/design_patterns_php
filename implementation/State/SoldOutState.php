<?php

/**
 * File: SoldOutState
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 22:00:59
 * User: user
 */

namespace state_pattern;

include_once 'State.php';


class SoldOutState implements State{
    
    public GumballMachine $gumballMachine;
        
    public function __construct(GumballMachine $gumballMachine){
        $this->gumballMachine = $gumballMachine;        
    }
    
    public function insertQuarter(): void {
        
    }  
    
    public function ejectQuarter(): void {
        
    }    
    
    public function dispense(): void {
        
    }

    public function turnCrank(): void {
        
    }

    
    
}
