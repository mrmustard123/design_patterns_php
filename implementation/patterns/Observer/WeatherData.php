<?php

/**
 * File: WheatherData
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 13:35:52
 * User: user
 */

namespace observer_pattern;

class WeatherData implements Subject{
    
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;


    public function __construct() {
        $this->observers = [];
    }
    
    public function registerObserver(Observer $o): void{
        array_push($this->observers);
    }
    
    public function removeObserver(Observer $o): void{
        array_pop($this->observers);
    }
    
}

