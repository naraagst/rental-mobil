<div id="content-wrapper">

    <div class="container-fluid">

		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-plus"></i>
              Tambah Jenis Mobil
			</div>
			
			<div class="card-body" id="add">
			<form name="tambah" method="post" action="?r=mobil_jenisproses" enctype="multipart/form-data">

				<table style="width:100%;">
					
					<tr> 
						<td style="padding-left:60px;">Merk Mobil / Jenis Mobil</td>			
						<td><input type="text" style="width:700px;padding:25px;margin-left:50px;" name="jenis" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong !!')" oninput="setCustomValidity('')"></td> 
					</tr>
					
					<tr> 
						<td></td>				
						<td><input type="submit" style="width:200px;padding:15px;margin-left:250px;" name="tambah" value="Tambah" class="tambah"></td> 
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