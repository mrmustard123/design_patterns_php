<?php

/*
  Created on : 19 abr. de 2022, 18:38:06
  Author: Leonardo G. Tellez Saucedo
 * 
 * FACTORY METHOD PATTERN
 */

abstract class Pizza{
   //Abstract Product 
    protected $name;
    protected $dough;
    protected $sauce;
    protected array $toppings;
    
    
    public function prepare(){
        echo 'Preparing '.$this->name.'</br>';
        echo 'Tossing dough...</br>';
        echo 'Adding sauce...</br>';
        echo 'Adding toppings:</br>';
        foreach($this->toppings as $topping){
            echo $topping.'...</br>';
        }
    }
    
    public function bake(){
        echo 'Bake for 25 minutes at 350ºC </br>';
    }
    
    public function cut(){
        echo 'Cutting the pizza into diagonal slices</br>';
        
    }
    
    public function box(){
        
        echo 'Place pizza in official PizzaStore box...</br>';
    }
    
    public function getName(){
        return $this->name;
    }
    
}



abstract class PizzaStore{
   //Abstract Factory
    
    
    public function orderPizza($type){
        
        //Pizza $pizza; //copiado de java
        
        $pizza = $this->createPizza($type);
        
        
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        
        return $pizza;
        
    }
    
    abstract public function createPizza($type);
            
}


//Concrete subclasses!



class NYStyleCheesePizza extends Pizza{
    //Concrete Product
    
    
    public function __construct() {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = array();
        
        array_push($this->toppings, 'Grated Reggiano Cheese');
                
    }
    
      
}



class NTStyleVeggiePizza extends Pizza{
    //
}

class NYStyleClamPizza extends Pizza{
   //
}

class NYStylePepperoniPizza extends Pizza{
    //
}    


class ChicagoStyleVeggiePizza{
    //
}

class ChicagoStyleClamPizza{
    //
}

class ChicagoStylePepperoniPizza{
    //
}


class ChicagoStyleCheesePizza extends Pizza{
    
    
    public function __construct() {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings = array();
        
        array_push($this->toppings, 'Shredded Mozzarella Cheese');
                
    }
    
    public function cut() {
        echo 'Cutting the pizza into square slices</br>';
    }
    
      
}

//This is our concrete Factory!!
class NYPizzaStore extends PizzaStore{
    
    public function createPizza($type) {
        if($type=='cheese'){
            return new NYStyleCheesePizza();
        }elseif ($type=='veggie'){
                return new NTStyleVeggiePizza();
        }elseif($type=='clam'){
            return new NYStyleClamPizza();
        }elseif($type=='pepperoni'){
            return new NYStylePepperoniPizza();
        }else{
            return null;
        }
                        
    }
  
}

class ChicagoPizzaStore extends PizzaStore{
    
    public function createPizza($type) {
        if($type=='cheese'){
            return new ChicagoStyleCheesePizza();
        }elseif ($type=='veggie'){
                return new ChicagoStyleVeggiePizza();
        }elseif($type=='clam'){
            return new ChicagoStyleClamPizza();
        }elseif($type=='pepperoni'){
            return new ChicagoStylePepperoniPizza();
        }else{
            return null;
        }
                        
    }
  
}



$nyStore = new NYPizzaStore();

$chicagoStore = new ChicagoPizzaStore();


$pizza = $nyStore->orderPizza('cheese');

echo 'Ethan ordered a "'.$pizza->getName().'"</br>';

$pizza = $chicagoStore->orderPizza('cheese');

echo 'Joel ordered a "'.$pizza->getName().'"</br>';




