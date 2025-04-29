<?php


class Vehicle
{
    protected $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }
}


class Car extends Vehicle
{
    protected $model;

    public function __construct($brand, $model)
    {
        parent::__construct($brand);
        $this->model = $model;
    }
    public function displayInfo()
    {
        echo "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}


$c1 = new Car("Toyota", "Corolla");
$c1->displayInfo();

?>