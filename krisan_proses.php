<?php
		mysqli_query($koneksi, "INSERT INTO `krisan` (`id_krisan`, `id_user`, `kode_trans`, `krisan`) 
		VALUES (NULL, '$_POST[id]', '$_POST[kode_booking]', '$_POST[kritik_saran]');");

		echo "<script>alert('Kritik dan Saran Anda Berhasil Kami Terima');</script>";
		echo "<script>window.location = '?n=krisan';</script>";
?>