<?php

// menghubungkan dengan file php lainnya
require 'php/function.php';

// melakukan query
$electronik = query("SELECT * FROM electronik")

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Tugas2_193040116</title>

	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
	<body>
		<div class="container">
			<?php foreach ($electronik as $electro) : ?>
					<p class="Nama">
					   <a href = "php/detail.php?id=<?= $electro['id'] ?>">
							<?= $electro['Nama Barang'] ?>
						</a>
					</p>
			<?php endforeach ?>
	  </div>
	</body>	
</html>