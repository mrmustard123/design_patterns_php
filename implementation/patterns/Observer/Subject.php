<?php

/**
 * File: Subject
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 3 abr. de 2024 13:14:02
 * User: user
 */

namespace observer_pattern;


interface Subject{
    public function registerObserver(Observer $o):  void;
    public function removeObserver(Observer $o): void;
    public function notifyObservers();
}

