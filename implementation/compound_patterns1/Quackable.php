<?php

/**
 * File: Quackable
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 14 mar. de 2024 19:43:23
 * User: user
 */

namespace compound_patterns;

include 'QuackObservable.php';

interface Quackable extends QuackObservable{
    
    public function quack():void;
    
}

