<?php 
	include '../konek.php';
	
	$id_anggota=$_POST['id_anggota'];
	$nama_anggota=$_POST['nama_anggota'];
	$alamat_anggota=$_POST['alamat_anggota'];
	$telp=$_POST['telp'];


	$edit = mysqli_query($koneksi,"UPDATE anggota set nama_anggota='$nama_anggota',alamat_anggota='$alamat_anggota',telp='$telp' where id_anggota='$id_anggota'");

	if ($edit) {
		echo "<script>alert('Sukses Update');location.href='tampil_data_anggota_admin.php';</script>";
	} else {
		echo "<script>alert('Gagal Update');location.href='modal_ubah_anggota.php';</script>";
	}
 ?>