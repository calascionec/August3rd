<?php

  class Car
  {
    private $make_model;
    private $price;
    private $miles;
    private $image_path;

      public function __construct($make_model = "defaultCar", $price = 0.00, $miles = 0,$image_path="http://www.clipartbest.com/cliparts/ace/o9X/aceo9Xzgi.jpeg"){

        $this->make_model = $make_model;
        $this->price = $price;
        $this->miles = $miles;

      }// end construct

      function getMakeModel() {
        return $this->make_model;
      }

      function getPrice() {
        return $this->price;
      }

      function getMiles() {
        return $this->miles;
      }

      function setMakeModel ($new_make_model){$this->make_model = $new_make_model;}

      function setPrice($new_price){$this->price = $new_price;}
      function setMiles($new_miles){$this->miles = $new_miles;}
      function setImagePath($new_image_path){$this->image_path = $new_image_path;}

//print_r();
  }// end car class

  $car1 = new Car("miata",5.99,23);

//echo $car1->make_model;

//print_r($car1);
//var_dump($car1);
?>
