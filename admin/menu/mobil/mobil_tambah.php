<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-plus"></i>
              Tambah Mobil
			</div>
			
			<div class="card-body" id="add">
			<form name="tambah" method="post" action="?r=mobil_tambahproses" enctype="multipart/form-data">

				<table style="width:100%;">
					<tr> 
						<td style="padding-left:60px;">Merk Mobil</td>	
						<td>
							<select name="merk" style="width:700px;padding:20px;margin-left:50px;">
							<?php
								$show = mysqli_query($koneksi, "SELECT * FROM jenis_mobil ORDER BY jenis_mobil");
								while($tampil=mysqli_fetch_array($show)){
							?>
								<option value="<?php echo $tampil['jenis_mobil']; ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"><?php echo $tampil['jenis_mobil']; ?></option>
							<?php } ?>
							</select>
						</td> 
					</tr>
					<tr style="background-color:#f4f2f1;"> 
						<td style="padding-left:60px;">Nomor Plat</td>	
						<td><input type="text" style="width:700px;padding:25px;margin-left:50px;" name="plat" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td style="padding-left:60px;">Warna</td>			
						<td><input type="text" style="width:700px;padding:25px;margin-left:50px;" name="warna" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr style="background-color:#f4f2f1;"> 
						<td style="padding-left:60px;">Tahun</td>	
						<td><input type="text" style="width:700px;padding:25px;margin-left:50px;" name="tahun" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td style="padding-left:60px;">Harga</td>	
						<td><input type="text" style="width:700px;padding:25px;margin-left:50px;" name="harga" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"><em style="font-size:12px;color:red;margin-left:50px;">(Hanya angka, tanpa titik atau koma, contoh: 300000)</em></td> 
					</tr>
					
					<tr style="background-color:#f4f2f1;"> 
						<td style="padding-left:60px;">Gambar</td>	
						<td><input type="file" style="width:700px;padding:25px;margin-left:50px;" name="gbr_mobil"></td> 
					</tr>

					<tr> 
						<td></td>				
						<td><input type="submit" style="width:200px;padding:15px;margin-left:250px;" name="tambah" value="Tambah" class="tambah"></td> 
					</tr>
					
				</table>
			</form>
			</div>
        </div>
	</div>
</div>