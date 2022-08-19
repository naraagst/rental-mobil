<?php 
include("../lib/fungsi_tglindonesia.php");


?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Transaksi
			  <a href="?r=transaksi_tambah" class="tambah" style="float:right;">Tambah Transaksi (+)</a>
			  <a href="?r=transaksi_print" class="tambah" style="float:right;">Cetak Data Transaksi</a>
			  
			</div>
            <div class="card-body">
				<font style="color:red">
					Keterangan Status Transaksi:
					<ol>
						<li>Pending = Biaya sewa belum dibayar sehingga mobil belum dapat diambil.</li>
						<li>Lunas = Biaya sewa telah dibayar (kecuali denda), mobil siap diambil.</li>
						<li>Dipinjam = Mobil telah berada di tangan customer sampai tenggat waktu yang ditentukan.</li>
						<li>Selesai = Mobil telah dikembalikan, transaksi selesai.</li>
						
					</ol>
				</font>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th></th>
					  <th>Kode Transaksi</th>
                      <th>Nama Customer</th>
                      <th>Plat Mobil</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
					  <th>Harga</th>
					  <th>Denda</th>
					  <th>Total Bayar</th>
					  <th>Tanggal Transaksi</th>
					  <th>Pembayaran</th>
					  <th>Status Transaksi</th>
					  <th>Tanggal dikembalikan</th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN user ON (transaksi.id_user=user.id_user) JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) ORDER BY transaksi.id_trans DESC");
						while($data=mysqli_fetch_array($tampil)){
								$tgl_pesan = tgl_indonesia($data['tgl_transaksi']);
								$tgl_pinjam = tgl_indonesia($data['tgl_pinjam']);
								$tgl_kembali = tgl_indonesia($data['tgl_kembali']);
					?>
                    <tr>
						<td><a href="?r=transaksi_detail&id=<?php echo $data['id_trans'];?>"  class="tambah" >Detail</a></td>
						<td> <?php echo $data['kode_trans']; ?></td>
						<td> <?php echo $data['namalengkap']; ?> </td>
						<td> <?php echo $data['plat']; ?> </td>
						<td> <?php echo $tgl_pinjam; ?> </td>
						<td> <?php echo $tgl_kembali; ?> </td>
						<td> Rp<?php echo number_format($data['harga'],2,",",".");?></td>
						<td> Rp<?php echo number_format($data['denda'],2,",",".");?></td>
						<td> Rp<?php echo number_format($data['totalbayar'],2,",",".");?></td>
						<td> <?php echo $tgl_pesan; ?> </td>
						<td> <?php echo $data['pembayaran']; ?> </td>
						<td> <?php echo $data['stat_transaksi']; ?> </td>
						<td> <?php echo $data['tgl_dikembalikan']; ?> </td>
                    </tr>
						<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>
	  
	  