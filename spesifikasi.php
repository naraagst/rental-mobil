<?php 
	$data = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil='$_GET[id]'");
	$mobil  	= mysqli_fetch_array($data);
?>
			<section class="background relative" id="home">
				<div class="overlay overlay-bg"></div>	
				
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
						
						
						<table style="float:left;margin-top:200px; margin-left:-300px; width:1200px;" class="text-white" cellpadding="10">
							<tr>
								<td><img src="gambar/mobil/<?php echo $mobil['gbr_mobil'];?>" alt="Gambar Hilang" style="width:400px;"/> </td>
								
								<td style="width:900px">
								<center>
								<h1 class="text-white"> <?php echo $mobil['merk'];?> </h1></br>
								<h5 class="text-white"><?php echo $mobil['tahun'];?></h5></br>
								<h5 class="text-white">Rp <?php echo number_format($mobil['harga'],2,",",".");?>/hari</h5></br>
								<?php if($mobil['status']=='tidak tersedia') { ?>
									<h3 style="color:red;">Mohon Maaf Mobil Tidak Tersedia Untuk Saat Ini</h3>
								<?php } ?>
								</center>
								</td>
								
								<td>
								<?php if($mobil['status']=='tersedia') { ?>
									<a href="?n=pesan&id=<?php echo $mobil['id_mobil']; ?>" class="tombol" style="border-radius:10px;">
										<i class="fa fa-cart-plus" style="font-size:60px"></i> Booking
									</a>
								<?php } ?>
								</td>
							</tr>
							
							
							
						</table>
							
						<table  style="margin-top:50px; margin-left:-300px; width:1200px;" border ="1"  cellpadding="10" class="text-white  header-right">
							

								<tr style="text-align:center">
					<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM jenis_spesifikasi ORDER BY id_jenis");
						while($data=mysqli_fetch_array($tampil)){
					?>
									<th  colspan="2"><?php echo $data['jenis_spesifikasi']; ?></th>
					<?php } ?>
								</tr>

								<tr>
					<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM spesifikasi JOIN jenis_mobil ON (spesifikasi.id_jenismobil=jenis_mobil.id_jenismobil) JOIN mobil ON (mobil.id_jenismobil=jenis_mobil.id_jenismobil) WHERE mobil.id_mobil='$_GET[id]'");
						$data  	= mysqli_fetch_array($tampil);
					?>
									<td>Kapasitas mesin </td>
									<td><?php echo $data['kapasitas_mesin']; ?></td>
									
									<td>Kapasitas Tempat Duduk</td>
									<td><?php echo $data['kapasitas_tempat_duduk']; ?></td>
									
									<td>Suspensi Depan </td>
									<td><?php echo $data['suspensi_depan']; ?></td>
									
									<td>Girboks</td>
									<td><?php echo $data['girboks']; ?></td>
									
									<td>Jenis Kemudi</td>
									<td><?php echo $data['jenis_mobil']; ?></td>
								</tr>
								<tr>
									<td>Tenaga </td>
									<td><?php echo $data['tenaga']; ?></td>
									
									<td>Kapasitas Tangki Bahan Bakar (liter)</td> 
									<td><?php echo $data['kapasitas_tangki_bahan_bakar']; ?></td>
									
									<td>Suspensi Belakang </td> 
									<td><?php echo $data['suspensi_belakang']; ?></td>
									
									<td>Jenis Transmisi</td> 
									<td><?php echo $data['jenis_transmisi']; ?></td>
									
									<td>Jenis Ban</td> 
									<td><?php echo $data['jenis_ban']; ?></td>
								</tr>

								<tr>
									<td>Jenis Bahan Bakar </td> 
									<td><?php echo $data['jenis_bahan_bakar']; ?></td>
									
									<td>Panjang</td>
									<td><?php echo $data['panjang']; ?></td>
									
									<td>Jenis Shockbreaker </td> 
									<td><?php echo $data['jenis_shockbreaker']; ?></td>
									
									<td> - </td> 
									<td> - </td>
									
									<td>Jumlah Silinder</td> 
									<td><?php echo $data['jumlah_silinder']; ?></td>
								</tr>
								<tr>
									<td>Torsi </td> 
									<td><?php echo $data['torsi']; ?></td>
									
									<td>Lebar</td> 
									<td><?php echo $data['lebar']; ?></td>
									
									<td> - </td> 
									<td> - </td>
									
									<td> - </td> 
									<td> - </td>
									
									<td>Katup per Silinder</td> 
									<td><?php echo $data['katup_per_silinder']; ?></td>
								</tr>
								<tr>
									<td> - </td> 
									<td> - </td>
									
									<td>Tinggi </td> 
									<td><?php echo $data['tinggi']; ?></td>
									
									<td>- </td> 
									<td>- </td>
									
									<td>- </td> 
									<td>- </td>
									
									<td>Sistem Suplai Bahan Bakar</td> 
									<td><?php echo $data['sistem_suplai_bahan_bakar']; ?></td>
								</tr>
								
								<tr>
									<td> - </td> <td> - </td>
									
									<td> Jumlah Pintu </td> 
									<td> <?php echo $data['jumlah_pintu']; ?> </td>
									
									<td>- </td> 
									<td>- </td>
									
									<td>- </td> 
									<td>- </td>
									
									<td>Ukuran Ban</td> 
									<td><?php echo $data['ukuran_ban']; ?></td>
								</tr>
								
							</table>
							
						</div>
						
						
							
					</div>											
				</div>
								
			</section>




