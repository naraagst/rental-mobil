<?php

		mysqli_query($koneksi, "UPDATE jenis_mobil SET 
				jenis_mobil		= '$_POST[jenis]'
				WHERE id_jenismobil='$_GET[id]'");
	echo"<meta http-equiv='refresh' content='1; url=?r=data_jenismobil'>";
?>