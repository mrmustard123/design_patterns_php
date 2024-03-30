<?php

/**
 * File: Observable
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 30 mar. de 2024 12:44:02
 * User: user
 */

namespace compound_patterns;

class Observable implements QuackObservable{
    
    protected array $observers;
    
    protected QuackObservable $duck;
    
    public function __construct(QuackObservable $duck) {
        $this->duck=$duck;
    }
    
    public function registerObserver($observer): void {
        array_push($this->observers, $observer);
    }
    
    public function notifyObservers(): void {
        $iterator = new QuackableIterator();
        
        while($iterator->hasNext()){
            $observer = $iterator->next();
            //update no esta implementado todavia
            $observer->update($this->duck);            
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}

