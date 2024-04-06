<?php

/**
 * File: Flock
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 27 mar. de 2024 16:54:16
 * User: user
 */

namespace compound_patterns;

include 'QuackableIterator.php';

class Flock implements Quackable{
        
    public array $quackers;
    public Observable $observable;    
    //public Observable $duck;
    
    public function __construct() {
        $this->quackers = [];
        $this->observable= new Observable($this);
        //$this->duck= new Observable($this);
    }
    
    public function add(Quackable $quacker){
        
        array_push($this->quackers, $quacker);
        
    }
    
    public function registerObserver(Observer $observer): void {
        //$this->observable->registerObserver($observer);        
        $iterator = new QuackableIterator();
        $iterator->setItems($this->quackers);
        //$iterator->setPosition(0);//por default es 0
        
        while($iterator->hasNext()){
            $quacker= $iterator->next();
            $quacker->registerObserver($observer);
            //$quacker->observable->registerObserver($observer);//He aqui que me dio dolores de cabeza esta linea.
            //$quacker->duck->observable->registerObserver($observer); //si no es quackcounter no tiene duck como el gooseadapter
        } 
    }
    
    public function notifyObservers(): void{
       // $this->observable->notifyObservers();
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

