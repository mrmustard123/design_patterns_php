<?php

/**
 * File: GumballMachine
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 21:44:44
 * User: user
 */

namespace state_pattern;

include_once 'SoldOutState.php';
include_once 'HasQuarterState.php';
include_once 'NoQuarterState.php';
include_once 'SoldState.php';


class GumballMachine{
    

    public State $soldOutState;
    public State $noQuarterState;
    public State $hasQuarterState;
    public State $soldState;
    
    public State $state;
    public int $count = 0;  
    
    
    public function __construct(int $numberGumballs) {
        $this->soldOutState = new SoldOutState($this);
        $this->state = $this->soldOutState;
        $this->noQuarterState= new NoQuarterState($this);
        $this->hasQuarterState= new HasQuarterState($this);
        $this->soldState= new SoldState($this);
        $this->count = $numberGumballs;
        if($numberGumballs>0){
            $this->state = $this->noQuarterState;
        }
    }    
       
    public function insertQuarter(): void{
        $this->state->insertQuarter();
    }
    
    public function ejectQuarter(): void{
        $this->state->ejectQuarter();
    }
    
    
    public function turnCrank():void {
        $this->state->turnCrank();
        $this->state->dispense();
    }
    
    public function releaseBall(): void{
        echo "A gumball comes rolling our the slot...<br/>";
        if($this->count !=0){
            $this->count = $this->count -1;
        }
    }
    
    
    /**********GETTERS & SETTERS******************/
    public function getSoldOutState(): State {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): State {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State {
        return $this->hasQuarterState;
    }

    public function getSoldState(): State {
        return $this->soldState;
    }

    public function getState(): State {
        return $this->state;
    }

    public function getCount(): int {
        return $this->count;
    }

    public function setSoldOutState(State $soldOutState): void {
        $this->soldOutState = $soldOutState;
    }

    public function setNoQuarterState(State $noQuarterState): void {
        $this->noQuarterState = $noQuarterState;
    }

    public function setHasQuarterState(State $hasQuarterState): void {
        $this->hasQuarterState = $hasQuarterState;
    }

    public function setSoldState(State $soldState): void {
        $this->soldState = $soldState;
    }

    public function setState(State $state): void {
        $this->state = $state;
    }

    public function setCount(int $count): void {
        $this->count = $count;
    }

        
    
}

