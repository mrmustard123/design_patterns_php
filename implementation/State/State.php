<?php

/**
 * File: State
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 21:39:56
 * User: user
 */

namespace state_pattern;

interface State{
    
    public function insertQuarter(): void;
    
    public function ejectQuarter(): void;
    
    public function turnCrank(): void;
    
    public function dispense(): void;
        
}

