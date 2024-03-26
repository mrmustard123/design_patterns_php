<?php

/**
 * File: index
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 20 mar. de 2024 22:34:38
 * User: user
 */
namespace compound_patterns;

include 'DuckSimulator.php';
include 'CountingDuckFactory.php';


$simulator = new DuckSimulator();
$duckFactory = new CountingDuckFactory();

$simulator->simulate($duckFactory);

