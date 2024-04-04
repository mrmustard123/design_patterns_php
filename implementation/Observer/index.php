<?php

/**
 * File: index
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 17:28:45
 * User: user
 */

namespace observer_pattern;

include 'WeatherStation.php';

echo 'hola mundo!<br/>';

$weatherStation = new WeatherStation();

$weatherStation->main();


