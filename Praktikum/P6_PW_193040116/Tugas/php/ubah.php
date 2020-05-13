<?php

require 'function.php';

$id = $_GET['id'];
$electro = query("SELECT * FROM electronik WHERE id = $id")[0];

if (isset($_POST["ubah"])) {

  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!'); 
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal diubah!'); 
            document.location.href = 'admin.php';
          </script>";
  }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data Page</title>
  <link rel="stylesheet" href="../css/tables.css">
</head>

<body class="c">

  <div class="form">

    <h3>Form Ubah Data Pakaian :</h3>

    <hr>

    <form action="" method="post">

        <input type="hidden" name="id" id="id" value="<?= $electro['id']; ?>">
    <table class="tabletambah">

        <tr>
          <td>
            <label>
              Nama Barang :
          </td>
          <td>
            <input type="text" name="NamaBarang" id="NamaBarang" required autofocus value="<?= $electro['Nama Barang']; ?>">
            </label>
          </td>
        </tr>


        <tr>
          <td>
            <label>
              Kelebihan :
          </td>
          <td>
            <textarea name="Kelebihan" id="Kelebihan" cols="30" rows="10" required><?=$electro['Kelebihan']; ?></textarea>
            </label>
          </td>
        </tr>

       <tr>
          <td>
            <label>
              Tanggal Rilis :
          </td>
          <td>
            <input type="nama" name="TanggalRilis" id="TanggalRilis" required autofocus value="<?= $electro['Tanggal Rilis']; ?>">
            </label>
          </td>
        </tr>

       <tr>
          <td>
            <label>
              Harga :
          </td>
          <td>
            <input type="number" name="Harga" id="Harga" required value="<?= $electro['Harga']; ?>">
            </label>
          </td>
        </tr>

        <tr>
          <td>
            <label>
              Merek :
          </td>
          <td>
            <input type="nama" name="Merek" id="Merek" required value="<?= $electro['Merek']; ?>">
            </label>
          </td>
        </tr>

        <tr>
          <td>
            <label>
              Foto :
          </td>
          <td>
            <input type="nama" name="Foto" id="Foto" required value="<?= $electro['Foto']; ?>">
            </label>
          </td>
        </tr>

      </table>

      <hr>
    
      <button type="submit" name="ubah" class="greenButton">Ubah Data!</button>

    </form>

    <a href="admin.php"><button type="submit" class="greenButton">Kembali</button></a>

  </div>

</body>

</html>