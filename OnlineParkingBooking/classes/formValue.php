<?php
require_once'dbConfig.php';
require_once'curd.php';

$curd = new curd();

// for Register
if (isset($_POST['register'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phone = $_POST['phone'];

	$checkUser = $curd->checkUser($email,$password);
	//print_r($checkUser);

	//die();

	if (!($checkUser->num_rows>0)) {
		
			//$result = $curd->registerUser($_POST);
			$result = $curd->register($firstName,$lastName,$email,$password,$phone);

			if ($result) {
				echo "Successfully Registered";
				$msg="<h2><font color='green'>Registered successfully.. Please Login</font></h2>";
				header("Location:../index.php?msg=".$msg);
			}else{
				die('error occured in registration');
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