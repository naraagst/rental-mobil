<section class="background relative" id="home">
				<div class="overlay overlay-bg"></div>	
				
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center ">
						<div class="banner-content col-lg-7 col-md-6 ">
							<div class="header-right" style="padding:30px;">
							<form name="kritik" method="post" action="?n=krisan_proses" enctype="multipart/form-data">	
							<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
							<center><h3 class="text-white">Silahkan Masukkan Kritik dan Saran Anda</h3></center>
								<table align="center" style="padding:50px; margin-top:20px;">
									<div align="left">					
									<tr>
									  <td >
										 <select name="merk" style="width:400px;padding:10px;margin-left:20px;">
											<?php
												$id=$_SESSION['id'];
												$show = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_user='$id'");
												while($tampil=mysqli_fetch_array($show)){
											?>
												<option value=""><--Pilih Kode Transaksi--></option>
												<option value="<?php echo $tampil['kode_trans']; ?>"><?php echo $tampil['kode_trans']; ?></option>
											<?php } ?>
										</select>
									 </td>
									</tr>
									
									<tr>
									  <td style="">
										  <textarea name="kritik_saran" rows="8" cols="35" placeholder="Tuliskan Kritik dan Saran" style="width:400px;padding:10px;margin-left:20px;"></textarea>
									  </td>
									</tr>
									
									<tr>								
										<td style="padding:25px">
											<center><input name="submit" type="submit" value="Kirim" class="tombol"/></center>
										</td>
									</tr>
									</div>
									
								</table>
							</form>
							</div>
						</div>
						
						
							
					</div>											
				</div>
								
			</section>