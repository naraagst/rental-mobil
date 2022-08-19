<?php
session_start();

if(!empty($_SESSION['username']) and !empty($_SESSION['password'])){
include("../lib/koneksi.php");
define("INDEX",true);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Admin Rental Mobil BDJ</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/sb-admin.css" rel="stylesheet">

	<style> 
	@page {size: landscape;}
	</style>
	
  </head>

  <body id="page-top">

		
		<?php include("menu/isi.php") ?>
		<?php include("menu/footer.php") ?>


  </body>

</html>

<?php
}else{
	echo"<meta http-equiv='refresh' content='0; url=index.php'>";
}?>