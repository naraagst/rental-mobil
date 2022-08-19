<?php 
$kode = $_GET['id']; 
$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE kode_trans='$kode'");
$data=mysqli_fetch_array($tampil);
?>
			<section class="background relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h1 class="text-white text-uppercase">
								Rental Mobil BDJ			
							</h1>
							<h6 class="pt-20 pb-20 text-white">
							kami berusaha memberikan layanan terbaik bagi anda yang membutuhkan kendaraan untuk keperluan pribadi, acara pernikahan, perusahaan dll.
							</h6>
							
						</div>
						<div class="col-lg-5  col-md-6 header-right register">
							
							<form name="konfirmasi_pembayaran" method="post" action="?n=konpemb_proses" enctype="multipart/form-data">
								<input name="kode_trans" type="hidden" value="<?php echo $kode;?>"/>
								<input name="jumlah_trf" type="hidden" value="<?php echo $data['totalbayar']; ?>"/>
								<table align="center">
									<tr>
									  <td><span class="label-input100" style="margin-left:20px;">Kode Transaksi </span>
										  <input name="kode" type="text" placeholder="<?php echo $kode;?>" disabled/>
									 </td>
									</tr>
									
									  <td>
											<span class="label-input100" style="margin-left:20px;">Jumlah Transfer </span>
										  <input name="jumlah" type="text" placeholder="Rp<?php echo number_format($data['totalbayar'],2,",",".");?>"/>
									 </td>
									</tr>
									<tr>
									<td>
										<div class="wrap-input100">
										<span class="label-input100" >Tanggal Transfer</span>
										</div>
										</td>
									  </tr>
									 <tr> 
									 <td>
									 <div class="wrap-input100">
										  <input name="tanggal" type="date" max="<?php echo date('Y-m-d'); ?>" style="padding:10px;width:337px;">
									 </div>
									</td>
									</tr>
									
									<tr>
									<td>
										<div class="wrap-input100">
										<span class="label-input100">Upload Bukti Transfer</span>
										</div>
										</td>
									  </tr>
									 <tr> 
									 <td>
									 <div class="wrap-input100">
										  <input type="file" name="struk">
									 </div>
									</td>
									</tr>
									
									<tr>								
										<td>
											<input name="submit" type="submit" value="Submit" class="tombol" style="margin-left:120px;"/>
										</td>
									</tr>
								</table>
								</form>
							</div>
							
						</div>											
					</div>
				</div>					
			</section>