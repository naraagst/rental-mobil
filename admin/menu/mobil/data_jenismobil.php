      <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
			  
			  
              Data Jenis Mobil
			  
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
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Jenis Mobil</th>
						<th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM jenis_mobil ORDER BY id_jenismobil");
						while($data=mysqli_fetch_array($tampil)){
					?>
                    <tr>

						<td> <?php echo $data['jenis_mobil']; ?> </td>
						<td> 
							<center>
							<a href="?r=data_jenismobiledit&id=<?php echo $data['id_jenismobil']; ?>" class="edit"> Edit </a>
							<a href="?r=data_jenismobilhapus&id=<?php echo $data['id_jenismobil']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="edit"><i class="fa fa-trash"></i></a>
							</center>
						</td>
                    </tr>
						<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

		
      
    </div>
  </div>


      </div>