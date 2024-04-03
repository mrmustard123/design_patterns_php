<?php

/**
 * File: Observer
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 13:17:19
 * User: user
 */


namespace observer_pattern;

interface Observer{
    public function update(float $temp, float $humidity, float $pressure): void;
}
