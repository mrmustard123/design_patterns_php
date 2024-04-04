<?php

/**
 * File: aux_file
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 17:22:15
 * User: user
 */

$my_array = array('Andy', 'Bertha', 'Charles', 'Diana');
var_dump($my_array);
echo "<br/>";
$my_array = array_diff($my_array, array('Charles'));
var_dump($my_array);

