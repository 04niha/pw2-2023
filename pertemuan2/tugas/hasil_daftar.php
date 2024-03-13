<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                <td>1</td>
					<td>neha</td>
					<td>nehasmanjas@gmail.com</td>
					<td>Depok</td>
					<td>+6285893446136</td>
				</tr>
				<tr>
					<td>2</td>
                    <td>neha</td>
					<td>nehasmanjas@gmail.com</td>
					<td>Bogor</td>
					<td>+628593446136</td>
				</tr>

				<?php
				  
                  
                  if (isset($_POST['proses'])) {
                      
					  $proses = $_POST['proses'];
					  $nama_lengkap = $_POST['namalengkap'];
					  $email = $_POST['email'];
					  $alamat = $_POST['alamat'];
					  $Telepon = $_POST['telepon'];
					  
					  
                      echo "<tr>";
                      echo "<td>3</td>";
                      echo "<td>$nama_lengkap</td>";
                      echo "<td>$email</td>";
                      echo "<td>$alamat</td>";
					  echo "<td>$Telepon</td>";
                      echo '<hr/>';
                      
					
                  }
              ?>
			

			</tbody>
		</table>
	</div>
</body>
</html>