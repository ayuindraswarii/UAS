<?php

include "../konek.php";
$id_admin = $_GET['id_admin'];
$hapus=mysqli_query($koneksi,"DELETE from admin where id_admin='$id_admin'");

if($hapus)
{
	echo "<script>alert('Sukses Menghapus');
	location.href='tampil_data_admin.php';</script>";
}
else 
{
	echo "<script>alert('Belum Terhapus');
	location.href='tampil_data_admin.php';</script>";
}
?>