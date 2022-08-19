<?php

	    if($_POST){
    	$mulai = $_POST['tgl_pinjam'];
    	$akhir = $_POST['tgl_kembali'];
		$tgl_trans = date('Y-m-d');
		$pinjam = strtotime($mulai);
    	$kembali = strtotime($akhir);
		$id = $_POST['id'];
		
		$interval = $kembali - $pinjam;
		$lama= floor($interval / (60 * 60 * 24) + 1);
		
		$harga_mobil = $_POST['hrg'];
		
		$a = rand(111,999);
		  
		
		if($_POST['spr'] == "tnpsupir"){
			$harga = ($harga_mobil * $lama)+$a;
		}
		elseif($_POST['spr'] == "supir"){
			$harga = (($harga_mobil + 100000) * $lama)+$a;
		}
		
		}
		
		if($_POST['pembayaran']=="Cash"){
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
		}else{
			$kode_trans='';
		}
		
    	if(strtotime($mulai) < strtotime($akhir)){

			mysqli_query($koneksi,"INSERT INTO `transaksi` (`id_trans`, `kode_trans`, `id_user`, `id_mobil`, `tgl_pinjam`, `tgl_kembali`, `lama`, `harga`, `denda`, `totalbayar`, `tgl_transaksi`, `pembayaran`, `supir`, `stat_transaksi`, `tgl_dikembalikan`) 
			VALUES (NULL, '$kode_trans', '$_SESSION[id]', '$_POST[id]', '$mulai', '$akhir', '$lama', '$harga_mobil', '', '$harga', '$tgl_trans', '$_POST[pembayaran]', '$_POST[spr]','Pending', '')");  

			$id_trans=mysqli_insert_id($koneksi);
			$_SESSION['id_trans']=$id_trans;
			
			mysqli_query($koneksi,"UPDATE `mobil` SET `status` = 'tidak tersedia' WHERE `mobil`.`id_mobil` = $id");
			echo "<script>document.location='?n=riwayat_detail&id=$id_trans'</script>"; 

    	}else{
    		echo "<script>alert('Tanggal Kembali Harus Lebih Besar Dari Tanggal Pinjam !!');</script>";
			echo "<script>window.location = '?n=pesan&id=$id';</script>";
    	}
		
	?>