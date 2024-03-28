<?php

/**
 * File: Flock
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 27 mar. de 2024 16:54:16
 * User: user
 */

namespace compound_patterns;

class Flock implements Quackable{
    
    
    public array $quackers;
    
    public function __construct() {
        $this->quackers = [];
    }
    
    public function add(Quackable $quacker){
        
        array_push($this->quackers, $quacker);
        
    }
    
    public function quack(): void{
        
        $iterator = new QuackableIterator();
        $iterator->setItems($this->quackers);
        //$iterator->setPosition(0);//por default es 0
        
        while($iterator->hasNext()){
            $quaker= $iterator->next();
            $quaker->quack();
        }
          
    }
    
    
}

