<?php
	if(isset($_GET['r'])) $s="menu2";
	else $s="menu";
	
	if( $s == "menu" )		include("menu.php");
	elseif( $s == "menu2" )	include("menu2.php");
?>