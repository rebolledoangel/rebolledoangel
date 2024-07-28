<?php
//OOP BASIC EXAMPLE;
//ENCAPSULATION
class Car{
  private $color;
  public function setColor($color){
    $this->color=$color;
  }

  public function getColor(){
    return $this->color;
  }

}
$myCar=new Car();
$mycar->setColor('Red and Blue');
echo 'The car color is: '. $mycar->getColor();


?>
