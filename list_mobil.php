<section class="background relative" id="home" style="height:200%">
	<div class="overlay overlay-bg" style="height:200%">
		
		<form name="cari" method="post" action="?n=cari" enctype="multipart/form-data">
			<input class="card" name="cari" style="width: 19rem; height:2.5rem; margin:830px; float:left; 
			margin-top:55px;" type="text" placeholder="telusuri" required>
			<input class="btn btn-info" style="margin-top:55px; margin:57px; margin-left:-810px; " type="submit" value="Cari">
			
			<?php echo $tampil['id_jenismobil']; ?>
		</form>
		

		
	</div>	
	<div style="padding-top:100px; padding-left:20px;">
		<?php
			$no=1;
			$tampil = mysqli_query($koneksi, "SELECT * FROM mobil JOIN spesifikasi ON (mobil.id_jenismobil=spesifikasi.id_jenismobil) ORDER BY id_mobil");
			while($data=mysqli_fetch_array($tampil)){
		?>
			<div class="card" style="width: 19rem; height:24rem; margin:10px; float:left;">
			  <div ><img class="card-img-top" src="gambar/mobil/<?php echo $data['gbr_mobil'];?>" alt="Card image cap" style="height:170px;"></div>
			  <div class="card-body" style="text-align:center; line-through:1;">
				<h5 class="card-title"><?php echo $data['merk']; ?></h5>
				<h6>Rp <?php echo number_format($data['harga'],2,",",".");?>/ hari</h6>
				<?php if($data['status']=="tersedia"){ ?>
				<h6 style="color:green;">Tersedia</h6>
				<?php } else { ?>
				<h6 style="color:red;">Tidak Tersedia</h6>
				<?php } ?>
				<div class="row" style="text-align:center; line-height:0.5">
					<div class="col-md-4"><p>Jenis</p><label><?php echo $data['jenis'];?></label></div>
					<div class="col-md-4"><p>Tahun</p><label><?php echo $data['tahun'];?></label></div>
					<div class="col-md-4"><p>Kapasitas</p><label><?php echo $data['kapasitas_tempat_duduk'];?></label></div>
				</div>
				<a href="?n=spesifikasi&id=<?php echo $data['id_mobil']; ?>" target="_blank" class="btn btn-info"style="margin-top:15px" >Lihat Detail</a> 
			  </div>
			</div>
		<?php } ?>
	</div>	

</section>
