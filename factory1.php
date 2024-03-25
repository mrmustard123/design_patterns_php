<?php

/*
  Created on : 19 abr. de 2022, 10:14:49
  Author: Leonardo G. Tellez Saucedo
 * 
 * SIMPLE FACTORY PATTERN
 */

class SimplePizzaFactory{
    
    

    public function createPizza($type){
        
        $pizza = null;
        
        if($type == 'cheese'){
            $pizza = new CheesePizza();
        }elseif ($type=='pepperoni') {
            $pizza = new PepperoniPizza();            
        }elseif ($type == 'clam') {
            $pizza = new ClamPizza();
        }elseif($type=='veggie'){
            $pizza = new VeggiePizza();
        }
        
        return $pizza;
    }
    
    
    
}



class PizzaStore{
    
    public SimplePizzaFactory $factory;
    
    public function __construct(SimplePizzaFactory $factory){
        $this->factory = $factory;                
    }
    
    public function orderPizza($type){
        
        $pizza = $this->factory->createPizza($type);
        
        
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
        
    }
            
}

