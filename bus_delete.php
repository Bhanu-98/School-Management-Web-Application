<?php
	include "database.php";
	session_start();
	$s="update student set bus='No' where ID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('Bus_Facilitiles?mes=Bus facility removed','_self');</script>";


?>