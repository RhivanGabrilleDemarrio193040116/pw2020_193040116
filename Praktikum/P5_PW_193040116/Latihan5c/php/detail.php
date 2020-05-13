<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman indeks.php
if(!isset($_GET['id'])){
   header("location:../index.php");
   exit;
}

require 'function.php';

// mengambil id dari url
$id = $_GET['id'];
// melakukan query dengan parameter id yang diambil dari url
$electronik = query("SELECT * FROM electronik WHERE id = $id")[0];	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Detail</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
   <div class="container">
   	 <div class="gambar">
   	 	<img src="../assets/img116/<?= $electronik["Foto"]; ?>" alt="">
     </div>
     <div class="keterangan">
     	<P><?= $electronik["Nama Barang"] ?></P>
     	<P class="desk"><?= $electronik["Kelebihan"] ?></P>
     	<P><?= $electronik["Tanggal Rilis"] ?></P>
     	<P><?= $electronik["Harga"] ?></P>
     	<P><?= $electronik["Merek"] ?></P>
     </div>
	 <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
	</div>
</body>
</html>