<?php
require_once 'myClass2.php';

use Sonawap\class\Car;

class myClass extends Car
{
    
}

$myClass = new myClass();

// echo $myClass->benz();
echo $myClass->tyres;
