<?php


/*
  Created on : 9 abr. de 2022, 16:43:15
  Author: Leonardo G. Tellez Saucedo
 */

/*Singleton is a pattern that ensures that there's going to be 
one and only one instance of an object in the system. */
class MyClass{
    
    private $MyClass;
       
    
    public static function GetInstance(){
        
        return new MyClass();
        
    }
                
}

?>