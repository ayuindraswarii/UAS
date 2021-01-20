<?php 
	include '../konek.php';
	
	$id_admin=$_POST['id_admin'];
	$nama_admin=$_POST['nama_admin'];
	$email=$_POST['email'];
	$telp=$_POST['telp'];
	$alamat=$_POST['alamat'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$username=$_POST['username'];
	$password=$_POST['password'];


	$edit = mysqli_query($koneksi,"UPDATE admin set nama_admin='$nama_admin',email='$email',telp='$telp',alamat='$alamat',username='$username',password='$password' where id_admin='$id_admin'");

	if ($edit) {
		echo "<script>alert('Sukses Update Profil');location.href='profil_user.php';</script>";
	} else {
		echo "<script>alert('Gagal Update Profil');location.href='profil_user.php';</script>";
	}
 ?>