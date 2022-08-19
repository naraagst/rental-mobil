<?php


	$nama_gambar2 	= $_FILES['no_sim']['name'];
	$lokasi_gambar2 = $_FILES['no_sim']['tmp_name'];
	$tipe_gambar2	= $_FILES['no_sim']['type'];

	if($_POST['password'] != $_POST['ulangpassword']){
			echo"<p style='color:red;text-align:center;'>Password dan ulang password tidak sama</p>";
			echo"<meta http-equiv='refresh' content='1; url=?r=cust_tambah'>";}
			
	else{
	move_uploaded_file($lokasi_gambar2,"../gambar/sim/$nama_gambar2");
	mysqli_query($koneksi, "INSERT INTO `proyekperangkatlunak`.`user` (`id_user`, `username`, `password`, `namalengkap`, `alamat`, `telp`, `ktp`, `foto_sim`) 
	VALUES (NULL, '$_POST[username]', '$_POST[password]', '$_POST[nama]', '$_POST[alamat]', '$_POST[telp]', '$_POST[noktp]', '$nama_gambar2');");

	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?r=cust'>";
	}
?> 