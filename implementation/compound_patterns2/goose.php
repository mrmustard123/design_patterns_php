<?php

/**
 * File: goose
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 22 mar. de 2024 11:00:01
 * User: user
 */

namespace compound_patterns;

class Goose implements QuackObservable{
    
    public Observable $observable;
    
    public function __construct() {
        $this->observable = new Observable($this);
    }
    
    public function honk():void {
        echo 'Honk!<br/>';
        $this->notifyObservers();              
    }
   
    public function notifyObservers(): void {
        $this->observable->notifyObservers();        
    }

    public function registerObserver(Observer $observer): void {
        $this->observable->registerObserver($observer);
    }

    
}

