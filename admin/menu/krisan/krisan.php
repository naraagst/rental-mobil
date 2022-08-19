      <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Kritik dan Saran
			</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					  <th>Id_user</th>
                      <th>Nama User</th>
                      <th>Kode Transaksi</th>
                      <th>Kritik dan Saran</th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM krisan JOIN user ON (krisan.id_user=user.id_user) ORDER BY krisan.id_krisan DESC");
						while($data=mysqli_fetch_array($tampil)){
					?>
                    <tr>
						<td> <?php echo $data['id_user']; ?> </td>
						<td> <?php echo $data['namalengkap']; ?> </td>
						<td> <?php echo $data['kode_trans']; ?> </td>
						<td> <?php echo $data['krisan']; ?> </td>
                    </tr>
						<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>    
    </div>
  </div>
</div>