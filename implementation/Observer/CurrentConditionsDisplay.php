<?php

/**
 * File: CurrentConditionsDisplay
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 19:20:52
 * User: user
 */

namespace observer_pattern;

include 'Observer.php';
include 'DisplayElement.php';

class CurrentConditionsDisplay implements Observer, DisplayElement{
    
    private float $temperature;
    private float $humidity;
    private float $pressure;
    private Subject $weatherData;
    
    public function __construct(Subject $weatherData){
        $this->weatherData= $weatherData;
        $this->weatherData->registerObserver($this);
        
    }
    
    public function update(float $temperature, float $humidity, float $pressure): void {
        
        $this->temperature= $temperature;
        $this->humidity=$humidity;
        $this->pressure=$pressure;
        $this->display();
    }    
    
    
    
    public function display(): void {
        
        echo 'Current conditions: '.$this->temperature.'ºC degrees and '.
                $this->humidity.'% humidity<br/>';
                
    }



    
    
    
}

