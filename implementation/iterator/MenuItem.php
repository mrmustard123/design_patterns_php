<?php

/**
 * File: MenuItem
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 27 mar. de 2024 17:37:33
 * User: user
 */


class MenuItem{
    
    public string $name;
    public string $description;
    public bool $vegetarian;
    public float $price;
    
    public function __construct(string $name,
                                string $description,
                                bool $vegetarian,
                                float $price)
    {
        $this->name = $name;
        $this->description=$description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }
    
    public function getName(): string{
        return $this->name;
    }
    
    public function getDescription(): string{
        return $this->description;
    }
    
    public function getPrice(): float{
        return $this->price;
    }
    
    public function isVegetarian(){
        return $this->vegetarian;
    }
    
    
    
    
    
    
    
    
    
    
}

