<?php
	$id= $_SESSION['id'];
	$tampil = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
	$data  	= mysqli_fetch_array($tampil);
	
?>
			
			<section class="background relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h1 class="text-white text-uppercase">
								Rental Mobil BDJ		
							</h1>
							<h6 class="text-white">
							kami berusaha memberikan layanan terbaik bagi anda yang membutuhkan kendaraan untuk keperluan pribadi, acara pernikahan, perusahaan dll.
					
							</h6>
							
						</div>
						<div style="margin-top:200px;" class="col-lg-5  col-md-6 header-right register">
						
						
						<form name="register" method="post" action="?n=regis_editproses" enctype="multipart/form-data">	
							<input name="id" type="hidden" value="<?php echo $data['id_user']; ?> " />
								<table align="center">
														
									<tr>
									  <td>
										<span class="label-input100">Nama Lengkap </span>
										  <input name="nama_lengkap" type="text" value="<?php echo $data['namalengkap']; ?> " />
									 </td>
									</tr>
									
									<tr>
									  <td>
										<span class="label-input100">User Name </span>
										  <input name="user_name" type="text" value="<?php echo $data['username']; ?>"/>
									  </td>
									</tr>
									
									<tr>
									 <td>
										<span class="label-input100">Alamat</span></br>
										  <input name="alamat" type="text" value="<?php echo $data['alamat']; ?>"/>
									  </td>
									</tr>
									
									<tr>
									  <td>
									  <span class="label-input100">No. Hp</span></br>
										  <input name="no_hp" type="text" value="<?php echo $data['telp']; ?>"/>
									  </td>
									</tr>
									
									<tr>
									  <td>
									  <span class="label-input100">No. KTP</span></br>
										  <input name="no_ktp" type="text" value="<?php echo $data['ktp']; ?>"/>
									  </td>
									</tr>
																						
									<tr>
									  <td>
											<span class="label-input100">Upload Foto SIM </span>
										  <input name="no_sim" type="file"/>
										  </div>
									  </td>
									</tr>
									
																	
									<tr>								
										<td>
											<input name="Submit" type="Submit" value="Edit" class="tombol regist"/>
										</td>
									</tr>
									
								</table>
								
							</form>
							</div>
							
						</div>											
					</div>
								
			</section>
			
