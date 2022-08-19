      <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Customer
			  <a href="?r=cust_tambah" class="tambah" style="float:right;">Tambah Customer (+)</a>
			 </div>
			  
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Nama Lengkap</th>
                      <th>Alamat</th>
                      <th>No. Telp</th>
					  <th>No. KTP</th>
					  <th>Foto SIM</th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user");
						while($data=mysqli_fetch_array($tampil)){
					?>
                    <tr>
						<td> <?php echo $data['username']; ?> </td>
						<td> <?php echo $data['namalengkap']; ?> </td>
						<td> <?php echo $data['alamat']; ?> </td>
						<td> <?php echo $data['telp']; ?> </td>
						<td> <?php echo $data['ktp']; ?> </td>
						<td> <img src="../gambar/sim/<?php echo $data['foto_sim']; ?>" style="width:100px"/> </td>
						<td> 
							<center>
							<a href="?r=cust_hapus&id=<?php echo $data['id_user']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="edit"><i class="fa fa-trash"></i></a>
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

      </div>