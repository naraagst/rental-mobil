<?php

	if(isset($_GET['r'])) $r = $_GET['r'];
	else $r="menu";
	
	
	
	if( $r == "transaksi_print" )	{	
		include("transaksi/transaksi_print.php");
	}
	else{
	if(isset($_GET['r'])) $s="menu2";
	else $s="menu";
	
	if( $s == "menu" )		include("menu.php");
	elseif( $s == "menu2" )	include("menu2.php");
	
	if( $r == "mobil" )						include("mobil/mobil.php");
	elseif( $r == "mobil_tambah" )			include("mobil/mobil_tambah.php");
	elseif( $r == "mobil_tambahproses" )	include("mobil/mobil_tambahproses.php");
	elseif( $r == "mobil_edit" )			include("mobil/mobil_edit.php");
	elseif( $r == "mobil_editproses" )		include("mobil/mobil_editproses.php");
	elseif( $r == "mobil_hapus" )			include("mobil/mobil_hapus.php");
	elseif( $r == "mobil_tambah_jenis" )	include("mobil/mobil_tambahjenis.php");
	elseif( $r == "mobil_jenisproses" )		include("mobil/mobil_jenisproses.php");
	elseif( $r == "data_jenismobil" )		include("mobil/data_jenismobil.php");
	elseif( $r == "data_jenismobilhapus" )	include("mobil/data_jenismobilhapus.php");
	elseif( $r == "data_jenismobiledit" )	include("mobil/data_jenismobiledit.php");
	elseif( $r == "data_jenismobileditproses" )	include("mobil/data_jenismobileditproses.php");
	
	elseif( $r == "spek" )					include("mobil/spek.php");
	elseif( $r == "spesifikasi" )			include("mobil/spesifikasi_mobil.php");
	elseif( $r == "spesifikasi_tambah" )	include("mobil/spesifikasi_tambah.php");
	elseif( $r == "spesifikasi_proses" )	include("mobil/spesifikasi_proses.php");
	
	elseif( $r == "cust" )					include("customer/cust.php");
	elseif( $r == "cust_hapus" )			include("customer/cust_hapus.php");
	elseif( $r == "cust_tambah" )			include("customer/cust_tambah.php");
	elseif( $r == "cust_tambahproses" )		include("customer/cust_tambahproses.php");
	
	elseif( $r == "transaksi" )				include("transaksi/transaksi.php");
	elseif( $r == "transaksi_tambah" )		include("transaksi/transaksi_tambah.php");
	elseif( $r == "transaksi_tambahproses")	include("transaksi/transaksi_tambahproses.php");
	elseif( $r == "transaksi_detail" )		include("transaksi/transaksi_detail.php");
	
	elseif( $r == "lunas" )					include("transaksi/lunas.php");
	elseif( $r == "pinjam" )				include("transaksi/pinjam.php");
	elseif( $r == "selesai" )				include("transaksi/selesai.php");
	
	elseif( $r == "pembayaran" )			include("pembayaran/pembayaran.php");
	elseif( $r == "pembayaran_detail" )		include("pembayaran/pembayaran_detail.php");
	elseif( $r == "verifikasi" )			include("pembayaran/verifikasi.php");
	
	elseif( $r == "krisan" )				include("krisan/krisan.php");
	
	elseif( $r == "cek_kode" )				include("cek_kode.php");
	}
	
?>