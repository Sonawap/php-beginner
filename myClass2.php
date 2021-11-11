<?php
class Car{
    // public $tyres = 6;
    // public function toyota(){
    //     $color = 'blue';
    //     $tyres = $this->tyres;
    //     return '<p>This is a toyota Car: has ' .$tyres. ' tyres and has '.$color.' Color </p>';
    // }

    // public function benz(){
    //     $color = 'red';
    //     $tyres = $this->tyres;
    //     return '<p>This is a benz Car: has ' .$tyres. ' tyres and has '.$color.' Color </p>';
    // }

    // public function honda(){
    //     $color = 'green';
    //     $tyres = $this->tyres;
    //     return '<p>This is a honda Car: has ' .$tyres. ' tyres and has '.$color.' Color </p>';
    // }


    public function myCar($nameOfCar, $colorOfCar, $typeOfCar ){
        return '<p>This is a '.$nameOfCar.' Car: has ' .$typeOfCar. ' tyres and has '.$colorOfCar.' Color </p>';
    }

}

$car = new Car();
// echo $car->myCar('toyota', 'red', 4);
// echo $car->myCar('benz', 'blue', 40);
// echo $car->myCar('ferrari', 'gold', 3);

