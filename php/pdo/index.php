<?php

try {
    $host = 'localhost';
    $dbname = 'test';
    $user = 'root';
    $pass = '';
    
    //*** Connect to DB
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
    
    $data = $db->query('SELECT * FROM POSTS');
   
    foreach ($data as $item) {
        echo $item['content'] . '<br>';
    }
    //*** Set error informing mode
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
    echo 'Error <br>';
    echo $ex->getMessage();
}
