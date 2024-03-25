<?php

/**
 * File: DuckFactory
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 25 mar. de 2024 11:12:27
 * User: user
 */

namespace compound_patterns;

class DuckFactory extends AbstractDuckFactory{
    
    public function createMallarDuck(): Quackable{
        return new MallarDuck();
    }
    
    public function createRedHeadDuck(): Quackable{
        return new RedHeadDuck();
    }
    
    public function createDuckCall(): Quackable{
        return new DuckCall();
    }
    
    public function createRubberDuck(): Quackable{
        return new RubberDuck();
    }
                    
}

/*Each method creates a product: a particular kind of Quackable. The actual
product is unknown to the simulator - it just knows it's getting a Quackable */

