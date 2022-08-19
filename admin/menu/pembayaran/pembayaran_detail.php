<?php
	include("../lib/fungsi_tglindonesia.php");
	$tampil = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN user ON (pembayaran.id_user=user.id_user) WHERE pembayaran.kode_trans='$_GET[id]'");
	$data  	= mysqli_fetch_array($tampil);
	$tgl = tgl_indonesia($data['tanggal']);
?>
      <div id="content-wrapper">

        <div class="container-fluid">


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Verifikasi Pembayaran
			  
			</div>
            <div class="card-body">
			<section>
			<table style="font-size:20px" cellpadding="20">
			
			<tr>
				<td> Nama User</td>
				<td> : <?php echo $data['namalengkap']; ?></td>
			</tr>
			
			<tr>
				<td> Kode Transaksi</td>
				<td> : <?php echo $data['kode_trans']; ?></td>
			</tr>
			
			<tr>
				<td> Jumlah Dibayar</td>
				<td> : Rp <?php echo number_format($data['jlh_byr'],2,",",".");?></td>
			</tr>
			
			<tr>
				<td> Tanggal Transfer</td>
				<td> : <?php echo $tgl; ?></td>
			</tr>
			
			<?php if ($data['status']=="Belum di Verifikasi"){ ?>
			<tr>
				<td> Status</td>
				<td style="color:red;"> : <b><?php echo $data['status']; ?></b></td>
			</tr>
			<?php } else{ ?>
			<tr>
				<td> Status</td>
				<td style="color:green;"> : <b><?php echo $data['status']; ?></b></td>
			</tr>
			<?php } ?>
			<tr>
				<td> Gambar Struk</td>
				<td> : 
				<a href="#" data-toggle="modal" data-target="#strukModal">
				<img src="../gambar/struk/<?php echo $data['gbr_struk']; ?>" style="width:100px;" /></a>

				</td>
			</tr>
			</table>
			<?php if ($data['status']=="Belum di Verifikasi"){ ?>
			<a href="#" data-toggle="modal" data-target="#verifModal" class="tambah" style="margin-left:150px">Verifikasi Pembayaran</a> 
			<?php } else{ ?>

			<?php } ?>
</section>

</div>
          </div>

        </div>
		
	<div class="modal fade" id="strukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:600px;">
      <div class="modal-dialog" role="document" >
        <div class="modal-content" style="width:585px;">
			<div class="modal-header">
			<h4 class="modal-title" id="exampleModalLabel">Foto Bukti Pembayaran</h4>
            <button class="btn btn-secondary" type="button" data-dismiss="modal" >X</button>
          </div>
          <div class="modal-body"><img src="../gambar/struk/<?php echo $data['gbr_struk'];?>" style="width:550px;"/></div>
        </div>
      </div>
    </div>
	
	<div class="modal fade" id="verifModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Memverifikasi Pembayaran?</h5>
          </div>
          <div class="modal-body">Pembayaran yang telah di verifikasi tidak dapat dibatalkan.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="?r=verifikasi&id=<?php echo $data['kode_trans']; ?>">Verifikasi Pembayaran</a>
          </div>
        </div>
      </div>
    </div>


		
      
    </div>
  </div>


      </div>