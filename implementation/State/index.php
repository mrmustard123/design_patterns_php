<?php

/**
 * File: index
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 5 abr. de 2024 21:38:11
 * User: user
 */

namespace state_pattern;

include_once "GumballMachine.php";

$gumballMachine = new GumballMachine(5);

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();