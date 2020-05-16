<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040116');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($ = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $Fakultas = htmlspecialchars($data['Fakultas']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
           pemogramanweb_193040116
          VALUES
          (null, '$nama', '$nrp', '$email', '$Fakultas', '$gambar')
          ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}