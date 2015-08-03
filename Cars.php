<?php

class Car
{
  public $make_model;
  public $price;
  public $miles;

  public function __construct($make_model = "defaultCar", $price = 0.00, $miles = 0){

    $this->make_model = $make_model;
    $this->price = $price;
    $this->miles = $miles;

  }


}


?>
