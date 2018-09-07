<?php
require_once'dbConfig.php';

/**
 * 
 */
class curd extends dbConfig
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function checkUser($email,$password){
		//print_r($email);
		$sql = "select * from `user` where `email` = '".$email."' AND `password`='".$password."' ";
		//print_r($email);
		$result = $this->conn->query($sql);

		//$_SESSION['email'] = $email;
		//print_r($result);
		//die();

		return $result;


	}
	// checking email usng ajax
	function checkEmailAjax($email){
		$sql = "select * from `user` where `email` ='".$email."' ";
		$result = $this->conn->query($sql);

		if ($result->num_rows>0) {
			return true;
		}else{
			return false;
		}
	}

	// checking password usng ajax
	function checkPasswordAjax($password){
		$sql = "select * from `user` where `password` ='".$password."' ";
		$result = $this->conn->query($sql);

		if ($result->num_rows >0) {
			return true;
		}else{
			return false;
		}
	}


	function register($firstName,$lastName,$email,$password,$phone){
	// $stmt = $this->conn->prepare("INSERT INTO `user` (`firstName`, `lastName`, `email`, `password`, `licenseNo`, `role_id`, `blackListPoint`, `emailConfirmed`, `verificationCode`) VALUES (?, ?, ?,?,?,?,?,?,?)");

	// $stmt->bind_param("sssssiiis", $firstname, $lastname, $email,$password,'','1','','','');
	// $result = $stmt->execute();
	// // print_r($result);
	// // die();

	// 	if ($result == false) {
	// 		return false;
	// 	}
	// 	else{
	// 		return true;
	// 	}

		$sql = "INSERT INTO `user` (`user_id`, `firstName`, `lastName`, `email`, `password`, `licenseNo`, `role_id`, `blackListPoint`, `emailConfirmed`, `verificationCode`) VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '', '', '', '', '')";
		$result = $this->conn->query($sql);

		if ($result == false) {
			return false;
		}else{
			return true;
		}

	}


	function registerUser($values){

		$sql="";
		$keys="";
		$data="";
		foreach ($values as $key => $value) {

			if ($key != "register" && $key != "confirmPassword") {
				$keys .= '`'.$key.'`, ';
				$data .= '"'.$value.'", ';

				//$result = $this->conn->query("Insert Into `user`('$key') VALUES ('$value') ");
			}
			
		} 
		// print_r($keys);
		// print_r($data);
		// $keys = substr($keys,0,-1);
		// print_r($keys);
		$sql = "Insert Into `user`(" .substr($keys,0,-2).") VALUES (".substr($data,0,-2).") ";
		$result = $this->conn->query($sql);
		// echo $sql;


		if ($result == false) {
			return false;
		}
		else{
			return $result;
		}
	}

	function getParkingSlots(){
		$sql = "Select * from parking_slots ";
		$result = $this->conn->query($sql);

		if ($result->num_rows>0) {
			return $result;
		}else {
			return false;
		}
	}







}