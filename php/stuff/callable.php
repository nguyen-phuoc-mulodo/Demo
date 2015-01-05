<?php
class Request {
    public function __construct() {
        $this->phuoc = 'What hapens?';
    }
    
    public function test() {
        echo $this->phuoc;
    }
}
function test() {
    echo 'Test function';
}

$request = new Request();

if (is_callable(array($request, 'test'))) {
    echo 'Can use this Object\'s method. <br>';
} else {
    echo 'No';
}

if (is_callable('test')) {
    echo 'Can use this function';
} else {
    echo 'No';
}