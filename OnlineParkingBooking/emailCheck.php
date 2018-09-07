<?php

require_once'classes/curd.php';

$curd = new curd();

// For email check
if (isset($_POST['email'])) {
	
	$email = $_POST['email'];

	$result = $curd->checkEmailAjax($email);
	$data = array();
	if ($result) {
		$data['status']=true;
		$data['msg']="<font color='lightgreen'>Email available</font>";

		// exit("<font color='blue'>Email not available</font>");
	}else{
		$data['status']=false;
		$data['msg']="<font color='skyblue'>Email not available</font>";
		//exit("<font color='green'>Email available</font>");
	}
	echo json_encode($data);  // changing array ($data is array) to json and sending
	exit();


}


//for password check

if (isset($_POST['password'])) {
	
	$password = $_POST['password'];

	$result = $curd->checkPasswordAjax($password);
	$data = array();

	if ($result) {
		$data['status']=true;
		$data['msg']="<font color='blue'>Password Matched</font>";
	}else{
		$data['status']=false;
		$data['msg']="<font color='skyblue'>Password do not Match</font>";
	}

	echo json_encode($data);
	exit();

}

	// for email check in registration

	if (isset($_POST['emailRegister'])) {

		$email = $_POST['emailRegister'];
		$result = $curd->checkEmailAjax($email);

		$data = array();

		if ($result) {
			$data['status']=false;
			$data['msg']=$data['msg']="<font color='skyblue'>Email already taken</font>";
		}else{
			$data['status'] = true;
			$data['msg']="<font color='lightgreen'>Email available</font>";

		}

		echo json_encode($data);
		exit();
	}


