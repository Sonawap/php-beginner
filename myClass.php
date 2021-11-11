<?php

class MyClass{
    public $variable = 5;

    ///// the construct methods runs everytime the class in called
    public function __construct()
    {
        $this->variable2 = 10;
    }
    public function myFunction(){
        return $this->variable;
        // return "Hello World";
    }   

    public function number($number){
        return $number;
    }

    public function number2($number2){
        return $number2;
    }

    public function sum($num1, $num2){
        return $this->number2($num1) + $this->number($num2)."<br>"; 
    }
}

/// new instance of the Class
$newInstance = new MyClass();

// Methods within the class
echo $newInstance->sum(2, 30);  //// sum method carries 2 arguements 
echo $newInstance->sum(7, 75);
echo $newInstance->sum(29876, 30786);
echo $newInstance->myFunction(); /// myfunction method carries no arguement
?>