<?php 

$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

mysqli_select_db($conn, "pw_193040116") or die("Database salah");

$result = mysqli_query($conn, "SELECT * from electronik");

?>


<html>
 <head>
 	<meta charset="UTF-8">
 	<title>Index</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">

 </head>
 <body>


 	<h2>Data electronik 2020</h2>
 	
	<table border="1" cellspacing="0" cellpadding="20">

			<tr>
				<th>Foto</th>
				<th>Nama Barang</th>
				<th>Kelebihan</th>
				<th>Tanggal Rilis</th>
				<th>Harga</th>
				<th>Merek</th>

			</tr>
			
			<?php $i = 1; ?>
			<?php while($row = mysqli_fetch_assoc($result)) : ?>
			
			<tr>
				
				<td><img src="assets/img116/<?= $row["Foto"]; ?>"></td>
				<td><?= $row["Nama Barang"]?></td>
				<td><?= $row["Kelebihan"]?></td>
				<td><?= $row["Tanggal Rilis"]?></td>
				<td><?= $row["Harga"]?></td>
				<td><?= $row["Merek"]?></td>

			</tr>	
		
			<?php $i++ ?>
			<?php endwhile; ?>

		</table>

 </body>