<?php


class Vehicle
{
    public function makeSound()
    {
        echo "Vehicle sound </br>";
    }
}


class Car extends Vehicle
{
    public function makeSound()
    {
        echo "Car sound </br>";
    }
}


class Motorcycle extends Vehicle
{
    public function makeSound()
    {
        echo "Bike sound </br>";
    }
}

class Truck extends Vehicle
{
    public function makeSound()
    {
        echo "truck sound </br>";
    }
}


$c1 = new Car();
$m1 = new Motorcycle();
$t1 = new Truck();

$c1->makeSound();
$m1->makeSound();
$t1->makeSound();
