<?php 
	$id_user = $_SESSION['id'];
	$status = 'Belum di Verifikasi';
	$tanggal = $_POST['tanggal'];
	
	$nama_gambar 	= $_FILES['struk']['name'];
	$lokasi_gambar 	= $_FILES['struk']['tmp_name'];
	$tipe_gambar	= $_FILES['struk']['type'];
	
	if($lokasi_gambar==""){
		mysqli_query($koneksi,"INSERT INTO `pembayaran` (`id_byr`, `id_user`, `kode_trans`, `gbr_struk`, `jlh_byr`, `tanggal`, `status`, `nama_admin`) 
		VALUES (NULL, '$id_user', '$_POST[kode_trans]', '$_POST[struk]', '$_POST[jumlah_trf]', '$tanggal', '$status', ' ');");
		
	}else{
		move_uploaded_file($lokasi_gambar,"gambar/struk/$nama_gambar");
		mysqli_query($koneksi,"INSERT INTO `pembayaran` (`id_byr`, `id_user`, `kode_trans`, `gbr_struk`, `jlh_byr`, `tanggal`, `status`, `nama_admin`) 
		VALUES (NULL, '$id_user', '$_POST[kode_trans]', '$nama_gambar', '$_POST[jumlah_trf]', '$tanggal', '$status', ' ');");  
		
		echo "<script>document.location='?n=riwayat'</script>"; 
	}
?>