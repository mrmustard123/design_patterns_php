<?php

/**
 * File: MallarDuck
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 14 mar. de 2024 19:50:11
 * User: user
 */

namespace compound_patterns;

include "Quackable.php";

class MallarDuck implements Quackable{
    
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
    
    public function quack():void{
        echo "Quack!<br/>";
        $this->notifyObservers();
        
    }    
        
}
