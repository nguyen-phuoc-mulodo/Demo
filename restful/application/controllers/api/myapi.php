<?php

require(APPPATH. 'libraries/REST_Controller.php');

class Myapi extends REST_Controller
{
    function user_get()
    {
        //respond with one user
        $data = array(
            array('name' => 'Nguyen Huu Phuoc','age' => '22'),
        );
        $this->response($data);
    }

    function users_get()
    {
        //respond with many users
    }
    
    
}