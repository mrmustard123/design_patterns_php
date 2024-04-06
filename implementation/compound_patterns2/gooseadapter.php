<?php

/**
 * File: gooseadapter
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 22 mar. de 2024 12:22:06
 * User: user
 */
//declare(strict_types=1); /*Si es necesario para forza a usar tipos*/

namespace compound_patterns;



class GooseAdapter implements Quackable{
    
    public Goose $duck;
    
    public Observable $observable;    
    
    public function __construct(){
        $this->duck = new Goose();
        $this->observable= new Observable($this);
    }


    public function GooseAdapter(Goose $goose){
        
        $this->duck = $goose;
        
    }
    
    public function setGoose(Goose $goose): void
    {
        $this->duck = $goose;
    }            
    
    public function registerObserver(Observer $observer): void {
        $this->observable->registerObserver($observer);
    }
    
    public function notifyObservers(): void{
        $this->observable->notifyObservers();
    }    
    
    public function quack():void {
        $this->duck->honk();
        $this->notifyObservers();
    }           
}
