<?php
	session_start();
	
	include("../lib/koneksi.php");
	
	$username = $_POST['username'];
	$password = ($_POST['password']);
	
	$cek 	= mysqli_query($koneksi, "select * from admin where uname='$username' and pass='$password'");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['uname'];
		$_SESSION['password'] = $data['pass'];
		$_SESSION['nama'] = $data['nama'];
		
		echo"<meta http-equiv='refresh' content='0; url=home.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";
	}
?>