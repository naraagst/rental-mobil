<?php
		mysqli_query($koneksi, "INSERT INTO `jenis_mobil` (`id_jenismobil`, `jenis_mobil`) VALUES (NULL, '$_POST[jenis]')");

		
		echo"<meta http-equiv='refresh' content='1; url=?r=data_jenismobil'>";
	
	?>