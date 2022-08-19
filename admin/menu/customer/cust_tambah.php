<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-plus"></i>
              Tambah Customer
			</div>
			
			<div class="card-body" id="add">
			<form name="tambah" method="post" action="?r=cust_tambahproses" enctype="multipart/form-data">

				<table>
					<tr> 
						<td>Nama Lengkap</td>	
						<td><input type="text" name="nama" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					<tr> 
						<td>Username</td>	
						<td><input type="text" name="username" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td>Alamat</td>			
						<td><input type="text" name="alamat" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td>Telp</td>	
						<td><input type="text" name="telp" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td>No. KTP</td>	
						<td><input type="text" name="noktp" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
								
					<tr>
						<td>
							<div class="wrap-input100">
								<span class="label-input100">Upload Foto SIM </span>
								<input name="no_sim" type="file" required oninvalid="this.setCustomValidity('Silahkan Upload Foto SIM !!')" oninput="setCustomValidity('')"/>
							</div>
						</td>
					</tr>
					
					<tr> 
						<td>Password</td>	
						<td><input type="password" name="password" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td>Ulang Password</td>	
						<td><input type="password" name="ulangpassword" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td></td>				
						<td><input type="submit" name="tambah" value="Tambah" class="tambah"></td> 
					</tr>
					
				</table>
			</form>
			</div>
        </div>
	</div>
</div>