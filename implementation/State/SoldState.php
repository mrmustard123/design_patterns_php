<?php

/**
 * File: SoldState
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 21:59:56
 * User: user
 */


namespace state_pattern;

include_once 'State.php';

class SoldState implements State{
     
    public GumballMachine $gumballMachine;       
    
    public function __construct(GumballMachine $gumballMachine){
        $this->gumballMachine = $gumballMachine;        
    }
    
    public function insertQuarter(): void {
        echo "Please wait, we’re already giving you a gumball<br/>";
    }
    
    public function ejectQuarter(): void {
        echo "Sorry, you already turned the crank<br/>";
    }
    
    public function turnCrank(): void {
        echo "Turning twice doesn’t get you another gumball!";
    }
    
    public function dispense(): void {
        $this->gumballMachine->releaseBall();
        if($this->gumballMachine->getCount() > 0){
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        }else{
            echo "oops, out of gumballs!<br/>";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
        
        
    }


    
    

    
    
    
}

