<?php 

/*
  Created on : 10 abr. de 2022, 12:07:30
  Author: Leonardo G. Tellez Saucedo
 */

//declare(strict_types=1);

interface Duck{
    
    public function quack();
    public function fly();
       
}

Class MallarDuck implements Duck{
    
    
    public function quack() {
        echo '¡Quack!</br>';
    }
        
    public function fly() {
        echo "I'm flying</br>";
    }
    
}

interface Turkey{
    public function gobble();
    public function fly();    
}


Class WildTurkey implements Turkey{
    
    public function gobble() {
        echo 'Gobble, gobble</br>';
    }
    
    public function fly(){
        echo "I'm flying a short distance</br>";
    }
}

/***********ADAPTER************/

Class TurkeyAdapter implements Duck{
    
    public $turkey;
    
   // public function TurkeyAdapter(Turkey $turkey){  /*Si se usa: declare(strict_types=1); */
     public function __construct($turkey){ /*Sin embargo debe recibir un objeto de tipo Turkey sino dara error*/
        $this->turkey = $turkey;        
    }
    
    public function quack() {
        
        //Si el $turkey no es de tipo Turkey, esto dara error
        $this->turkey->gobble(); 
    }
    
    public function fly() {
        
        for($i=0;$i<5;$i++){
            $this->turkey->fly();            
        }
        
        
    }
    
    
}

/*****TEST****/

function testDuck($duck){
    $duck->quack();
    $duck->fly();
}


/*Aqui creamos un pato*/
$duck = new MallarDuck();  

/*Aqui creamos un pavo*/
$turkey = new WildTurkey(); 

/*Aqui creamos el adaptador*/
$turkeyAdapter = new TurkeyAdapter($turkey); 

echo 'The Turkey says...</br>';

$turkey->gobble();

$turkey->fly();

echo 'The Duck says...</br>';
testDuck($duck);


echo 'The TurkeyAdapter says...</br>';
testDuck($turkeyAdapter);



