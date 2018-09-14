<?php
require_once'dbConfig.php';

/**
 * 
 */
class adminCRUD extends dbConfig
{
	
	function __construct()
	{
		parent::__construct();
	}


	function updateParkingSlot($parkingSlot_id){
		$sql = "UPDATE `parking_slots` set `status` = 'active' where `parkingSlots_id`='".$parkingSlot_id."' ";

		$result = $this->conn->query($sql);

		return $result;
	}

	function bookingHistory(){
		$sql = "SELECT * from `booking_info` ";
		$result = $this->conn->query($sql);

		return $result;
	}

	// booking search by date

	function searchData($dateFrom,$dateTo){
		$sql = "SELECT * from `booking_info` where `bookingDate` between '".$dateFrom."' AND '".$dateTo."' ";
		$result = $this->conn->query($sql);

		// print_r($sql);
		return $result;
	}







}

