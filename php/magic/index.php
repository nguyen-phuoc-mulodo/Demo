<?php

class A {
    public function __call($method, $parameters) {
        echo "I'm the __call() magic method".PHP_EOL;   
    }
    
    public static function __callStatic($method, $parameters) {
        echo "I'm the __callStatic() magic method".PHP_EOL;
    }
}

$a = 'A';

(new A)->hi();
(new $a)->hihi();