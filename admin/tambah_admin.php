<?php 
	include '../konek.php';
	
	$nama_admin=$_POST['nama_admin'];
	$email=$_POST['email'];
	$telp=$_POST['telp'];
	$alamat=$_POST['alamat'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$level=$_POST['level'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$tambah=mysqli_query($koneksi,"INSERT INTO admin(nama_admin,email,telp,alamat,jenis_kelamin,level,username,password) 
		VALUES ('$_POST[nama_admin]','$_POST[email]','$_POST[telp]','$_POST[alamat]','$_POST[jenis_kelamin]','$_POST[level]','$_POST[username]','$_POST[password]')");

	if ($tambah) {
		echo "<script>alert('Berhasil Tambah Data');location.href='tampil_data_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Tambah Data');location.href='tampil_data_admin.php';</script>";
	}
 ?>