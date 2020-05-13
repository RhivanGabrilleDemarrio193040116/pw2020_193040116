<?php 

function koneksi() {

$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

mysqli_select_db($conn, "pw_193040116") or die("Database salah");

return $conn;

}

function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$electronik = [];
	while ($electro = mysqli_fetch_assoc($result)) {
		$electronik[] = $electro;
	}

	return $electronik;
}

function tambah($data)
{
	$conn = koneksi();

	$Nama            = htmlspecialchars($data['NamaBarang']);
	$Kelebihan       = htmlspecialchars($data['Kelebihan']);
	$Tanggal         = htmlspecialchars($data['TanggalRilis']);
	$Harga           = htmlspecialchars($data['Harga']);
	$Merek           = htmlspecialchars($data['Merek']);
	$Foto            = htmlspecialchars($data['Foto']);

	$query = "INSERT INTO electronik
			  VALUES
			 (null , '$Foto', '$Nama', '$Kelebihan', '$Tanggal', '$Harga', '$Merek')";

	mysqli_query($conn, $query);

	echo mysqli_error($conn);

	return mysqli_affected_rows($conn);
}
function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM electronik where id = $id");

	return mysqli_affected_rows($conn);
}
 ?>
 