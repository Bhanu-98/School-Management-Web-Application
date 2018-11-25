<?php
	include "database.php";
	session_start();
	$s="update st_leave_requests set status='Rejected' where Date_of_Request='{$_GET["id"]}'";
	$db->query($s);
	$sa="delete from st_leaves where Date_of_Request='{$_GET["id"]}'";
	$db->query($sa);
	echo "<script>window.open('view_st_leaves?mes=Request_Rejected','_self');</script>";


?>