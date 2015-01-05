<?php

class View
{
    public static function render($path='', $data) {
        
        if (is_readable($path.'.php')) {
            require $path.'.php';
        } else {
            echo '404';
        }
    }
}