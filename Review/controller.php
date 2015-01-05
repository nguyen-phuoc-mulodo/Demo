<?php

// Get request

// Call database
require 'model.php';
require 'view.php';


// Return view

class Controller 
{
    public function index() {
        $r = Model::get_post();
        View::render('layout', $r);
    }
}

(new Controller)->index();