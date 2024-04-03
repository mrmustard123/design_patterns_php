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
    
    public Goose $goose;
    
    protected Observable $observable;    
    
    public function __construct(){
        $this->goose = new Goose();
        $this->observable= new Observable($this);
    }


    public function GooseAdapter(Goose $goose){
        
        $this->goose = $goose;
        
    }
    
    public function setGoose(Goose $goose): void
    {
        $this->goose = $goose;
    }            
    
    public function registerObserver(Observer $observer): void {
        $this->observable->registerObserver($observer);
    }
    
    public function notifyObservers(): void{
        $this->observable->notifyObservers();
    }    
    
    public function quack():void {
        $this->goose->honk();
        $this->notifyObservers();
    }           
}
