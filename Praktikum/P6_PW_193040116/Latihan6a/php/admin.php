<?php

require 'function.php';

$electronik = query("SELECT * FROM electronik");

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="../css/tables.css">
</head>

<body class="admin">

  <div class="container admin">

    <table border="1px" cellspacing="0" cellpadding="10">
      <tr>
        <th>No</th>
        <th width="25%">Opsi</th>
        <th>Foto</th>
        <th width="13%">Nama Barang</th>
        <th>Kelebihan</th>
        <th>Tanggal Rilis</th>
        <th>Harga</th>
        <th width="14%">Merek</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach ($electronik as $electro) : ?>

        <tr>

          <td><?= $i ?></td>
          <td>
            <a href=""><button class="ubah">Ubah</button></a>
            <a href=""><button class="hapus">Hapus</button></a>
          </td>
          <td><img src="../assets/img116/<?= $electro["Foto"]; ?>" class="Foto"></td>
          <td><?= $electro["Nama Barang"] ?></td>
          <td width="300px"><?= $electro["Kelebihan"] ?></td>
          <td><?= $electro["Tanggal Rilis"] ?></td>
          <td><?= $electro["Harga"] ?></td>
          <td><?= $electro["Merek"] ?></td>

        </tr>

        <?php $i++ ?>
      <?php endforeach; ?>

    </table>

  </div>

</body>

</html>