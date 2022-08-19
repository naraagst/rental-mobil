<?php

	include("lib/koneksi.php");
	
	$username = $_POST['username'];
	$password = ($_POST['password']);
	
	$cek 	= mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['user'] = $data['username'];
		$_SESSION['nama'] = $data['namalengkap'];
		$_SESSION['ktp'] = $data['ktp'];
		$_SESSION['id'] = $data['id_user'];
		
		echo"<meta http-equiv='refresh' content='0; url=?n=beranda'>";
	}else{
		echo "<script>alert('Gagal, username atau password salah!');</script>";
		echo "<script>window.location = '?n=login';</script>";
	}
?>