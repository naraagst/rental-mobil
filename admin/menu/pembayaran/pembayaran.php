      <?php
	  include("../lib/fungsi_tglindonesia.php");
	  ?>
	  <div id="content-wrapper">

        <div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Pembayaran
			</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama User</th>
                      <th>Kode Transaksi</th>
                      <th>Gambar Struk</th>
                      <th>Jumlah dibayar</th>
					  <th>Tanggal</th>
					  <th>Status</th>
					  <th>Nama Admin</th>
					  <th></th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN user ON (pembayaran.id_user=user.id_user) ORDER BY pembayaran.status");
						while($data=mysqli_fetch_array($tampil)){
							$tgl = tgl_indonesia($data['tanggal']);
					?>
                    <tr>
						<td> <?php echo $data['namalengkap']; ?> </td>
						<td> <?php echo $data['kode_trans']; ?> </td>
						<td> <img src="../gambar/struk/<?php echo $data['gbr_struk']; ?>" style="width:150px;" /> </td>
						<td> Rp<?php echo number_format($data['jlh_byr'],2,",",".");?></td>
						<td> <?php echo $tgl; ?> </td>
						<td> <?php echo $data['status']; ?> </td>
						<td> <?php echo $data['nama_admin']; ?> </td>
						<td> <a href="?r=pembayaran_detail&id=<?php echo $data['kode_trans']; ?>" class="tambah">Detail</a> </td>
                    </tr>
						<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>