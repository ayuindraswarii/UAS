<?php

include "../konek.php";
$id_kategori = $_GET['id_kategori'];
$hapus=mysqli_query($koneksi,"DELETE from kategori_buku where id_kategori='$id_kategori'");

if($hapus)
{
	echo "<script>alert('Sukses Menghapus Kategori');
	location.href='tampil_data_kategori.php';</script>";
}
else 
{
	echo "<script>alert('Kategori Belum Terhapus');
	location.href='tampil_data_kategori.php';</script>";
}
?>