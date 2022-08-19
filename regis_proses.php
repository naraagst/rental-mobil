<?php

	if($_POST['password'] != $_POST['konfirmasi_password']){
			echo"<p style='color:red;text-align:center;'>Password dan ulang password tidak sama</p>";
			echo"<meta http-equiv='refresh' content='1; url=?r=register'>";}
			
	else{
	session_start();
	include("lib/koneksi.php");
		
	$nama_gambar2 	= $_FILES['no_sim']['name'];
	$lokasi_gambar2 = $_FILES['no_sim']['tmp_name'];
	$tipe_gambar2	= $_FILES['no_sim']['type'];

	move_uploaded_file($lokasi_gambar2,"gambar/sim/$nama_gambar2");
	
		mysqli_query($koneksi, "INSERT INTO `user` (`id_user`, `username`, `password`, `namalengkap`, `alamat`, `telp`, `ktp`, `foto_sim`) VALUES (NULL, '$_POST[username]', '$_POST[password]', '$_POST[nama_lengkap]', '$_POST[alamat]', '$_POST[no_hp]', '$_POST[ktp]', '$nama_gambar2')");
		
		$_SESSION['user'] = "";
		$_SESSION['nama'] = "";
		$user = "";
		$pass = "";
		if (isset($_POST['username']) && isset($_POST['password'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		}
		
		$query = "SELECT * FROM user WHERE username = '" . $user . "' AND password = '" . $pass . "'";

$result = mysqli_query($koneksi, $query);

$num = mysqli_num_rows($result);
if ($num > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['user'] 	= $row['username'];
	$_SESSION['ktp'] 	= $row['ktp'];
    $_SESSION['nama'] 	= $row['namalengkap'];
	$_SESSION['id'] 	= $row['id_user'];
}
    echo "<script>alert('Register Berhasil');</script>";
    echo "<script>window.location = '?n=beranda';</script>";
	}

?>