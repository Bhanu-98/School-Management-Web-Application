<?php
	include "database.php";
	session_start();
	$s="update leave_requests set status='Accepted' where Date_of_Request='{$_GET["id"]}'";
	$db->query($s);
	$sa="delete from leaves where Date_of_Request='{$_GET["id"]}'";
	$db->query($sa);
	echo "<script>window.open('view_leaves?mes=Request_Accepted','_self');</script>";


?>