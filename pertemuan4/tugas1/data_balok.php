<?php
class class_balok {
    public $panjang;
    public $lebar;
    public $tinggi;

    
    public function __construct($p, $l, $t) {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    
    public function calculateArea() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }


    public function calculatePerimeter() {
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }

    
    public function calculateVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}


$balok = new class_balok(29, 16, 7);


echo  "Luas Balok: " . $balok->calculateArea() . "\n";
echo "<br>" .  "Keliling Balok: " . $balok->calculatePerimeter() . "\n";
echo  "<br>" . "Volume Balok: " . $balok->calculateVolume() . "\n";
?>
