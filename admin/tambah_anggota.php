<?php 
	include '../konek.php';
	
	$nama_anggota=$_POST['nama_anggota'];
	$alamat_anggota=$_POST['alamat_anggota'];
	$telp=$_POST['telp'];

	$tambah=mysqli_query($koneksi,"INSERT INTO anggota(nama_anggota,alamat_anggota,telp) 
		VALUES ('$nama_anggota','$alamat_anggota','$telp')");

	if ($tambah) {
		echo "<script>alert('Berhasil Tambah Anggota');location.href='tampil_data_anggota_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Tambah Anggota');location.href='tampil_data_anggota_admin.php';</script>";
	}
 ?>