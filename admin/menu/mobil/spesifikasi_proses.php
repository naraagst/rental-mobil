<?php

		
		
		mysqli_query($koneksi, "INSERT INTO `proyekperangkatlunak`.`spesifikasi` (`id_spesifikasi`, `id_jenismobil`, `kapasitas_mesin`, `tenaga`, 
		`torsi`, `jenis_bahan_bakar`, `konsumsi_bbm_tol`, `konsumsi_bbm_dalam_kota`, `kapasitas_tempat_duduk`, `kapasitas_tangki_bahan_bakar`, 
		`panjang`, `lebar`, `tinggi`, `jumlah_pintu`, `suspensi_depan`, `suspensi_belakang`, `jenis_shockbreaker`, `girboks`, `jenis_transmisi`, 
		`jenis_penggerak`, `jenis_kemudi`, `jenis_ban`, `jumlah_silinder`, `katup_per_silinder`, `sistem_suplai_bahan_bakar`, `ukuran_ban`, `jenis`)
		
		VALUES (NULL, '$_POST[nama]', '$_POST[kapasitas_mesin]', '$_POST[tenaga]', '$_POST[torsi]', '$_POST[jenis_bahan_bakar]', '$_POST[konsumsi_bbm]', 
		'$_POST[kmpl]', '$_POST[kapasitas_tempat_duduk]', '$_POST[tangki_bahan_bakar]', '$_POST[panjang]', 
		'$_POST[lebar]', '$_POST[tinggi]', '$_POST[jumlah_pintu]', '$_POST[suspensi_depan]', '$_POST[suspensi_belakang]', '$_POST[jenis_shockbreaker]', 
		'$_POST[girboks]', '$_POST[jenis_transmisi]', '$_POST[jenis_penggerak]', '$_POST[jenis_kemudi]', '$_POST[jenis_ban]', '$_POST[jumlah_silinder]', 
		'$_POST[katup_per_silinder]', '$_POST[suplai_bahan_bakar]', '$_POST[ukuran_ban]', '$_POST[jenis]')");
		

	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?r=mobil'>";
	
?>