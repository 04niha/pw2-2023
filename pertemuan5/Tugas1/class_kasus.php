<?php
  class Vehicle {
    protected $type;
    protected $cloth;

    protected function __construct($type,$cloth)
    {
        $this->type = $type;
        $this->cloth = $cloth;

    }

    protected function getInfo(){
        echo "jenis Baju: ". $this->type ."<br>";
        echo "jenis kain: ". $this->cloth ."<br>";

    }

  }

   class Baju extends Vehicle {
    public  $color;

    public function __construct($type, $cloth, $color)
    {
        parent::__construct($type, $cloth, $color);
        $this->color = $color;
    }
     public function getInfoBaju(){
        parent::getInfo();
        echo "warna baju: ". $this->color ."<br>";
     }
    
   }


   class celana extends Vehicle {
    public $trouser_model;
    public function __construct($type,$cloth,$trouser_model)
    {
        parent::__construct($type, $cloth);
        $this->$trouser_model = $trouser_model;
    }
    public function getInfoTrousers(){
        parent::getInfo();
        echo "model celana: ". $this->trouser_model ."pendek" ."<br>";
    }
   }
  ?>
