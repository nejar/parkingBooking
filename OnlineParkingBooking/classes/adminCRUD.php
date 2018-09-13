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







}

