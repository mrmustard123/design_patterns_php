<?php

/**
 * File: MallarDuck
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 14 mar. de 2024 19:50:11
 * User: user
 */

namespace compound_patterns;

include "Quackable.php";

class MallarDuck implements Quackable{
    
    public function quack():void{
        echo "Quack!<br/>";
    }    
}
