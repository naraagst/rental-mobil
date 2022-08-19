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
							<center>
							<img src="gambar/sim/<?php echo $data['foto_sim']; ?> " style="width:400px; margin-top:50px;"/>
							<h3 class="text-white">Foto SIM</h3>
							
							</center>
							
						</div>

								<table style="margin-top:50px; margin-left:-10px; margin-right:-100px" border ="5"  cellpadding="10" class="col-lg-5  col-md-6 text-white header-right">
														
									<tr>
									
									  <td>
										<span class="label-input100">Nama Lengkap </span>
									</td>
									
									 <td>

										<span class="label-input100">: <?php echo $data['namalengkap']; ?> </span>
									 
									 </td>
									
									</tr>
									
									<tr>
										  <td>
											<span class="label-input100">User Name </span>
											  
										  </td>
										  
										  <td><span class="label-input100">: <?php echo $data['username']; ?>  </span></td>
									</tr>
									
										
									<tr>
									 <td>
										<span class="label-input100">Alamat</span>
										  
									  </td>
									  
									  <td><span class="label-input100">: <?php echo $data['alamat']; ?> </span> </td>
									  
									</tr>
									
									<tr>
									 <td>
										<span class="label-input100">No. KTP <span>
										  
									  </td>
									  
									  <td><span class="label-input100">: <?php echo $data['ktp']; ?> </span> </td>
									  
									</tr>
									
									<tr>
									  <td>
										<span class="label-input100">No. Hp</span>
									  </td>
									  
									  <td><span class="label-input100">: <?php echo $data['telp']; ?> </span></td>
									  
									</tr>
								
									
									<tr>								
										<td colspan="2">
											<a href="?n=regis_edit" type="submit" class="tombol regist"> Edit</a>
										</td>
									</tr>
									
								</table>
							</div>
							
						</div>											

								
			</section>
			
			


