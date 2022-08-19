<?php
include("lib/fungsi_tglindonesia.php");
$kode=$_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) JOIN user ON (transaksi.id_user=user.id_user) WHERE transaksi.id_trans='$kode'");
	$data  	= mysqli_fetch_array($tampil);
	$tgl_pesan = tgl_indonesia($data['tgl_transaksi']);
	$tgl_pinjam = tgl_indonesia($data['tgl_pinjam']);
	$tgl_kembali = tgl_indonesia($data['tgl_kembali']);
	
?>

	
<center>
			<h1> RENTAL MOBIL BDJ </h1>
			<h6 style="margin-top:-15px;"> JL. HKSN, KOMP. DESA MAYA 1, KEL. KUIN UTARA KEC. BANJARMASIN UTARA, KODE POS: 70243 </h6>
			
			<div style="border-top: 12px double black; margin-top:-5px;"> 
			</div>
			
		<center>

		<center> <h1> Bukti Transaksi </h1> </center>
		
			<table style="float:center;margin-top:10px; margin-left:center; width:500px; font-size:20px;">
					<tr>
						<td><b>Kode Transaksi</b> </td>
						<td><b>: <?php echo $data['kode_trans']; ?></b> </td>
					</tr>
					
					<tr> 
						<td><b>Nama</b></td>
						<td><b>: <?php echo $data['namalengkap']; ?></b></td>

					</tr>
					
					<tr> 
						<td><b>No. KTP</b></td>
						<td><b>: <?php echo $data['ktp']; ?></b></td>
												
					</tr>
				</table>
					
				
		
				<table border="1px" style="float:center;margin-top:35px; margin-left:center; width:500px; font-size:20px;">
					
				
					<tr> 
						<td>Mobil</td>
						<td>: <?php echo $data['merk']; ?> </td>
					</tr>
					
					<tr> 
						<td>Plat Mobil</td>	
						<td>: <?php echo $data['plat']; ?></td>
					</tr>
					
					<tr> 
						<td>Tanggal Pinjam</td>	
						<td>: <?php echo $tgl_pinjam; ?></td>
					</tr>
					
					<tr> 
						<td>Tanggal Kembali</td>
						<td>: <?php echo $tgl_kembali; ?></td>
					</tr>
					
					<tr> 
						<td>Lama Peminjaman</td>
						<td>: <?php echo $data['lama']; ?> hari</td>
					</tr>
					
					<tr> 
						<td>Harga Sewa Per-Hari</td>
						<td>: Rp. <?php echo number_format($data['harga'],2,",",".");?></td>
					</tr>
								
								
					<tr> 
						<td>Total Harga</td>
						<td>: Rp. <?php echo number_format($data['totalbayar'],2,",",".");?></td>
					</tr>
					
					<?php if($data['stat_transaksi'] == "Selesai"){ 
					$tgl_dikembalikan = tgl_indonesia($data['tgl_dikembalikan']);
					?>
					
					<tr>
						<td> Denda </td>
						<td> : Rp. <?php echo number_format($data['denda'],2,",",".");?></td>
					</tr>
					<tr>
						<td> Tanggal Dikembalikan </td>
						<td> : <?php echo $tgl_dikembalikan; ?></td>
					</tr>
					<?php } ?>
					
				</table>

				<script> 
					window.print();
				</script>