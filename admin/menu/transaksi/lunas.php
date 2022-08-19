<?php
$kode=$_GET['id'];

		mysqli_query($koneksi, "UPDATE `transaksi` SET `stat_transaksi` = 'Lunas' WHERE `transaksi`.`id_trans` = '$kode'");
?>		
		
<?php
		echo"<meta http-equiv='refresh' content='1; url=?r=transaksi_detail&id=$_GET[id]'>";
?>