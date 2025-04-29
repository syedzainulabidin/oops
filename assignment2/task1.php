<?php


class Animal
{
    public function makeSound()
    {
        echo "Some sound</br>";
    }
}


class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bark</br>";
    }
}



$d1 = new Dog();
$d1->makeSound();

?>