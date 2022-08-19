<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-plus"></i>
              Tambah Transaksi
			</div>
			
			<div class="card-body" id="add">
			<form name="tambah" method="post" action="?r=transaksi_tambahproses" enctype="multipart/form-data">

				<table style="width:100%;">
					
					
					<tr style="background-color:#f4f2f1;"> 
						
						<td style="padding-left:60px;">Nama Customer</td>	
						<td>
							<select name="user"  style="width:700px;padding:20px;margin-left:50px;">
							<?php
								$show = mysqli_query($koneksi, "SELECT * FROM user");
								while($tampil=mysqli_fetch_array($show)){
							?>
								<option value="<?php echo $tampil['id_user']; ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" 
								oninput="setCustomValidity('')"><?php echo $tampil['namalengkap']; ?></option>
							<?php } ?>
							</select>
						</td> 
					
					</tr>
					
					<tr> 
						<td style="padding-left:60px;">Plat Mobil</td>	
						<td>
							<select name="idmobil"  style="width:700px;padding:20px;margin-left:50px;">
							<?php
								$show = mysqli_query($koneksi, "SELECT * FROM mobil");
								while($tampil=mysqli_fetch_array($show)){
							?>
								<option value="<?php echo $tampil['id_mobil']; ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" 
								oninput="setCustomValidity('')"><?php echo $tampil['plat']; ?></option>
							<?php } ?>
							</select>
						</td>  
					</tr>
					
					<tr style="background-color:#f4f2f1;"> 
						<td style="padding-left:60px;">Tanggal Pinjam</td>	
						<td><input type="date" min="<?php echo date('Y-m-d'); ?>"  style="width:700px;padding:25px;margin-left:50px;" name="tgl_pinjam" class="form-control"
						placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" 
						oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td style="padding-left:60px;">Tanggal Kembali</td>	
						<td><input type="date" min="<?php echo date('Y-m-d'); ?>"  style="width:700px;padding:25px;margin-left:50px;" name="tgl_kembali" class="form-control" 
						placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" 
						oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr  style="background-color:#f4f2f1;"> 
						<td style="padding-left:60px;">Supir</td>	
						<td>
							<select name="spr"  style="width:700px;padding:20px;margin-left:50px;">
									<option value="supir">Dengan Supir</option>
									<option value="tnpsupir">Tanpa Supir</option>
							</select>
						</td> 
					</tr>
					
					<tr> 
						<td style="padding-left:60px;">Pembayaran</td>	
						<td>
							<select name="pembayaran"  style="width:700px;padding:20px;margin-left:50px;">
									<option value="ATM">ATM</option>
									<option value="Cash">Cash</option>
							</select>
						</td> 
					</tr>
					
					<tr style="background-color:#f4f2f1;"> 
						<td style="padding-left:60px;">Status Transaksi</td>	
						<td>
							<select name="status_transaksi"  style="width:700px;padding:20px;margin-left:50px;">
									<option value="Pending">Pending</option>
									<option value="Lunas">Lunas</option>
									<option value="Dipinjam">Dipinjam</option>
									<option value="Selesai">Selesai</option>
							</select>
						</td>
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