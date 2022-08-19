<?php

	

	$nama_gambar 	= $_FILES['no_sim']['name'];
	$lokasi_gambar 	= $_FILES['no_sim']['tmp_name'];
	$tipe_gambar	= $_FILES['no_sim']['type'];

	if($lokasi_gambar==""){
		mysqli_query($koneksi, "UPDATE user SET 
				namalengkap		= '$_POST[nama_lengkap]',
				username		= '$_POST[user_name]', 
				alamat			= '$_POST[alamat]',
				telp			= '$_POST[no_hp]',
				ktp				= '$_POST[no_ktp]'
				
			WHERE id_user='$_POST[id]'");
	}else{
		$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from user where id_user='$_POST[id]'"));
		if($data['foto_sim'] != "") unlink("gambar/sim/$data[foto_sim]");
		
		move_uploaded_file($lokasi_gambar,"gambar/sim/$nama_gambar");
		mysqli_query($koneksi, "UPDATE user SET 
				namalengkap		= '$_POST[nama_lengkap]',
				username		= '$_POST[user_name]', 
				alamat			= '$_POST[alamat]',
				telp			= '$_POST[no_hp]',
				ktp				= '$_POST[no_ktp]',
				foto_sim	= '$nama_gambar'
			WHERE id_user='$_POST[id]'");
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?n=lihat_profil'>";
?>