<?php 
$koneksi = mysqli_connect("localhost","root","","db_perpus_buku");

if (mysqli_connect_error()) {
	echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

 ?>