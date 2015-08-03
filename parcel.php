<?php

class Parcel{

  private $length;
  private $width;
  private $height;
  private $weight;

    function __construct($parcel_length,$parcel_width,$parcel_height,$parcel_weight){
      $this->length = $parcel_length;
      $this->width = $parcel_width;
      $this->height = $parcel_height;
      $this->weight = $parcel_weight;

    }

    function getLength(){return $this->length;}
    function getWidth(){return $this->width;}
    function getHeight(){return $this->height;}
    function getWeight(){return $this->weight;}


    function setLength($l){$this->length = $l;}
    function setWidth($w){$this->width = $w;}
    function setHeight($h){$this->height = $h;}
    function setWeight($wh){$this->weight = $wh;}


    function volume(){return $this->length * $this->height * $this->width;}


}
$a = new Parcel($_GET["length"],$_GET["width"],$_GET["height"],$_GET["weight"]);

?>

<!DOCTYPE html>
<html>

<head>
  <title></title>

</head>
<body>
  <ul>
<?php
$theString = "<li> The Parcel Length is: ";
$theString .= $a->getLength();
$theString .= "</li>";
$theString .= "<li> The Parcel Width is: ";
$theString .= $a->getWidth();
$theString .= "</li>";
$theString .= "<li>The Parcel Height is: ";
$theString .= $a->getHeight();
$theString .= "</li>";
$theString .= "<li> The Parcel Weight is: ";
$theString .= $a->getWeight();
$theString .= "</li>";
$theString .= "<li> The Parcel Volume is: ";
$theString .= $a->volume();
$theString .= "</li>";

echo $theString;

?>
</ul>
</body>
</html>
