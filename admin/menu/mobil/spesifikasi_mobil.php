<?php 
	$id = $_POST['id'];
	
?>

 <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
			  
			  
              Data Spesifikasi Mobil
			  
			  <div style="float:right;" class="nav-item dropdown no-arrow">
				  <button class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
				  <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a href="?r=spek"  class="dropdown-item" style="float:right;">Lihat Data Spesifikasi</a>
					<a href="?r=data_jenismobil"  class="dropdown-item" style="float:right;">Lihat Data Jenis Mobil</a>
					<a href="?r=mobil_tambah"  class="dropdown-item" style="float:right;">Tambah Mobil (+)</a>
					<a href="?r=spesifikasi_tambah"  class="dropdown-item" style="float:right;">Tambah Spesifikasi (+)</a>
					<a href="?r=mobil_tambah_jenis"  class="dropdown-item" style="float:right;">Tambah Jenis Mobil (+)</a>

				</div>
				
			</div>

			 
			</div>
            <div class="card-body">
			
			<form name="jenis" method="post" action="?r=spesifikasi" enctype="multipart/form-data">
				<select name="id" style="width:700px;padding:15px;margin-left:100px;">
					<option value=""><--Pilih Jenis Mobil--></option>
				<?php
					$show = mysqli_query($koneksi, "SELECT * FROM jenis_mobil ORDER BY jenis_mobil");
					while($tampil=mysqli_fetch_array($show)){
				?>		
					<option value="<?php echo $tampil['id_jenismobil']; ?>"><?php
					echo $tampil['jenis_mobil']; ?></option>
					
					<?php } ?>
				</select>
				<input name="submit" type="submit" value="Lihat" style="padding:13px;margin-left:-5px;font-weight:bold;width:150px"/>
			</form>
			
			<?php
				if($id==''){
					
				} else {
					$tampil = mysqli_query($koneksi, "SELECT * FROM jenis_mobil WHERE id_jenismobil='$id'");
					$hasil=mysqli_fetch_array($tampil);
			?>
			<h4 style="margin-top:20px;">Spesifikasi <?php echo $hasil['jenis_mobil']; ?></h4>
             <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
					<tr style="text-align:center">
						<?php
							$no=1;
							$tampil = mysqli_query($koneksi, "SELECT * FROM jenis_spesifikasi ORDER BY id_jenis");
							while($data=mysqli_fetch_array($tampil)){
						?>
							<th  colspan="2"><?php echo $data['jenis_spesifikasi']; ?></th>
						<?php } ?>
					</tr>
						<?php
						$tampil = mysqli_query($koneksi, "SELECT * FROM spesifikasi WHERE id_jenismobil='$id'");
						$data=mysqli_fetch_array($tampil);
						?>

								<tr>		
						
									<td>Kapasitas mesin </td>
									<td><?php echo $data['kapasitas_mesin']; ?></td>
									
									<td>Kapasitas Tempat Duduk</td>
									<td><?php echo $data['kapasitas_tempat_duduk']; ?></td>
									
									<td>Suspensi Depan </td>
									<td><?php echo $data['suspensi_depan']; ?></td>
									
									<td>Girboks</td>
									<td><?php echo $data['girboks']; ?></td>
									
									<td>Jenis Kemudi</td>
									<td><?php echo $data['jenis_kemudi']; ?></td>
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
								
						
                  </tbody>
                </table>
				<?php } ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

		
      
    </div>
  </div>


      </div>