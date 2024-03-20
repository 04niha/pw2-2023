<?php
 require_once 'class_kendaraan.php';

 $motor = new Motor ('motor', 'Bensin', 2);
 $submarine = new Submarine('submarine', 'solar', 1000);

 //echo motor
 echo'Info Motor:<br>';
 $motor->getInfoMotor();
 echo '<br>';
 //echo motor 
 echo 'Info Kapal Selam:<br';
 $submarine->getInfoSubmarine();
 echo '<br>';

?>