<?php

 class Car {
    // property
    public $brand; 
    public $color;

    //method
    function getBrand() {
        return $this->brand;
    }
 }  
   
 
    //objek
    $rubicon = new Car();
    $tesla = new Car ();
    
    //setter
    $rubicon->brand = "Rubicon";
    $tesla->brand = "Tesla";

    //echo
    echo $rubicon->getBrand();
    echo '<br>';
    echo $tesla->getBrand();


?>