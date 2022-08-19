<?php
if (!isset($_SESSION['user'])) { 
    echo "<script>alert('Silahkan Login atau Register Terlebih dahulu');</script>";
    echo "<script>window.location = 'index.php';</script>";
	}
else{
	$tampil = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil='$_GET[id]'");
	$data  	= mysqli_fetch_array($tampil);
	
	?>
			<section class="background relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6">
							<center>
							<img src="gambar/mobil/<?php echo $data['gbr_mobil'];?>" alt="Gambar Hilang" style="width:500px;"/>
							<h3 class="text-white"> <?php echo $data['merk'];?> </h3>
							<h4 class="text-white">Rp <?php echo number_format($data['harga'],2,",",".");?>/hari</h4>
							</center>
						</div>
						<div class="col-lg-5  col-md-6 header-right register">
						
							<form name="form pemesanan" method="post" action="?n=pesan_proses" enctype="multipart/form-data">
								<input name="id" type="hidden" value="<?php echo $data['id_mobil']; ?>"/>
								<input name="hrg" type="hidden" value="<?php echo $data['harga']; ?>"/>
								<table align="center">
									
									<tr>
										<td>
										<div class="wrap-input100">
											<span class="label-input100">Nama Lengkap</span>
										</div>
										</td>
									</tr>
									<tr>
										<td>
										  <input name="nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?php echo $_SESSION['nama'];?>" style="margin-top:-10px;" disabled/>
										</td>
									</tr>
									<tr>
										<td>
										<div class="wrap-input100">
											<span class="label-input100">No. KTP</span>
										</div>
										</td>
									</tr>
									<tr>
										<td>
										  <input name="no_ktp" type="text" placeholder="No. KTP" value="<?php echo $_SESSION['ktp'];?>" style="margin-top:-10px;" disabled/>
										</td>
									</tr>
									<tr>
										<td>
											<div class="wrap-input100">
												<span class="label-input100">Tanggal Peminjaman</span>
											</div>
										</td>
									</tr>
									<tr> 
										<td>
											 <div class="wrap-input100">
												  <input name="tgl_pinjam" type="date" min="<?php echo date('Y-m-d'); ?>" style="margin-top:-10px;padding:10px;width:337px;">
											 </div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="wrap-input100">
												<span class="label-input100">Tanggal Kembali</span>
											</div>
										</td>
									</tr>
									<tr> 
										<td>
											<div class="wrap-input100">
												<input name="tgl_kembali" type="date" style="margin-top:-10px;padding:10px;width:337px;">
											</div>
										</td>
									</tr>
									
									<tr>
										<td>
										<div class="wrap-input100">
										<input type="radio" name="spr" value ="supir"/> <span class="label-input100"> Dengan Supir </span>
										<input type="radio" name="spr" value ="tnpsupir" style="margin-left:40px;"/> <span class="label-input100"> Tanpa Supir</span>
										</div>
										</td>
									</tr>
									
									<tr>
										<td>
											<div class="wrap-input100">
												<span class="label-input100">Metode Pembayaran</span>
												<div>
													<select name="pembayaran" style="padding:10px;width:337px;">
														<option value="ATM">Transfer ATM</option>
														<option value="Cash">Bayar di Tempat</option>
													</select>
												</div>
											</div>
										</td>
									</tr>
									<tr>								
										<td colspan="2">
											<input name="submit" type="submit" value="Submit" class="tombol" style="margin-left:50px;"/>
											<a href="?n=list" class="tombol">Cancel</a>
										</td>
									</tr>
								</table>
								</form>


							</div>
							
						</div>											
					</div>
								
			</section>
<?php
} ?>