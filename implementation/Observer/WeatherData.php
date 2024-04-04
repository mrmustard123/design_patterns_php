<?php

/**
 * File: WheatherData
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 13:35:52
 * User: user
 */

namespace observer_pattern;

include 'Subject.php';

class WeatherData implements Subject{
    
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;


    public function __construct() {
        $this->observers = [];
    }
    
    public function registerObserver(Observer $o): void{
        array_push($this->observers, $o);
    }
    
    public function removeObserver(Observer $o): void{
        array_diff($this->observers, array($o));
    }
    
    public function notifyObservers(): void {
        $count = count($this->observers);
        for ($i = 0; $i < $count; $i++){
            $observer = $this->observers[$i];
            $observer->update($this->temperature, $this->humidity, $this->pressure);            
        }
    }
    
    public function measurementsChanged(): void{
        $this->notifyObservers();
    }
    
    public function setMeasurements(float $temperature, float $humidity, float $pressure){
        $this->temperature=$temperature;
        $this->humidity=$humidity;
        $this->pressure=$pressure;
        $this->measurementsChanged();        
    }
    
    //Other WeatherData methods here
    
}

