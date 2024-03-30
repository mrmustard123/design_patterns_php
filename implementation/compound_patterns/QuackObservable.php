<?php

/**
 * File: QuackObservable
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 30 mar. de 2024 11:52:32
 * User: user
 */

namespace compound_patterns;

interface QuackObservable{
    
    public function registerObserver($observer): void;
    public function notifyObservers(): void;       
    
}

