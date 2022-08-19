<?php
$kode=$_GET['id'];
$nama=$_SESSION['nama'];
		mysqli_query($koneksi, "UPDATE `pembayaran` SET `nama_admin` = '$nama', `status` = 'Sudah di Verifikasi' WHERE `pembayaran`.`kode_trans` = '$kode'");
		mysqli_query($koneksi, "UPDATE `transaksi` SET `stat_transaksi` = 'Lunas' WHERE `transaksi`.`kode_trans` = '$kode'");
?>		
		
<div id="loading"></div>
<?php
		echo"<meta http-equiv='refresh' content='1; url=?r=pembayaran_detail&id=$_GET[id]'>";
?>