<?php 
	include '../konek.php';
	
	$id_kategori=$_POST['id_kategori'];
	$nama_kategori=$_POST['nama_kategori'];

	$edit = mysqli_query($koneksi,"UPDATE kategori_buku set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'");

	if ($edit) {
		echo "<script>alert('Sukses Update');location.href='tampil_data_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Update');location.href='modal_ubah_admin.php';</script>";
	}
 ?>