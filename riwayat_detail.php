<?php
	include("lib/fungsi_tglindonesia.php");
	
	$kode = $_GET['id'];
	
	$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) WHERE transaksi.id_trans='$kode'");
	$data  	= mysqli_fetch_array($tampil);
	
	
	$tgl_pesan = tgl_indonesia($data['tgl_transaksi']);
	$tgl_pinjam = tgl_indonesia($data['tgl_pinjam']);
	$tgl_kembali = tgl_indonesia($data['tgl_kembali']);
	
	$ket=" ";
	
	if($data['stat_transaksi'] == "Lunas") {
		$ket = ", Mobil Siap Diambil";
	}
	
	if($data['supir']=="tnpsupir"){
		$supir=0;
	}
	else{
		$supir=100000;
	}
	$harga=$data['lama']*($data['harga']+$supir);
	$a=$data['totalbayar']-$harga;
?>

<section class="background relative" id="home" style="height:1150px;">
				<div class="overlay overlay-bg" style="height:1150px;"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center ">
						<div class="banner-content col-lg-7 col-md-6 ">

							<?php if ($data['stat_transaksi'] == "Pending" && $data['pembayaran'] == "ATM")
							{
							?>
							<div class="header-right" style="padding:30px;margin-top:500px;">
								<table style="background:red;" class="text-white">
									<tr>
										<td style="padding:10px;"><b>
										<center>TOTAL PEMBAYARAN ANDA ADALAH  </br></br></b>
										<h3><b>Rp.<?php echo number_format($data['totalbayar'],2,",",".");?></b></h3> </br>
										SILAHKAN TRANSFER KE REKENING BNI DENGAN NO. REK 987654321 ATAS NAMA<i> RENTAL MOBIL BDJ</i></b> </br>
										</center></br>
										<em><b>catatan: </b> "Nominal uang yang harus diTransfer harus sama persis, karena 3 digit terakhir merupakan Kode Transaksi Anda. Jika anda telah melakukan pembayaran, silakan klik tombol KONFIRMASI PEMBAYARAN dibawah ini, pembayaran anda akan di cek secara otomatis"</em>
										</td>
									</tr>
								</table>
							<?php } elseif ($data['stat_transaksi'] == "Lunas" && $data['pembayaran'] == "ATM") { ?>
							<div class="header-right" style="padding:30px;margin-top:450px;">
								<table style="background:green;" class="text-white">
									<tr>
										<td style="padding:10px;"><b>
										<center>TERIMAKASIH TELAH MELAKUKAN PEMBAYARAN </br>MOBIL SIAP DIAMBIL</br></br></b>
										Berikut ini adalah kode transaksi anda :
										<h3>
										<?php echo $data['kode_trans'];?>
										</h3>
										</center></br>
										<em><b>catatan: </b> "Harap tunjukkan kode transaksi anda kepada petugas pada saat pengambilan mobil"</em>
										</td>
									</tr>
								</table>
							<?php } elseif ($data['stat_transaksi'] == "Pending" && $data['pembayaran'] == "Cash") { ?>
							<div class="header-right" style="padding:30px;margin-top:450px;">
								<table style="background:red;" class="text-white">
									<tr>
										<td style="padding:10px;"><b>
										<center>TOTAL PEMBAYARAN ANDA ADALAH  </br></br></b>
										<h3><b>Rp.<?php echo number_format($data['totalbayar'],2,",",".");?></b></h3> </br>
										SILAHKAN TUNJUKKAN KODE TRANSAKSI ANDA PADA PETUGAS DAN LAKUKAN PEMBAYARAN SAAT AKAN MENGAMBIL MOBIL</b> </br>
										</center></br>
										</td>
									</tr>
								</table>
							<?php } else { ?>
							<div class="header-right" style="padding:30px;margin-top:300px;">
							<?php } ?>
								<table class="text-white" >
									<?php if($data['stat_transaksi'] != "Pending" || $data['pembayaran'] == "Cash"){ ?>
									<tr> 
										<td style="padding:10px;">Kode Transaksi</td>	
										<td style="font-size:20px;">: <b><?php echo $data['kode_trans']; ?></b></td> 
									</tr>
									<?php } ?>
									<tr> 
										<td style="padding:10px;">Mobil</td>	
										<td>: <?php echo $data['merk']; ?></td> 
									</tr>
									<tr> 
										<td style="padding:10px;">No Plat Mobil</td>	
										<td>: <?php echo $data['plat']; ?></td> 
									</tr>
									<tr> 
										<td style="padding:10px;">Tanggal Pemesanan</td>	
										<td>: <?php echo $tgl_pesan; ?></td> 
									</tr>
									<tr> 
										<td style="padding:10px;">Tanggal Pinjam</td>	
										<td>: <?php echo $tgl_pinjam; ?></td> 
									</tr>
									<tr> 
										<td style="padding:15px;">Tanggal Kembali</td>	
										<td>: <?php echo $tgl_kembali; ?></td> 
									</tr>
									<tr> 
										<td style="padding-left:15px;">Lama Peminjaman</td>	
										<td>:  <?php echo $data['lama']; ?> hari</td> 
									</tr>
									<tr> 
										<td style="padding:15px;">Harga Sewa per Hari</td>	
										<td>: Rp <?php echo number_format($data['harga'],2,",",".");?></td> 
									</tr>
									<?php if($data['supir']=="supir"){ ?>
									<tr> 
										<td style="padding:15px;">Total Harga</td>	
										<td>:  Lama Peminjaman x (Harga Sewa Perhari + Biaya Supir) + Kode Pembayaran </td> 
									</tr>
									
									<tr> 
										<td></td>
										<td>:  <?php echo $data['lama']; ?> x (Rp <?php echo number_format($data['harga'],2,",",".");?> + Rp. 100.000,-) + <?php echo $a ?></td> 
									</tr>
									<?php } else { ?>
									<tr> 
										<td style="padding:15px;">Total Harga</td>	
										<td>:  Lama Peminjaman x Harga Sewa Perhari + Kode Pembayaran</td> 
									</tr>
									
									<tr> 
										<td></td>
										<td>:  <?php echo $data['lama']; ?> x Rp <?php echo number_format($data['harga'],2,",",".");?> + <?php echo $a ?></td> 
									</tr>
									<?php } ?>
									<tr> 
										<td></td>
										<td>: Rp. <?php echo number_format($data['totalbayar'],2,",",".");?></td> 
									</tr>
									
									
									<tr> 
										<td style="padding:15px;">Metode Pembayaran</td>	
										<td>: <?php echo $data['pembayaran']; ?></td> 
									</tr>
									<tr> 
										<td style="padding-left:15px;">Status Transaksi</td>	
										<td>: <?php echo $data['stat_transaksi']; ?><?php echo $ket; ?></td> 
									</tr>
									<?php if($data['stat_transaksi'] == "Selesai"){ 
									$tgl_dikembalikan = tgl_indonesia($data['tgl_dikembalikan']);
									?>
									<tr>
										<td style="padding:15px;"> Denda </td>
										<td> : Rp<?php echo number_format($data['denda'],2,",",".");?></td>
									</tr>
									<tr>
										<td style="padding-left:15px;"> Tanggal Dikembalikan </td>
										<td> : <?php echo $tgl_dikembalikan; ?></td>
									</tr>
									<?php } ?>
								</table>
									<div style="margin-top:30px;">
									<?php if($data['stat_transaksi'] == "Pending" && $data['pembayaran'] == "ATM") { ?>
									<a href="?n=loading&id=<?php echo $data['id_trans']; ?>" class="tombol" style="margin-left:150px;">Konfirmasi Pembayaran</a>
									<a href="#" data-toggle="modal" data-target="#BatalModal" class="tombol" style="margin-left:175px;margin-top:10px;">Batalkan Pesanan</a>
									<?php } else{ ?>
									<a href="?n=bukti&id=<?php echo $data['id_trans']; ?>" class="tombol" style="margin-left:150px;">Cetak Bukti Transaksi</a>
								<?php } ?>

							</div>
						</div>
					</div>											
				</div>
						

		<div class="modal fade" id="BatalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Membatalkan Pesanan ?</h5>
			  </div>
			  <div class="modal-body">Pesanan yang telah dibatalkan tidak dapat dikembalikan.</div>
			  <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="?n=batalkan_pesanan&id=<?php echo $data['id_trans'];?>">Batalkan Pesanan</a>
			  </div>
			</div>
		  </div>
		</div>
		
			</section>