<?php
	$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from mobil where id_mobil='$_GET[id]'"));
	if($data['gbr_mobil'] != "") unlink("../gambar/mobil/$data[gbr_mobil]");
	mysqli_query($koneksi, "delete from mobil where id_mobil='$_GET[id]'");
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?r=mobil'>";
?>