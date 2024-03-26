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
            
            $object = $arguments[0];
                                    
            $reflect = new \ReflectionClass($object);
            
            /*A diferencia de los anteriores ejercicios, el polimorfismo no se da
            por la cantidad de argumentos en el prototipo sino por la clase de objeto
            que es el argumento. En java el polimorfismo es mas claro:
            void simulate(AbstractDuckFactory duckFactory){...
            void simulate(Quackable duck){...
             */
            
            $classname =$reflect->getShortName();
                                                                        
            if($classname === 'CountingDuckFactory'){ 
                    $duckFactory = $object;
                    $mallarDuck =  $duckFactory->createMallarDuck();
                    $redheadDuck = $duckFactory->createRedheadDuck();
                    $duckCall = $duckFactory->createDuckCall();
                    $rubberDuck = $duckFactory->createRubberDuck();
                    $gooseDuck = new GooseAdapter(new Goose());
                    echo 'Duck Simulator:<br/>';
                    $this->simulate($mallarDuck);  /*Se llama recursivamente al metodo sobrecargado*/
                    $this->simulate($redheadDuck);
                    $this->simulate($duckCall);
                    $this->simulate($rubberDuck);    
                    $this->simulate($gooseDuck);
                    
                    echo 'The ducks quacked ', QuackCounter::getQuacks().' times<br/>';
                    
            }
            else{   /*este seria el metodo sobrecargado*/
                
                 /*Devuelve un objeto de clase "Quackable"*/
                $duck = $arguments[0];                
                $duck->quack();

            }                 
        }  
    }
    
}//end class DuckSimulator

