<?php
	
	mysqli_query($koneksi, "delete from jenis_mobil where id_jenismobil='$_GET[id]'");

	echo"<meta http-equiv='refresh' content='1; url=?r=data_jenismobil'>";
?>