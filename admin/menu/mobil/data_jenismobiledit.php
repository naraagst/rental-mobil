<?php
$tampil = mysqli_query($koneksi, "SELECT * FROM jenis_mobil WHERE id_jenismobil='$_GET[id]'");
	$data  	= mysqli_fetch_array($tampil);

?>

<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-plus"></i>
              Edit Data Jenis Mobil
			</div>
			
			<div class="card-body" id="add">
			<form name="tambah" method="post" action="?r=data_jenismobileditproses&id=<?php echo $data['id_jenismobil']; ?>" enctype="multipart/form-data">

				<table style="width:100%;">
					
					<tr> 
						<td style="padding-left:60px;">Merk Mobil / Jenis Mobil</td>			
						<td><input type="text" name="jenis" class="form-control" placeholder="" 
						value="<?php echo $data['jenis_mobil']; ?> "></td> 
					
					</td> 
					</tr>
					
					<tr> 
						<td></td>				
						<td><input type="submit" style="width:200px;padding:15px;margin-left:250px;" name="edit" value="Edit" class="tambah"></td> 
					</tr>
					
					<font style="color:red">
					Contoh:
					<ul>
						Merk Mobil / Jenis Mobil : Toyota Fortuner 2.4 G M/T
					<ul>
				</font>
					
				</table>
			</form>
			</div>
        </div>
	</div>
</div>