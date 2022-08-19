<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-plus"></i>
              Tambah Spesifikasi
			</div>
			
			<div class="card-body" id="add">
			
			
			<form name="edit" method="post" action="?r=spesifikasi_proses" enctype="multipart/form-data">
				<table style="width:100%;">
				
					<tr style="border-bottom:1px solid black;background-color:#f4f2f1;">
						<td style="padding-left:40px;">JENIS MOBIL</td>
						<td>
							<select name="nama" style="width:700px;padding:15px;">
							<?php
								$show = mysqli_query($koneksi, "SELECT * FROM jenis_mobil ORDER BY jenis_mobil");
								while($tampil=mysqli_fetch_array($show)){
							?>
								<option value="<?php echo $tampil['id_jenismobil']; ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"><?php echo $tampil['jenis_mobil']; ?></option>
							<?php } ?>
							</select>
						</td>
					</tr>
					<tr >
						<td style="padding:10px"> <h5>PERFORMA</h5> </td>
					</tr>
					<tr>
						<td style="padding-left:40px;">Kapasitas Mesin</td>
						<td>
							<input name="kapasitas_mesin" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Tenaga</td>
						<td>
							<input name="tenaga" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					<tr>
						<td style="padding-left:40px;">Torsi </td>
						<td>
							<input name="torsi" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Jenis Bahan Bakar </td>
						<td>
							<input name="jenis_bahan_bakar" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;">Konsumsi BBM Tol</td>
						<td>
							<input name="konsumsi_bbm" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Konsumsi BBM Dalam Kota (kmpl)</td>
						<td>
							<input name="kmpl" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
			
					<tr>
						<td style="padding:10px"> <h5>KAPASITAS</h5> </td>
					</tr>
				
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;"> Kapasitas Tempat Duduk </td>
						<td>
							<input name="kapasitas_tempat_duduk" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>	
						<td style="padding-left:40px;"> Kapasitas Tangki Bahan Bakar (liter)  </td>
						<td>
							<input name="tangki_bahan_bakar" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;"> Panjang </td>
						<td>
							<input name="panjang" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;"> Lebar </td>
						<td>
							<input name="lebar" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Tinggi</td>
						<td>
							 <input name="tinggi" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;"> Jumlah Pintu</td>
						<td>
							 <input name="jumlah_pintu" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
			
			
					<tr>
						<td style="padding:10px"> <h5>SUSPENSI DAN REM</h5> </td>
					</tr>
			
			
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Suspensi Depan </td>
						<td>
							<input name="suspensi_depan" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;"> Suspensi Belakang </td>
						<td>
							<input name="suspensi_belakang" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;"> Jenis Shockbreaker </td>
						<td>
							<input name="jenis_shockbreaker" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					
			
					<tr>
						<td style="padding:10px"> <h5>TRANSMISI</h5> </td>
					</tr>
			
				
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Girboks </td>
						<td>
							<input name="girboks" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;">Jenis Transmisi </td>
						<td>
							<input name="jenis_transmisi" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Jenis Penggerak </td>
						<td>
							<input name="jenis_penggerak" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					
			
					<tr>
						<td style="padding:10px"> <h5>KEMUDI & LAIN-LAIN</h5> </td>
					</tr>
			
			
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;"> Jenis Kemudi </td>
						<td>
							<input name="jenis_kemudi" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;"> Jenis Ban </td>
						<td>
							<input name="jenis_ban" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;"> Jumlah Silinder </td>
						<td>
							<input name="jumlah_silinder" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;">Katup per Silinder </td>
						<td>
							<input name="katup_per_silinder" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Sistem Suplai Bahan Bakar </td>
						<td>
							<input name="suplai_bahan_bakar" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:40px;">Ukuran Ban </td>
						<td>
							<input name="ukuran_ban" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr style="background-color:#f4f2f1;">
						<td style="padding-left:40px;">Jenis</td>
						<td>
							<input name="jenis" type="text" class="form-control" style="width:700px;padding:20px;"/>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" >
							<input name="tambah_spesifikasi" type="submit" value="Tambah Spesifikasi" class="tambah" style="width:200px;padding:15px;margin-left:450px;"/>
						</td>
					</tr>
				</table>
			
			</form>
			</div>
        </div>
	</div>
</div>