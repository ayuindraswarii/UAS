<?php 
	include '../konek.php';
	
	$id_admin=$_POST['id_admin'];
	$nama_admin=$_POST['nama_admin'];
	$email=$_POST['email'];
	$telp=$_POST['telp'];
	$alamat=$_POST['alamat'];
	$level=$_POST['level'];
	$username=$_POST['username'];
	$password=$_POST['password'];


	$edit = mysqli_query($koneksi,"UPDATE admin set nama_admin='$nama_admin',email='$email',telp='$telp',alamat='$alamat',level='$level',username='$username',password='$password' where id_admin='$id_admin'");

	if ($edit) {
		echo "<script>alert('Sukses Update');location.href='tampil_data_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Update');location.href='modal_ubah_admin.php';</script>";
	}
 ?>