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

 ?>
 