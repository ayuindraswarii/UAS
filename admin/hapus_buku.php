<?php

include "../konek.php";
$id_buku = $_GET['id_buku'];
$hapus=mysqli_query($koneksi,"DELETE from buku where id_buku='$id_buku'");

// unlink("images/".$d['foto']);

if($hapus)
{
	echo "<script>alert('Sukses Menghapus Buku');
	location.href='tampil_data_buku_admin.php';</script>";
}
else 
{
	echo "<script>alert('Data Buku Belum Terhapus');
	location.href='tampil_data_buku_admin.php';</script>";
}
?>