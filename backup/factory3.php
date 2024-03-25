<?php

/*
  Created on : 19 abr. de 2022, 23:45:35
  Author: Leonardo G. Tellez Saucedo
 * 
 * ABSTRACT FACTORY PATTERN
 */

//Ingredients Factory!

interface PizzaIngredientsFactory{
    
    public function createDough();
    public function createSauce();
    public function createCheese();
    public function createVeggies();
    public function createPepperoni();
    public function createClam();
        
}


class ThinCrustDough{
    private $color;
    
}
class MarinaraSauce{
    private $color;
}
class ReggianoCheese{
    private $color;
}
class Garlic{
    private $color;
}
class Onion{
    private $color;
}
class Mushroom{
    private $color;
}
class RedPepper{
    private $color;
}
class SlicedPepperoni{
    private $color;
}
class FreshClams{
    private $color;
}

class ThickCrustDough{
    private $color;
}
class PlumTomatoSauce{
    private $color;
}
class MozzarellaCheese{
    private $color;
}
class Spinach{
    private $color;
}
class BlackOlives{
    private $color;
}
class EggPlant{
    private $color;
}

class NYPizzaIngredientFactory implements PizzaIngredientsFactory{
    
    public function createDough() {
        return new ThinCrustDough();
    }
    
    public function createSauce() {
        return new MarinaraSauce();
    }
    
    public function createCheese() {
        return new ReggianoCheese();
    }
    
    public function createVeggies() {
        $veggies = [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
        return $veggies;
    }
    
    public function createPepperoni() {
        return new SlicedPepperoni();
    }
    
    public function createClam() {
        return new FreshClams();
    }
    
}    

class ChicagoPizzaIngredientFactory implements PizzaIngredientsFactory{
    
    public function createDough() {
        return new ThickCrustDough();
    }
    
    public function createSauce() {
        return new PlumTomatoSauce();
    }
    
    public function createCheese() {
        return new MozzarellaCheese();
    }
    
    public function createVeggies() {
        $veggies = [new Spinach(), new BlackOlives(), new EggPlant()];
        return $veggies;
    }
    
    public function createPepperoni() {
        return new SlicedPepperoni();
    }
    
    public function createClam() {
        return new FrozenClams();
    }
    
}



abstract class Pizza{
   //Abstract Product 
    protected $name;
    protected $dough;
    protected $sauce;
    protected $cheese;
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
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function toString(){
        //code to print pizza here
    }
    
}


class CheesePizza extends Pizza{
    
    public $ingredientFactory;
    
    
    public function __construct(PizzaIngredientsFactory $ingredientFactory) {
                
        $this->ingredientFactory = $ingredientFactory;
    }
    
    public function prepare() {
        echo 'Preparing '.$this->name.'</br>';
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->chesse = $this->ingredientFactory->createCheese();
        
        
        
    }
}

class VeggiePizza extends Pizza{
    
    public $ingredientFactory;
    
    
    public function __construct(PizzaIngredientsFactory $ingredientFactory) {
                
        $this->ingredientFactory = $ingredientFactory;
    }
    
    public function prepare() {
        echo 'Preparing '.$this->name.'</br>';
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->chesse = $this->ingredientFactory->createCheese();
        
    }
    
}

class ClamPizza extends Pizza{
    
    public $ingredientFactory;
    
    
    public function __construct(PizzaIngredientsFactory $ingredientFactory) {
                
        $this->ingredientFactory = $ingredientFactory;
    }
    
    public function prepare() {
        echo 'Preparing '.$this->name.'</br>';
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->chesse = $this->ingredientFactory->createCheese();
        
        
        
    }
}

class PepperoniPizza extends Pizza{
    
    public $ingredientFactory;
    
    
    public function __construct(PizzaIngredientsFactory $ingredientFactory) {
                
        $this->ingredientFactory = $ingredientFactory;
    }
    
    public function prepare() {
        echo 'Preparing '.$this->name.'</br>';
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->chesse = $this->ingredientFactory->createCheese();
        
        
        
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

class NYPizzaStore extends PizzaStore{
    
    public function createPizza($type) {
        
        $pizza = null;
        
        $ingredientFactory = new NYPizzaIngredientFactory();
        
        if($type=='cheese'){
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Chesse Pizza');            
        }elseif ($type=='veggie'){
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        }elseif($type=='clam'){
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        }elseif($type=='pepperoni'){
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        }
        
        return $pizza;
                        
    }
  
}



$nyPizzaStore = new NYPizzaStore();


$pizza = $nyPizzaStore->orderPizza('cheese');

echo 'Here it is your '.$pizza->getName();