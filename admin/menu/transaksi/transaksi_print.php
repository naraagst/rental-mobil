<?php 
include("../lib/fungsi_tglindonesia.php");


?>


			<script> 
			window.print();
			</script>
	 
            <div class="card-body">
								
              <div>
                <table border="1px" style="margin-top:50px;" width="100%" cellspacing="0">
                  
                    <tr>
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
                  
				  
				 
				  	<?php
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN user ON (transaksi.id_user=user.id_user) JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) ORDER BY transaksi.id_trans DESC");
						while($data=mysqli_fetch_array($tampil)){
								$tgl_pesan = tgl_indonesia($data['tgl_transaksi']);
								$tgl_pinjam = tgl_indonesia($data['tgl_pinjam']);
								$tgl_kembali = tgl_indonesia($data['tgl_kembali']);
					?>
                    <tr>
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
                 
                </table>
				  
				</div>
			</div>
                  