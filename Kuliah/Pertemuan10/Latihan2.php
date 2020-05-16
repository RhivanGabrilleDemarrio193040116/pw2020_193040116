<?php

require 'function.php';

$pemogramanweb_193040116= query("SELECT * FROM pemogramanweb_193040116")

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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Fakultas</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($pemogramanweb_193040116 as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $p['gambar']; ?>" width="60"></td>
        <td><?= $p['nrp']; ?></td>
        <td><?= $p['nama']; ?></td>
        <td><?= $p['email'];  ?></td>
        <td><?= $p['Fakultas'];  ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>

</html>