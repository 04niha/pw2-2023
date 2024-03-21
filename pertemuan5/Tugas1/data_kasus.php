<?php

require_once 'class_kasus.php';

// Creating objects
$baju = new Baju ('gamis', 'katun', 'kuning');
$celana = new celana ('celana', 'neci', 'pendek');

// Getting information
echo 'Info Baju:<br>';
$baju->getInfoBaju();
echo "<br>";

echo 'Info Celana:<br>';
$celana->getInfoTrousers();
echo "<br>";
?>
