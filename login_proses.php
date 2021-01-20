<?php
	include "konek.php";
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];

	$cek_user = mysqli_query($koneksi,"SELECT * FROM `admin` WHERE `username`='$username'".
		"and level='$level'");
	
	$user_valid= mysqli_fetch_array($cek_user);

	if ($user_valid) {
		if ($password == $user_valid['password']) {
			$_SESSION['username']=$user_valid['username'];
			$_SESSION['password']=$user_valid['password'];
			$_SESSION['level']=$user_valid['level'];
		}

		if ($level == "kasir") {
			echo "<script language='javascript'>";
		    echo "alert('Berhasil login sebagai Kasir!');";
		    echo "</script>";
			echo "<script>location.href='index.php'</script>";	
		} else if ($level == "administrator") {
			echo "<script language='javascript'>";
		    echo "alert('Berhasil login sebagai Administrator!');";
		    echo "</script>";
			echo "<script>location.href='index_admin.php'</script>";
		} else {
			$pesan = "Password tidak sesuai!";
		    include "login.php";
		} 
	} else {
		$pesan = "Username tidak terdaftar!";
		include "login.php";
	}
?>