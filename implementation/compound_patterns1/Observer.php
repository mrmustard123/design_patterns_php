<?php

/**
 * File: Observer
 * Author: Leonardo G. Tellez Saucedo <leonardo616@gmail.com>
 * Date: 30 mar. de 2024 19:19:47
 * User: user
 */

namespace compound_patterns;

interface Observer{
    public function update(QuackObservable $duck): void;
}
