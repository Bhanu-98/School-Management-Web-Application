<?php
	include "database.php";
	session_start();
	$s="update st_leave_requests set status='Accepted' where Date_of_Request='{$_GET["id"]}'";
	$db->query($s);
	$sa="delete from st_leaves where Date_of_Request='{$_GET["id"]}'";
	$db->query($sa);
	echo "<script>window.open('view_st_leaves?mes=Request_Accepted','_self');</script>";


?>