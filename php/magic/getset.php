<?php

class SinhVienIT_2
{
    public $url='http://sinhvienit.net/';
    private $url2='http://sinhvienit.vn/';
    
    public function __set($name,$value)
    {
        echo 'Bạn vừa gán '.$value.' vào thuộc tính '.$name.' của 1 đối tượng thuộc lớp SinhVienIT_2'.PHP_EOL;
    }
}
header('Content-Type: text/html; charset=utf-8');
$sinhvienit=new SinhVienIT_2();
$sinhvienit->subAdmin='Huỳnh Lê';
echo '<pre>';
print_r($sinhvienit);