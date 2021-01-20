<?php 
	include '../konek.php';
	
	$id_buku=$_POST['id_buku'];
	$judul_buku=$_POST['judul_buku'];
	$penulis=$_POST['penulis'];
	$id_kategori=$_POST['id_kategori'];
	$stok=$_POST['stok'];

	$edit = mysqli_query($koneksi,"UPDATE buku set judul_buku='$judul_buku',penulis='$penulis',id_kategori='$id_kategori',stok='$stok' where id_buku='$id_buku'");

	if ($edit) {
		echo "<script>alert('Sukses Update');location.href='tampil_data_buku_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Update');location.href='modal_ubah_buku.php';</script>";
	}
 ?>