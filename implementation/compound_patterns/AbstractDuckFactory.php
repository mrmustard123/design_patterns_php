<?php

/**
 * File: AbstractDuckFactory
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 25 mar. de 2024 11:03:33
 * User: user
 */
namespace compound_patterns;


abstract class AbstractDuckFactory{
    
    public abstract function createMallarDuck(): Quackable;
    
    public abstract function createRedHeadDuck(): Quackable;
    
    public abstract function createDuckCall(): Quackable;
    
    public abstract function createRubberDuck(): Quackable;
                    
}

