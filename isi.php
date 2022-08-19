<?php
		
	if( isset($_GET['n']) ) $n = $_GET['n'];
	else $n = "beranda";
	
	if ($n=="loading"){
		include("loading.php");
	}
	elseif( $n == "bukti" )	{	
		include("tesbukti.php");
	
	}
	else{
		if (!isset($_SESSION['user'])) {
			include('header.php'); 
		} 
		else {
			include('header2.php');
		}
		if( $n == "beranda" )				include("beranda.php");
		elseif( $n == "login" )				include("login.php");
		elseif( $n == "login_proses" )		include("login_proses.php");
		elseif( $n == "lihat_profil" )		include("lihat_profil.php");	

		elseif( $n == "register" )			include("register.php");
		elseif( $n == "regis_edit" )		include("regis_edit.php");
		elseif( $n == "regis_editproses" )	include("regis_editproses.php");
		elseif( $n == "regis_proses" )		include("regis_proses.php");
		
		elseif( $n == "riwayat" )			include("riwayat_pemesanan.php");
		elseif( $n == "riwayat_detail" )	include("riwayat_detail.php");
		elseif( $n == "batalkan_pesanan" )	include("batalkan_pesanan.php");
	
		
		elseif( $n == "fasilitas" )			include("fasilitas.php");
		
		elseif( $n == "konpemb")			include("konfirmasi_pembayaran.php");
		elseif( $n == "konpemb_proses")		include("konfirmasi_pembayaran_proses.php");
		
		elseif( $n == "krisan" )			include("krisan.php");
		elseif( $n == "krisan_proses" )		include("krisan_proses.php");
		
		elseif( $n == "list")				include("list_mobil.php");
		elseif( $n == "cari")				include("cari.php");
		elseif( $n == "spesifikasi")		include("spesifikasi.php");
		elseif( $n == "pesan")				include("pesan.php");
		elseif( $n == "pesan_proses")		include("pesan_proses.php");
	}
?>