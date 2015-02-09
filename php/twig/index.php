<?php

include_once 'vendor/autoload.php';

$loader  = new Twig_Loader_Filesystem('template');

$twig = new Twig_Environment($loader, array(
    'cache' => '',
//    'strict_variables' => true,
//    'autoescape' => true,
    'debug' => true,
));

$twig->addExtension( new Twig_Extension_Debug() );

$data['name'] = "<h2>EchPay</h2>";
$data['age'] = 23;
$data['man'] = new stdClass();
$data['man']->name = 'Phuoc';
$data['man']->age = '23';

echo $twig->render('home.twig', $data);

