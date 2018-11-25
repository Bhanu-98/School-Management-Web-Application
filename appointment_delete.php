<?php
	include "database.php";
	session_start();
	$s="delete from appointments where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('view_appointment.php?mes=Appointment deleted...','_self');</script>";


?>