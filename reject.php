<?php
	include "database.php";
	session_start();
	$s="update leave_requests set status='Rejected' where Date_of_Request='{$_GET["id"]}'";
	$db->query($s);
	$sa="delete from leaves where Date_of_Request='{$_GET["id"]}'";
	$db->query($sa);
	echo "<script>window.open('view_leaves?mes=Request_rejected','_self');</script>";


?>