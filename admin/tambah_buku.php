<?php 
	include '../konek.php';
	
	$judul_buku = $_POST['judul_buku'];
	$penulis = $_POST['penulis'];
	$id_kategori = $_POST['id_kategori'];
	$stok = $_POST['stok'];
	$foto = $_FILES['foto']['name'];

	$target = 'images/'.$foto;

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
	  $tambah=mysqli_query($koneksi,"INSERT INTO buku (judul_buku,penulis,id_kategori,stok,foto) VALUES ('$_POST[judul_buku]','$_POST[penulis]','$_POST[id_kategori]','$_POST[stok]','$foto')");

	if($tambah){ 
	    echo "<script>alert('Berhasil Tambah Data Buku');location.href='tampil_data_buku_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Tambah Data Buku');location.href='tampil_data_buku_admin.php';</script>";
		}
	} else {
		echo "<script>alert('Gambar gagal di upload');location.href='tampil_data_buku_admin.php';</script>";
	}

?>