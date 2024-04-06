<?php

/**
 * File: RubberDuck
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 15 mar. de 2024 16:24:12
 * User: user
 */

namespace compound_patterns;

class RubberDuck implements Quackable{
    
    public Observable $observable;
    
    public function __construct() {
        $this->observable= new Observable($this);
    }
    
    public function registerObserver(Observer $observer): void {
        $this->observable->registerObserver($observer);
    }
    
    public function notifyObservers(): void{
        $this->observable->notifyObservers();
    }    
    
    public function quack():void {
        echo "Squeak!<br/>";
        $this->notifyObservers();        
    }
    
    
}


