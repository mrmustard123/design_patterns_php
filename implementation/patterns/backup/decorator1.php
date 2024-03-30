<?php

/*
  Created on : 12 abr. de 2022, 20:19:12
  Author: Leonardo G. Tellez Saucedo
 */



abstract class Beverage{
    
    
    protected $description = 'Unknow Beverage';
    
    public function getDescription(){
        
        return $this->description;
        
    }
    
    public abstract function cost();
       
    
}



abstract class CondimentDecorator extends Beverage{
    
    public abstract function cost();

}



/***COFFEE TYPES****/


class Espresso extends Beverage{
    
    public function __construct() {
        $this->description = 'Espresso';
    }
    
    public function cost(){
        return 1.99;
    }    
}


class HouseBlend extends Beverage{
    
    public function __construct() {
        $this->description='House Blend Coffe';
    }
    
    public function cost(){
        return 0.89;
    }

}

class DarkRoast extends Beverage{
     
    public function __construct() {
        $this->description = 'DarkRoast';
    }
    
    public function cost(){
        return 0.99;
    }    
}


class Decaf extends Beverage{
    
    public function __construct() {
        $this->description = 'Decaf';
    }
    
    public function cost(){
        return 1.05;
    }    
}




/**CONDIMENTS***/


class Mocha extends CondimentDecorator{
    
    protected $beverage; //Beverage $beverage;  (esto es la composicion)
    
    public function __construct($beverage) {
        $this->beverage = $beverage;
    }
    
    public function getDescription() {
        
        return $this->beverage->getDescription().', Mocha';
        
    }
    
    public function cost(){
        return 0.20 + $this->beverage->cost();
    }
        
}

class SteamedMilk extends CondimentDecorator{
    
    protected $beverage; //Beverage $beverage;
    
    public function __construct($beverage) {
        $this->beverage = $beverage;
    }
    
    public function getDescription() {
        
        return $this->beverage->getDescription().', Steamed Milk';
        
    }
    
    public function cost(){
        return 0.10 + $this->beverage->cost();
    }
        
}

class Soy extends CondimentDecorator{
    
    protected $beverage; //Beverage $beverage;
    
    public function __construct($beverage) {
        $this->beverage = $beverage;
    }
    
    public function getDescription() {
        
        return $this->beverage->getDescription().', Soy';
        
    }
    
    public function cost(){
        return 0.15 + $this->beverage->cost();
    }
        
}

class Whip extends CondimentDecorator{
    
    protected $beverage; //Beverage $beverage;
    
    public function __construct($beverage) {
        $this->beverage = $beverage;
    }
    
    public function getDescription() {
        
        return $this->beverage->getDescription().', Whip';
        
    }
    
    public function cost(){
        $cost = $this->beverage->cost();
        return 0.10 + $cost;
    }
        
}



$beverage = new Espresso();

echo $beverage->getDescription().' $ '.$beverage->cost().'</br>';


$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);

echo $beverage2->getDescription().' $ '.$beverage2->cost().'</br>';

$beverage3 = new HouseBlend();

$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);

echo $beverage3->getDescription().' $ '.$beverage3->cost().'</br>';




