<?php
	if(!defined("INDEX")) die("---");
?>

<?php

	$tampil = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil='$_GET[id]'");
	$data  	= mysqli_fetch_array($tampil);
?>

<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-edit"></i>
              Edit Data Mobil
			</div>
			
			<div class="card-body" id="add">
			<form name="edit" method="post" action="?r=mobil_editproses" enctype="multipart/form-data"">
				<input type="hidden" name="id" value="<?php echo $data['id_mobil']; ?>">
				<table>
					<tr> 
						<td>Merk Mobil</td>	
						<td><input type="text" name="merk" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')" value="<?php echo $data['merk']; ?>"></td> 
					</tr>
					<tr> 
						<td>Nomor Plat</td>	
						<td><input type="text" name="plat" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')" value="<?php echo $data['plat']; ?>"></td> 
					</tr>
					
					<tr> 
						<td>Warna</td>			
						<td><input type="text" name="warna" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')" value="<?php echo $data['warna']; ?>"></td> 
					</tr>
					
					<tr> 
						<td>Tahun</td>	
						<td><input type="text" name="tahun" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')" value="<?php echo $data['tahun']; ?>"></td> 
					</tr>
					
					<tr> 
						<td>Harga</td>	
						<td><input type="text" name="harga" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')" value="<?php echo $data['harga']; ?>"></td> 
					</tr>

					<tr> 
						<td>Gambar</td>	
						<td><img src="../gambar/mobil/<?php echo $data['gbr_mobil']; ?>" width="100"> <br> <input type="file" name="gbr_mobil"></td> 
					</tr>
					
					<tr> 
						<td></td>				
						<td><input type="submit" name="edit" value="Edit" class="tambah"></td> 
					</tr>
					
				</table>
			</form>
			</div>
        </div>
	</div>
</div>