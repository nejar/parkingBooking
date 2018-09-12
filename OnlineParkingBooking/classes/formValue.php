<?php
require_once'dbConfig.php';
require_once'curd.php';

$curd = new curd();

// for Register
if (isset($_POST['register'])) {
	$role = $_POST['role'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phone = $_POST['phone'];
	$licenseNo = $_POST['licenseNo'];

	$checkUser = $curd->checkUser($email,$password);
	//print_r($checkUser);

	//die();

	if (!($checkUser->num_rows>0)) {
		
			//$result = $curd->registerUser($_POST);
			$result = $curd->register($firstName,$lastName,$email,$password,$licenseNo,$phone,$role);
			//$result = $curd->RegisterFrom_sp($firstName,$lastName,$email,$password,$licenseNo,$phone,$role);

			if ($result) {
				echo "Successfully Registered";
				$msg="<h2><font color='green'>Registered successfully.. Please Login</font></h2>";
				header("Location:../index.php?msg=".$msg);
			}else{
				die($result);
			}

	}else{
		$msg="<h2><font color='green'>Email already exits..</font></h2>";
		header("Location:../registration.php?msg=".$msg);
	}

}


// for Login

if (isset($_POST['login'])) {
	
	$result = $curd->checkUser($_POST['email'],$_POST['password']);
//print_r($result);
	if (mysqli_num_rows($result)<1) {
		$msg = "Incorrect Email or password";
		header("Location:../index.php?msg=".$msg);
		
	}else{
		session_start();
		$_SESSION['email']=$_POST['email'];
		header("Location:../views/home.php");
	}


}

// for booking

if (isset($_POST['book'])) {
	$date = $_POST['bookingDate'];
	$vehicleNo = $_POST['vehicleNo'];
	$parkingSlot_id = $_POST['parkingSlot_id'];
	$user_id = $_POST['user_id'];

	$result = $curd->insertBooking($date,$vehicleNo,$parkingSlot_id,$user_id);
	// print_r($result);

	header("Location:../views/home.php");

	
}

// user Update

if (isset($_POST['update'])) {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$licenseNo = $_POST['licenseNo'];
	$email = $_POST['email'];


	$result = $curd->updateUser($firstName,$lastName,$licenseNo,$email);

	if ($result) {
		header("Location:../views/myProfile.php");
	}
}

	
	// For updating password

if (isset($_POST['updatePassword'])) {
	$newPassword = $_POST['newPassword'];
	$email = $_POST['email'];

	$msg = "Error in updating password";
	$successMsg = "Successfully updated password";
	$result = $curd->updatePassword($email,$newPassword);

	if ($result) {
		header("Location:../views/myProfile.php?msg=".$successMsg);
	}else{
		header("Location:../views/myProfile.php?msg=".$msg);
	}
}

if (isset($_GET['id'])) {
	$parkingSlot_id = $_GET['id'];

	$result = $curd->updateParkingSlot($parkingSlot_id);


	

	if ($result) {
		header("Location:../views/myBooking.php");
	}
	else{
		die('error');
	}
	
	

}