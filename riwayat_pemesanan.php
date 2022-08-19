<?php 
include("lib/fungsi_tglindonesia.php");
?>
			<section class="background relative" id="home">
				<div class="overlay overlay-bg"></div>	
				
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							
							<table  style="margin-top:-200px; margin-left:-300px; width:1200px;position:fixed;" border ="1" cellpadding="25" >
							
							<thead class="text-white header-right">
								<tr>
									<center>
									<th>Merk Mobil </th>
									<th>No. Plat</th>
									<th>Tanggal Pemesanan</th>
									<th>Total Pembayaran</th>
									<th>Status</th>
									</center>
								</tr>
							</thead>
							<tbody class="text-white header-right">
									<?php
										$no=1;
										$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) WHERE transaksi.id_user=" . $_SESSION['id'] . " ORDER BY transaksi.id_trans DESC");
										while($data=mysqli_fetch_array($tampil)){
											$tgl_pesan = tgl_indonesia($data['tgl_transaksi']);
									?>
								<tr>
									<td> <?php echo $data['merk']; ?></td>
									<td> <?php echo $data['plat']; ?></td>
									<td> <?php echo $tgl_pesan; ?></td>
									<td> Rp <?php echo number_format($data['totalbayar'],2,",",".");?></td>
									<td> <?php echo $data['stat_transaksi']; ?></td>
									<td><a href="?n=riwayat_detail&id=<?php echo $data['id_trans']; ?>" class="tombol">Detail</a></td>
								</tr>
									<?php } ?>
							</tbody>
							</table>
							
						</div>
						
						
							
					</div>											
				</div>
								
			</section>