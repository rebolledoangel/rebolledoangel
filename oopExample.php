<?php
//OOP BASIC EXAMPLE;
echo '------ENCAPSULATION------';
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

echo '------INHERITANCE------';
class Animal{
  protected $name;

  public function __construct($name){
    $this->name=$name;
  }
}

class Dog extends Animal{
  public function makesound(){
    echo 'Bark';
  }

  public function dogName(){
    echo $this->name . ' does not like '
  }
}

$mydog=new Dog('Princess');
$mydog->dogName(). $mydog->makesound;

echo '------POLYMORPHISM------';
class Shape{
  public function draw(){
    echo 'Drawing a shape';
  }
}

class Circle extends Shape{
  public function draw(){
    echo 'Drawing Circle';
  }
}

class Square extends Shape{
  public function draw(){
    echo 'Drawing Square';
  }
}

function drawShape(Shape $myshape){
  $myshape->draw();
}


echo '------ABSTRACTION------';
abstract class Animal(){
  protected $animalName;

  public function __contruct($animalName){
    $this->name=$animalName;
  }

  abstract public fucntion makeSound2();
}

class Dog2 extends Animal{
  public function makeSound2(){
    echo $this->animalName ' Make this sound Bark';
  }
}

class Cat2 extends Animal{
  public function makeSound2(){
    echo $this->animalName ' Make this sound Meow';
  }
}
$mydog=new Dog2('Princess');
echo $mydog->makesound2();

$mycat=new Cat2('Minino');
echo $mycat->makesound2();

?>
