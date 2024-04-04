<?php

/**
 * File: CountingDuckFactory
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 25 mar. de 2024 11:14:25
 * User: user
 */

namespace compound_patterns;

include 'AbstractDuckFactory.php';

/*Now let's create the factory we really want */
class CountingDuckFactory extends AbstractDuckFactory{
    
    public function __construct() {
        //
    }
    
    
    public function createMallarDuck(): Quackable{
        return  new MallarDuck();
    }
    
    public function createRedHeadDuck(): Quackable{
        return  new RedHeadDuck();
    }
    
    public function createDuckCall(): Quackable{
        return  new DuckCall();
    }
    
    
    public function createRubberDuck(): Quackable{
        return  new RubberDuck();
    }
                     
}

/*Each method wraps the Quackable with the quack counting decorator. The
simulator will never know the difference; it just gets back a Quackable.
But now our rangers can be sure thet all quacks are being counted */




