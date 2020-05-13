<?php 

require 'php/function.php';

$electronik = query("SELECT * from electronik");

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
			<?php foreach ($electronik as $electro) : ?>
			
			<tr>
				
				<td><img src="assets/img116/<?= $electro["Foto"]; ?>"></td>
				<td><?= $electro["Nama Barang"]?></td>
				<td><?= $electro["Kelebihan"]?></td>
				<td><?= $electro["Tanggal Rilis"]?></td>
				<td><?= $electro["Harga"]?></td>
				<td><?= $electro["Merek"]?></td>

			</tr>	
		
			<?php $i++ ?>
			<?php endforeach; ?>

		</table>

 </body>