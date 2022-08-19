      <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
			  
			  
              Data Mobil
			  
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
                      <th>Merk</th>
                      <th>Plat</th>
                      <th>Warna</th>
                      <th>Tahun</th>
					  <th>Harga</th>
					  <th>Gambar</th>
                      <th>Status</th>
					  <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM mobil ORDER BY id_mobil");
						while($data=mysqli_fetch_array($tampil)){
					?>
                    <tr>
						<td> <?php echo $data['merk']; ?></td>
						<td> <?php echo $data['plat']; ?> </td>
						<td> <?php echo $data['warna']; ?> </td>
						<td> <?php echo $data['tahun']; ?> </td>
						<td>Rp <?php echo number_format($data['harga'],2,",",".");?></td>
						<td> <img src="../gambar/mobil/<?php echo $data['gbr_mobil']; ?>" alt="" style="width:80px;"/> </td>
						<td> <?php echo $data['status']; ?> </td>
						<td> 
							<center>
							<a href="?r=mobil_edit&id=<?php echo $data['id_mobil']; ?>" class="edit"> <i class="fa fa-pencil"></i> </a>
							<a href="?r=mobil_hapus&id=<?php echo $data['id_mobil']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="edit"><i class="fa fa-trash"></i></a>
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