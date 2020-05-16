<?php

require 'function.php';

$pemogramanweb_193040116 = query("SELECT * FROM pemogramanweb_193040116")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="style/styles.css">
</head>

<body>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="link">Tambah Data Mahasiswa</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($pemogramanweb_193040116 as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $p['gambar']; ?>" width="60"></td>
        <td><?= $p['nrp']; ?></td>
        <td>
          <a href="detail.php?id=<?= $p['id']; ?>">Lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>
