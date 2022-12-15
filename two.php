<?php
class Human{
    function __construct($eye, $hairstyle ="style"){
    $this->eye = $eye;
    $this->hairstyle= $hairstyle;
    }

private $body = "white";
private $eye ="black";
private $hairstyle ="normal";

function bodybackground(){
echo "details of her body color is {$this ->body}";
}
 public function eyecolorfunction(){
    echo $this->eye;
    echo $this->hairstyle;

 }
}
$man= new Human ("black","brown");
$man->eyecolorfunction();
echo "</br>";

$robot= new Human("green" , "blue");
echo $robot->eyecolorfunction();

?>



<?php

class Semester{
   private $books ="duita";

   public function softwareengineering (){
    echo "i can make good result in this subject";
   }
  public function Civersucurity(){
    echo "i am worried about this subject";
 }

  }

 class Result extends Semester{

   public function Practical(){

   echo "i have beter think about all practical subject";
   }


   public function allsubject(){
     return $this->softwareengineering().$this->Civersucurity().$this-> Practical();
   }
}
    $about= new Result();
    $about ->allsubject();
    ?>



