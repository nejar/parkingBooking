<?php
include_once'../classes/adminCRUD.php';
$crud = new adminCRUD();


if (isset($_GET['id'])) {
	
	$parkingSlot_id = $_GET['id'];

	$result = $crud->updateParkingSlot($parkingSlot_id);

	if ($result) {
		header("Location:../admin/adminHome.php");
	}
	
}

if (isset($_POST['dateFrom']) && isset($_POST['dateTo'])) {
	$dateFrom = $_POST['dateFrom'];
	$dateTo = $_POST['dateTo'];
	
	$result = $crud->searchData($dateFrom,$dateTo);

	// $data = array();
	// if ($result->num_rows>0) {
	// 	$data['status'] = true;
	// }else{
	// 	$data['status'] = false;
	// }
	$data = array();
	foreach ($result as $value) {
		$data[] =  $value;
	}
	//print_r($data);
	echo json_encode($data);
	exit();
}