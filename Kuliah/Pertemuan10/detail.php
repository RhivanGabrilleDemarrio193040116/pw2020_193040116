<?php

require 'function.php';

// ambil id dari URL
$nama = $_GET['nama'];

// query mahasiswa berdasarkan id
$pemogramanweb_193040116 = query("SELECT * FROM pemogramanweb_193040116 where nama = $nama");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
  <link rel="stylesheet" href="style/styles.css">
</head>

<body>

  <h3>Detail Mahasiswa</h3>

  <div class="container">

    <ul>
      <li><img src="img/<?= $pemogramanweb_193040116['gambar']; ?>" class="gambar"></li>
      <li>
        <b>DATA :</b>
      </li>

      <div class="box1">

        <li>NRP       : <?= $pemogramanweb_193040116['$nrp']; ?></li>
        <li>Nama      : <?= $pemogramanweb_193040116['$nama']; ?></li>
        <li>Email     : <?= $pemogramanweb_193040116['$email']; ?></li>
        <li>Fakultas  : <?= $pemogramanweb_193040116['$Fakultas']; ?></li>

      </div>

      <div class="box2">
        <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
        <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
      </div>
    </ul>

  </div>

</body>

</html>