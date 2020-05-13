<?php

//menghubungkan dengan file php lainnya
require 'php/function.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$electronik = query("SELECT * FROM electronik WHERE 
              Nama Barang LIKE '%$keyword%' OR
              Kelebihan LIKE '%$keyword%' OR
              Tanggal Rilis LIKE '%$keyword%' OR
              Harga LIKE '%$keyword%' OR
              Merek LIKE '%$keyword%' ");
} else {
	$electronik = query("SELECT * FROM electronik");
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Index</title>

	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body class="a">


	<div class="container">

		<h2 style="text-align: center">Halaman Index</h2>

		<hr>

		<form action="" method="get">
			<input type="text" name="keyword" autofocus>
			<button type="submit" name="cari">Cari!</button>
		</form>

		<br>

		<?php if (empty($electronik)) : ?>

			<h1 style="text-align: center">Data tidak ditemukan</h1>

		<?php else : ?>

			<?php foreach ($electronik as $electro) : ?>
				<p class="Nama Barang">
					<a class="special" href="php/detail.php?id=<?= $electro['id'] ?>">
						<?= $electro['Nama Barang'] ?>
					</a>
				</p>
			<?php endforeach; ?>

		<?php endif; ?>

		<br>
		<hr>

		<a class="special" href="php/admin.php" style="line-height: 50px; background-color: maroon; border-radius: 10px;">
			Menuju halaman Admin!
		</a>

	</div>

</body>

</html>