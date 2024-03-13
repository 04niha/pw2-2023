<?php
$m_fruits = [
  [ "ID" => "1", "Nama" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Buah pisang memiliki kandungan gizi lengkap. Dominan mengandung Karbohidrat. Per 100 gram karbohidrat pisang memiliki nilai energi sekitar 136 kalori."],
  [ "ID" => "2", "Nama" => "anggur", "color" => "ungu", "stock" => 13, "price" => 20000, "description" => "Anggur mengandung berbagai nutrisi yang cukup penting untuk kesehatan tubuh. Buah ini banyak manfaat, mulai dari menjaga kesehatan jantung hingga mengoptimalkan memori.”"],
  [ "ID" => "3", "Nama" => "apel", "color" => "merah", "stock" => 21, "price" => 25000, "description" => "Apel adalah camilan rendah kalori yang kaya akan serat. Serat ini membantu memberi perasaan kenyang lebih lama, sehingga Anda cenderung makan lebih sedikit."],
  [ "ID" => "4", "Nama" => "jeruk", "color" => "oren", "stock" => 20, "price" => 20000, "description" => "Buah jeruk merupakan buah yang memiliki banyak manfaat karena mengandung banyak vitamin C, maka tidaklah heran apabila sebagian besar orang sangat menyukainya"],
  [ "ID" => "5", "Nama" => "strawbery", "color" => "merah", "stock" => 30, "price" => 30000, "description" => "Buah strawberry diperkaya oleh kandungan vitamin C dan antioksidan — seperti flavonoid, phenolic, phytochemicals, dan ellagic acid."], 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #8B0000;
            color: black;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #00FFFF;
        }
        tr:nth-child(odd) {
            background-color: #FFFF00;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
        foreach ($m_fruits as $fruit) {
          ?>
          <tr>

          <td><?= $fruit["ID"] ?></td> 
          <td><?= $fruit["Nama"] ?></td> 
          <td><?= $fruit["color"] ?></td> 
          <td><?= $fruit["stock"] ?></td> 
          <td><?= $fruit["price"] ?></td> 
          <td><?= $fruit["description"] ?></td> 
          
      </tr>

      <?php
        } 
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>