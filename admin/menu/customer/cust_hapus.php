<?php
	$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from user where id_user='$_GET[id]'"));
	if($data['foto_sim'] != "") unlink("../gambar/sim/$data[foto_sim]");
	mysqli_query($koneksi, "delete from user where id_user='$_GET[id]'");
	echo"<meta http-equiv='refresh' content='1; url=?r=cust'>";
?>