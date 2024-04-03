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
        //$this->observers = [];        
        $this->duck=$duck;
    }
    
    public function registerObserver(Observer $observer): void {
        array_push($this->observers, $observer);
    }
    
    public function notifyObservers(): void {
        $iterator = new QuackableIterator();
        $iterator->setItems($this->observers);
        
        while($iterator->hasNext()){
            $observer = $iterator->next();
            $observer->update($this->duck);            
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}

