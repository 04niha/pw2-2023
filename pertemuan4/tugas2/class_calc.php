<?php
class Calculator {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function pertambahan() {
        return $this->num1 + $this->num2;
    }

    public function pengurangan() {
        return $this->num1 - $this->num2;
    }

    public function pembagian() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Error: Pembagian dengan nol tidak bisa dilakukan.";
        }
    }

    public function perkalian() {
        return $this->num1 * $this->num2;
    }
}


$calculator = new Calculator(10, 5);

echo "Hasil Pertambahan: " . $calculator->pertambahan() . "<br>";
echo "Hasil Pengurangan: " . $calculator->pengurangan() . "<br>";
echo "Hasil Pembagian: " . $calculator->pembagian() . "<br>";
echo "Hasil Perkalian: " . $calculator->perkalian() . "<br>";
?>
