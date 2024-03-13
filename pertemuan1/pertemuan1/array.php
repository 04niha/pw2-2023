<?php

// $fruits = [ "mangga", "delima", "kiwi"];

// foreach ($fruits as $fruit) {
//     echo $fruit ;
//     echo '<br>';
// }
//array assosiative//
// $dinos =[
//     "dinoName" => "Tricera",
//     "dinoAge" => 300,
//     "isMarried" => "false"
// ];

// foreach($dinos as $dino) {
//     echo $dino;
//     echo '<br>';
// }

$dinos = [
    [
        "dinoName" => "Tricera",
        "dinoAge" => 300
    ],
    [
        "dinoName" => "Rex",
        "dinoAge" => 500
    ],
    [
        "dinoName" => "Ptera",
        "dinoAge" => 250
    ]
    ];
//cara menampilkan semuanya//
    foreach ($dinos as $dino) {
        
        echo $dino["dinoName"] . "  _  ". $dino["dinoAge"] . " Tahun";
        echo '<br>';
    }
//


?>