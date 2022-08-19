
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
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

		
      
    </div>
  </div>


      </div>