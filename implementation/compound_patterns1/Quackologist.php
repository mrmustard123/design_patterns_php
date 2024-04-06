<?php

/**
 * File: Quackologist
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 30 mar. de 2024 19:21:37
 * User: user
 */

namespace compound_patterns;

include 'Observer.php';

class Quackologist implements Observer{
    
    public function update(QuackObservable $duck): void{
        
        $classname=explode("\\",get_class($duck));
        $name = array_pop($classname);                                         
        echo 'Quackologist: '.$name.' just quacked.<br/>'; 
    }
    
}