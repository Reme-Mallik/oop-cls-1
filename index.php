<?php
class House {

    function __construct(){
        echo "this is construct function </br>";
    }

function Welcomehome($housename = "boshundora city")
{
    echo "The {$housename } is so beautiful </br>";
}
function Outlokkinghome($housename ="boshundora city")
{
echo "The  {$housename} is look very nice</br>";
}
 
}
 $mansion = new House();
 $mansion->Welcomehome();
 $mansion->Outlokkinghome();

 $bulding= new House();
 $bulding->Welcomehome("bulding");
 $bulding->Outlokkinghome("bulding");