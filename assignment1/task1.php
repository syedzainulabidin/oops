<?php
class Car
{
    private $brand;
    private $color;

    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    public function displayDetails(){
        echo "<b>Car Brand: </b>".$this->brand . "<br>";
        echo "<b>Car Color: </b>".$this->color . "<br>";
    }
}

$car1 = new Car("toyota", "red");
$car2 = new Car("honda", "black");

$car1->displayDetails();
$car2->displayDetails();
