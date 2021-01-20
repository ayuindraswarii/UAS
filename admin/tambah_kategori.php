<?php 
	include '../konek.php';
	
	$nama_kategori=$_POST['nama_kategori'];

	$tambah=mysqli_query($koneksi,"INSERT INTO kategori_buku(nama_kategori) VALUES ('$nama_kategori')");
	if ($tambah) {
		echo "<script>alert('Berhasil Tambah Data Kategori');location.href='tampil_data_kategori.php';</script>";
	} else {
		echo "<script>alert('Gagal Tambah Data Kategori');location.href='tampil_data_kategori.php';</script>";
	}
 ?>