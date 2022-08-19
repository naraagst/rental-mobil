<?php
		$kode=$_GET['id'];
				
		$tgl_dikembalikan = date('Y-m-d');
		
		$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) WHERE transaksi.id_trans='$kode'");
		$data  	= mysqli_fetch_array($tampil);
			
		$harga_mobil = $data['harga'];

		$mulai = $data['tgl_kembali'];
		$akhir = $tgl_dikembalikan;

		$batas = strtotime($mulai);
		$kembali = strtotime($akhir);

		if(strtotime($mulai) < strtotime($akhir)){
			
		$interval = $kembali - $batas;
		$lama= floor($interval / (60 * 60 * 24));

		$denda=$lama*($harga_mobil+500000);
		} else {
			$denda=0;
		}
		mysqli_query($koneksi, "UPDATE `transaksi` SET 
				`denda` = '$denda',
				`tgl_dikembalikan` = '$tgl_dikembalikan',
				`stat_transaksi` = 'Selesai' 
				WHERE `transaksi`.`id_trans` = '$kode'");
		
		mysqli_query($koneksi, "UPDATE mobil SET 
				status		= 'tersedia'
				WHERE id_mobil='$data[id_mobil]'");
?>		
		
<?php
		echo"<meta http-equiv='refresh' content='0; url=?r=transaksi_detail&id=$kode'>";
?>