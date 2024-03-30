<?php

/*
  Created on : 9 abr. de 2022, 19:23:05
  Author: Leonardo G. Tellez Saucedo
 */

class Singleton{
        
    /*private static $uniqueInstance = new Singleton(); //no se puede como en java */
    private static $uniqueInstance; 
    
    private $singletonData = 'internal data of singleton class</br>';
    
    private function __construct() {
        //
    }
    
    public static function GetInstance(){
        
        if(self::$uniqueInstance==null){
            
            return self::$uniqueInstance;
        }
        
        
    }
    
    public function SingletonOperation(){
        $this -> singletondata = 'modify the internal data of the singleton class</br>';
    }

    public function GetSigletonData(){
        return $this->singletonData;
    }
                
}


//Ejemplo:

$singletonA = Singleton::GetInstance();
echo $singletonA->GetSigletonData();

$singletonB = Singleton::GetInstance();

if ($singletonA === $singletonB) {
    echo 'same object</br>';
}
$singletonA->SingletonOperation(); //  A is modified here
echo $singletonB->GetSigletonData();
echo $singletonA->GetSigletonData();

/*NOTA:
 
 * Use "$this" to refer to the current object. 
 * Use "self" to refer to the current class. 
 * In other words, use $this->member for non-static members, 
 * use self::$member for static members.

 *  */






