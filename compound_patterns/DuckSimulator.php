<?php
/**
 * File: DuckSimulator
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 15 mar. de 2024 16:32:10
 * User: user
 */

namespace compound_patterns;

include 'MallarDuck.php';
include 'RedheadDuck.php';
include 'RubberDuck.php';
include 'DuckCall.php';
include 'goose.php';
include 'gooseadapter.php';
include 'QuackCounter.php';


class DuckSimulator{
    /* ASI ES EL MAIN EN JAVA PERO EN PHP LO HAREMOS DIFERENTE
    public static function main(array $args){       
        $simulator = new DuckSimulator();
        $simulator->simulate();        
    }*/
    
    public function __call($function, $arguments) {
        /*Polymorphism*/
        
        if($function=='simulate'){
            
            $count = count($arguments);
            
            switch ($count){
                case 0:{                    
                    $mallarDuck = new QuackCounter(new MallarDuck());
                    $redheadDuck = new QuackCounter(new RedheadDuck());
                    $duckCall = new QuackCounter(new DuckCall());
                    $rubberDuck = new QuackCounter(new RubberDuck());
                    $gooseDuck = new GooseAdapter(new Goose());
                    echo 'Duck Simulator:<br/>';
                    $this->simulate($mallarDuck);  /*Se llama recursivamente al metodo sobreescrito (1 argumento)*/
                    $this->simulate($redheadDuck);
                    $this->simulate($duckCall);
                    $this->simulate($rubberDuck);    
                    $this->simulate($gooseDuck);
                    
                    echo 'The ducks quacked ', QuackCounter::getQuacks().' times<br/>';
                    
                    break;
                }
                case 1:{   /*este seria el metodo sobreescrito*/
                    $duck = $arguments[0]; /*Devuelve un objeto de clase "Quackable"*/
                    $duck->quack();
                    break;
                }                                
            }                                    
        }  
    }
 /*   NO SE PUEDE DUPLICAR METODO EN PHP
    public function simulate(){
        $mallarDuck = new MallarDuck();
        $redheadDuck = new RedheadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();
        
        echo '<br/>Duck Simulator';
        
        $this->simulate($mallarDuck);
        $this->simulate($redheadDuck);
        $this->simulate($duckCall);
        $this->simulate($rubberDuck);
                
    }
    
    public function simulate(Quackable $duck){
        $duck->quack();
        
    }
    
    */
    
}//end class DuckSimulator

