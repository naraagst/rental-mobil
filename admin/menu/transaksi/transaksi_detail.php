<?php
	include("../lib/fungsi_tglindonesia.php");
	$kode=$_GET['id'];
	$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi JOIN user ON (transaksi.id_user=user.id_user) JOIN mobil ON (transaksi.id_mobil=mobil.id_mobil) WHERE id_trans='$kode'");
	$data  	= mysqli_fetch_array($tampil);
	$tgl_pesan 	 = tgl_indonesia($data['tgl_transaksi']);
	$tgl_pinjam	 = tgl_indonesia($data['tgl_pinjam']);
	$tgl_kembali = tgl_indonesia($data['tgl_kembali']);
	
?>
      <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Detail Transaksi
			  
			</div>
            <div class="card-body">
			<section>
				<table style="font-size:20px" cellpadding="20">
				
				<tr>
					<td>Kode Transaksi</td>
					<td> : <?php echo $data['kode_trans']; ?></td>
					
				</tr>
				
				<tr>
					<td> Nama Customer</td>
					<td> : <?php echo $data['namalengkap']; ?></td>
				</tr>
				
				<tr>
					<td> Plat Mobil </td>
					<td> : <?php echo $data['plat']; ?> </td>
				</tr>
				
				<tr>
					<td> Tanggal Pinjam </td>
					<td> : <?php echo $tgl_pinjam; ?></td>
				</tr>
				
				<tr>
					<td> Tanggal Kembali </td>
					<td> : <?php echo $tgl_kembali; ?></td>
				</tr>
				
				<tr>
					<td> Harga </td>
					<td> : Rp<?php echo number_format($data['harga'],2,",",".");?></td>
				</tr>
				
				<tr>
					<td> Total Bayar </td>
					<td> : Rp<?php echo number_format($data['totalbayar'],2,",",".");?></td>
				</tr>
				
				<tr>
					<td> Tanggal Transaksi </td>
					<td> : <?php echo $tgl_pesan; ?></td>
				</tr>
				
				<tr>
					<td> Pembayaran </td>
					<td> : <?php echo $data['pembayaran']; ?></td>
				</tr>
				
				<tr>
					<td> Status </td>
					<td> : <b><?php echo $data['stat_transaksi']; ?></b></td>
				</tr>
				
				<?php if($data['stat_transaksi'] == "Selesai"){ 
									$tgl_dikembalikan = tgl_indonesia($data['tgl_dikembalikan']);
									?>
									<tr>
										<td> Denda </td>
										<td> : Rp<?php echo number_format($data['denda'],2,",",".");?></td>
									</tr>
									<tr>
										<td> Tanggal Dikembalikan </td>
										<td> : <?php echo $tgl_dikembalikan; ?></td>
									</tr>
									<?php } ?>
				</table>
				<?php if ($data['stat_transaksi']=="Pending"){ ?>
				
				<tr>
					<td></td>
					<td><a href="#" data-toggle="modal" data-target="#PendingModal" class="tambah" style="margin-left:150px">Transaksi Telah dibayar</a></td>
				</tr>
				<?php } elseif($data['stat_transaksi']=="Lunas"){ ?>
				<tr>
					<td></td>
					<td><a href="#" data-toggle="modal" data-target="#LunasModal" class="tambah" style="margin-left:150px">Mobil Dipinjam</a></td>
				</tr>
				<?php } elseif($data['stat_transaksi']=="Dipinjam"){ ?>
				<tr>
					<td></td>
					<td><a href="#" data-toggle="modal" data-target="#SelesaiModal" class="tambah" style="margin-left:150px">Transaksi Selesai</a></td>
				</tr>
				<?php } ?>

			</section>

</div>
          </div>

        </div>
		
		<div class="modal fade" id="PendingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Mengganti Status Transaksi Menjadi <font style="color:blue">Lunas?</font></h5>
			  </div>
			  <div class="modal-body">Status yang telah diubah tidak dapat dikembalikan.</div>
			  <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="?r=lunas&id=<?php echo $data['id_trans']; ?>">Lunas</a>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade" id="LunasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Mengganti Status Transaksi Menjadi <font style="color:blue">Dipinjam?</font></h5>
			  </div>
			  <div class="modal-body">Status yang telah diubah tidak dapat dikembalikan.</div>
			  <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="?r=pinjam&id=<?php echo $data['id_trans']; ?>">Mobil Dipinjam</a>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade" id="SelesaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Mengganti Status Transaksi Menjadi <font style="color:blue">Selesai?</font></h5>
			  </div>
			  <div class="modal-body">Status yang telah diubah tidak dapat dikembalikan.</div>
			  <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="?r=selesai&id=<?php echo $data['id_trans']; ?>">Transaksi Selesai</a>
			  </div>
			</div>
		  </div>
		</div>
