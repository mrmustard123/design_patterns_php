<?php

/**
 * File: QuackableIterator
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 27 mar. de 2024 23:16:12
 * User: user
 */

namespace compound_patterns;

include 'Iterator.php';


class QuackableIterator implements Iterator{
    
    public array $items;
    public int $position;    
    
       
    public function __construct() {
        $this->items = [];
        $this->position=0;
    }
    
    public function hasNext(): bool{
        
        $lenght = count($this->items);
        
        if( ($this->position >= $lenght) || ($this->items[$this->position] == null) ) {
            return false;
        } else {
            return true;
        }                
    }
    
    public function next(){
        $item = $this->items[$this->position];
        $this->position = $this->position + 1;
        return $item;        
    }
    
    public function add($item){        
        array_push($this->items, $item);        
    }
    
    public function getItems(): array {
        return $this->items;
    }

    public function getPosition(): int {
        return $this->position;
    }

    public function setItems(array $items): void {
        $this->items = $items;
    }

    public function setPosition(int $position): void {
        $this->position = $position;
    }    
    
    
    
    
    
}


/*Ejemplo de java:
public class DinerMenuIterator implements Iterator {
    MenuItem[] items;
    int position = 0;
    public DinerMenuIterator(MenuItem[] items) {
        this.items = items;
    }
    public Object next() {
        MenuItem menuItem = items[position];
        position = position + 1;
        return menuItem;
    }
    public boolean hasNext() {
        if (position >= items.length || items[position] == null) {
            return false;
        } else {
            return true;
        }
    }
}
 * 
 *  */
