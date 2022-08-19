<?php
$kode = $_GET['id'];

$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) WHERE transaksi.id_trans='$kode'");
$data  	= mysqli_fetch_array($tampil);

mysqli_query($koneksi, "delete from transaksi WHERE transaksi.id_trans='$kode'");
mysqli_query($koneksi, "UPDATE mobil SET 
				status		= 'tersedia'
				WHERE id_mobil='$data[id_mobil]'");

	echo"<meta http-equiv='refresh' content='0; url=?n=riwayat'>";
	
	
	
?>