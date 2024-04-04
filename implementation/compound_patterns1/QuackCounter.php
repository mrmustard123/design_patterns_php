<?php

/**
 * File: QuackCounter
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 23 mar. de 2024 19:39:05
 * User: user
 */

namespace compound_patterns;


class QuackCounter implements Quackable{
    
    public Quackable $duck;
    static int $numberOfQuacks;
    protected Observable $observable;
    
    public function __construct(Quackable $duck) {
        $this->duck = $duck;
        self::$numberOfQuacks=0;
        $this->observable= new Observable($this);
    }
    
    /* Asi es el contructor en java pero en php se usa __construct
    public function QuackCounter (Quackable $duck){
        $this->duck = $duck;
    }*/
            

    public function registerObserver(Observer $observer): void {
        $this->observable->registerObserver($observer);
    }
    
    public function notifyObservers(): void{
        $this->observable->notifyObservers();
    }     
    
    public function quack():void{
        $this->duck->quack();
        self::$numberOfQuacks++;        
    }
    
    public static function getQuacks():int {
        return self::$numberOfQuacks;
    }
    
      
}
