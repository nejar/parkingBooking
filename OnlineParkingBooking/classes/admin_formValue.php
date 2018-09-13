<?php
include_once'../classes/adminCURD.php';
$curd = new adminCURD();


if (isset($_GET['id'])) {
	
	$parkingSlot_id = $_GET['id'];

	$result = $curd->updateParkingSlot($parkingSlot_id);

	if ($result) {
		header("Location:../admin/home.php");
	}
	
}