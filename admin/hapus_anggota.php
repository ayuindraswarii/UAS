<?php

include "../konek.php";
$id_anggota = $_GET['id_anggota'];
$hapus=mysqli_query($koneksi,"DELETE from anggota where id_anggota='$id_anggota'");

if($hapus)
{
	echo "<script>alert('Sukses Menghapus');
	location.href='tampil_data_anggota_admin.php';</script>";
}
else 
{
	echo "<script>alert('Belum Terhapus');
	location.href='tampil_data_anggota_admin.php';</script>";
}
?>