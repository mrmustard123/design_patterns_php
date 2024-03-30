<?php

/**
 * File: PancakeHouseMenu
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 27 mar. de 2024 18:17:33
 * User: user
 */

include 'MenuItem.php';


class PancakeHouseMenu{
    
    private array $menuItems;
    
    public function PancakeHouseMenu(){
        
        $this->addItem('K&B’s Pancake Breakfast',
                        'Pancakes with scrambled eggs, and toast',
                        true,
                        2.99);
        $this->addItem('Regular Pancake Breakfast',
                        'Pancakes with fried eggs, sausage',
                        false,
                        2.99);
        $this->addItem('Blueberry Pancakes',
                        'Pancakes made with fresh blueberries',
                        true,
                        3.49);
        $this->addItem('Waffles',
                        'Waffles, with your choice of blueberries or strawberries',
                        true,
                        3.59);           
        
    }
    
    public function addItem(string $name, string $description, 
            bool $vegetarian, float $price): void{
                
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);        
        array_push($this->menuItems, $menuItem);                                
    }
    
    public function getMenuItems(): array{
        return $this->menuItems;
    }
    
    
}

