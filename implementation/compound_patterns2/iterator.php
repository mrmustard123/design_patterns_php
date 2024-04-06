<?php

/**
 * File: iterator
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 27 mar. de 2024 23:09:33
 * User: user
 */

namespace compound_patterns;

interface Iterator{
    
    public function hasNext(): bool;
    
    public function next();

}
