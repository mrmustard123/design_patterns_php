<?php

/**
 * File: WeatherStation
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 19:32:11
 * User: user
 */

namespace observer_pattern;

include 'WeatherData.php';
include 'CurrentConditionsDisplay.php';


class WeatherStation{
    
    public function main(): void{
        
        $weatherData = new WeatherData();
        
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        
        //$statisticsDisplay = new StatisticsDisplay();
        
        //$forecastDisplay = new ForecastDisplay();
        
        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
                           
    }
    
    
}
