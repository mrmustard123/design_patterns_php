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
    
    public function __construct(Quackable $duck) {
        $this->duck = $duck;
        self::$numberOfQuacks=0;
    }
    
    /* Asi es el contructor en java pero en php se usa __construct
    public function QuackCounter (Quackable $duck){
        $this->duck = $duck;
    }*/
    
    public function quack():void{
        $this->duck->quack();
        self::$numberOfQuacks++;        
    }
    
    public static function getQuacks():int {
        return self::$numberOfQuacks;
    }
    
      
}
