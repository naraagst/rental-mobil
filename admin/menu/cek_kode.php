<?php
	$kode = $_POST['kode_trans'];
	
	$cek 	= mysqli_query($koneksi, "select * from transaksi where kode_trans='$kode'");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$id=$data['id_trans'];
		echo"<meta http-equiv='refresh' content='0; url=?r=transaksi_detail&id=$id'>";
	}else{
		echo "<script>alert('Kode Transaksi Tidak Ditemukan');</script>";
		echo "<script>window.location = 'home.php';</script>";
	}
?>