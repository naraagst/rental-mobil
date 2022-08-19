<?php

	$nama_gambar 	= $_FILES['gbr_mobil']['name'];
	$lokasi_gambar 	= $_FILES['gbr_mobil']['tmp_name'];
	$tipe_gambar	= $_FILES['gbr_mobil']['type'];

	if($lokasi_gambar==""){
		mysqli_query($koneksi, "UPDATE mobil SET 
				merk		= '$_POST[merk]',
				plat		= '$_POST[plat]', 
				warna		= '$_POST[warna]',
				tahun		= '$_POST[tahun]'
			WHERE id_mobil='$_POST[id]'");
	}else{
		$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from mobil where id_mobil='$_POST[id]'"));
		if($data['gbr_mobil'] != "") unlink("../gambar/mobil/$data[gbr_mobil]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/mobil/$nama_gambar");
		mysqli_query($koneksi, "UPDATE mobil SET 
				merk		= '$_POST[merk]',
				plat		= '$_POST[plat]', 
				warna		= '$_POST[warna]',
				tahun		= '$_POST[tahun]',
				gbr_mobil	= '$nama_gambar'
			WHERE id_mobil='$_POST[id]'");
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?r=mobil'>";
?>