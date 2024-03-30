<?php

/**
 * File: DuckCall
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 15 mar. de 2024 16:22:27
 * User: user
 */

namespace compound_patterns;


class DuckCall implements Quackable{
    
    public function quack():void{
        echo 'Kwack!<br/>';
    }       
}
