<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

	<script>
		$(document).ready(function)(){
		$(".preloader").faceOut();
		})
	</script>
</head>
<body>
		
	<div class="loader2">Loading..</div>
 
	<center>
		<h2 style="color:white"> Harap Tunggu </h2>
		<h2 style="color:white"> Permintaan Anda Sedang Diproses</h2>
	</center>
	
</body>
</html>

<?php 
	$kode = $_GET['id'];
	$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_trans='$kode'");
	$data  	= mysqli_fetch_array($tampil);
	
	$string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$kode_trans="";
		$limit=10;
		$i=0;
		while($i<=$limit)
		{
			$rand=rand(0,61);
			$kode_trans.=$string[$rand];
			$i++;
		}
		
	mysqli_query($koneksi, "UPDATE `transaksi` SET 
	`stat_transaksi` = 'Lunas',
	`kode_trans` = '$kode_trans'
	WHERE `transaksi`.`id_trans` = '$kode'");
	
	echo"<meta http-equiv='refresh' content='3; url=?n=riwayat_detail&id=$kode'>";
?>