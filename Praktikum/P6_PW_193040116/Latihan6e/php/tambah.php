<?php

require 'function.php';

if (isset($_POST["tambah"])) {

  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan!'); 
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal ditambahkan!'); 
            document.location.href = 'admin.php';
          </script>";
  }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Data Page</title>
  <link rel="stylesheet" href="../css/tables.css">
</head>

<body class="b">

  <div class="form">

    <h3>Form Tambah Data Pakaian :</h3>

    <hr>

    <form action="" method="post">

      <table class="tabletambah">
        <tr>
          <td>
            <label>
              Nama Barang :
          </td>
          <td>
            <input type="text" name="NamaBarang" id="NamaBarang" required autofocus>
            </label>
          </td>
        </tr>


        <tr>
          <td>
            <label>
              Kelebihan :
          </td>
          <td>
            <textarea name="Kelebihan" id="Kelebihan" cols="30" rows="10" required></textarea>
            </label>
          </td>
        </tr>

       <tr>
          <td>
            <label>
              Tanggal Rilis :
          </td>
          <td>
            <input type="nama" name="TanggalRilis" id="TanggalRilis" required autofocus>
            </label>
          </td>
        </tr>

       <tr>
          <td>
            <label>
              Harga :
          </td>
          <td>
            <input type="number" name="Harga" id="Harga" required>
            </label>
          </td>
        </tr>

        <tr>
          <td>
            <label>
              Merek :
          </td>
          <td>
            <input type="nama" name="Merek" id="Merek" required>
            </label>
          </td>
        </tr>

        <tr>
          <td>
            <label>
              Foto :
          </td>
          <td>
            <input type="nama" name="Foto" id="Foto" required>
            </label>
          </td>
        </tr>

      </table>

      <hr>

      <button type="submit" name="tambah" class="blueButton">Tambah Data</button>

    </form>

    <a href="admin.php"><button type="submit" class="blueButton">Kembali</button></a>

  </div>

</body>

</html>