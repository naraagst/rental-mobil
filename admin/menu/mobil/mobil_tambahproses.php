<?php

	$nama_gambar 	= $_FILES['gbr_mobil']['name'];
	$lokasi_gambar 	= $_FILES['gbr_mobil']['tmp_name'];
	$tipe_gambar	= $_FILES['gbr_mobil']['type'];
	
	$merk=$_POST['merk'];
	
	$tampil = mysqli_query($koneksi, "SELECT * FROM jenis_mobil WHERE jenis_mobil='$merk'");
	$data=mysqli_fetch_array($tampil);
	
	$idjenis = $data['id_jenismobil'];
	
	if($lokasi_gambar==""){
		mysqli_query($koneksi, "INSERT INTO `mobil` 
		(`id_mobil`, `id_jenismobil`, `merk`, `plat`, `warna`, `tahun`, `harga`, `status`, `gbr_mobil`) 
		VALUES (NULL, '$idjenis', '$_POST[merk]', '$_POST[plat]', '$_POST[warna]', '$_POST[tahun]', '$_POST[harga]', 'tersedia', '')");
		
	}else{
		move_uploaded_file($lokasi_gambar,"../gambar/mobil/$nama_gambar");
		mysqli_query($koneksi, "INSERT INTO `mobil` 
		(`id_mobil`, `id_jenismobil`, `merk`, `plat`, `warna`, `tahun`, `harga`, `status`, `gbr_mobil`) 
		VALUES (NULL, '$idjenis', '$_POST[merk]', '$_POST[plat]', '$_POST[warna]', '$_POST[tahun]', '$_POST[harga]', 'tersedia', '$nama_gambar')");
	}
	echo"<meta http-equiv='refresh' content='1; url=?r=mobil'>";
	
?>