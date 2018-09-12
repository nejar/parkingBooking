<?php
include_once'../classes/curd.php';
include_once'header.php';
//include_once'main.php';


	

 

	$curd = new curd();
	$result = $curd->getParkingSlots();
	$status = $curd->resetSlots();
// $bike = array();
// $car = array();
// $booked = array();
// 	foreach ($result as  $value) {
// 		if ($value['vehicleType_id']==1) {
// 			$bike[] = $value['parkingSlots_id'];
// 		}else{
// 			$car[] = $value['parkingSlots_id'];
// 		}

// 		if ($value['status']=="booked") {
			
// 		}
// 	}


	
?>

<!-- main starts here -->

			<div class="main">

				<div class="slots-wrapper">

					<div class="bike-slots">
						<h2 class="slots">Bike Slots</h2>
					<?php
					foreach ($result as $value) { 
						if ($value['vehicleType_id']==1) {
							if ($value['status']=="booked") { ?>
								<span ><a href="bookForm.php?id=<?php echo $value['parkingSlots_id']; ?>" class="booked"><?php echo $value['parkingSlots_id']; ?></a></span>
								
						<?php	}

						else{ ?>

							<span ><a href="bookForm.php?id=<?php echo $value['parkingSlots_id']; ?>" class="button"><?php echo $value['parkingSlots_id']; ?></a></span>

						<?php  }
						}
						?>
							
				 <?php
				}?>

					</div>

					<div class="car-slots">
						<h2 class="slots">Car Slots</h2>
						<?php 
							foreach ($result as $value) { 
								if ($value['vehicleType_id']==2) {
									if ($value['status']=="booked") { ?>

								<span ><a href="bookForm.php?id=<?php echo $value['parkingSlots_id']; ?>" class="booked"><?php echo $value['parkingSlots_id']; ?></a></span>
										
								<?php	}
								else{  ?>

									<span ><a href="bookForm.php?id=<?php echo $value['parkingSlots_id']; ?>" class="button"><?php echo $value['parkingSlots_id']; ?></a></span>
							<?php	}
						}

								?>
								
								
								
						<?php	}
						 ?>
						
					</div>

					
				</div>


				
			</div>
			<!-- main ends here -->
<?php

include_once'footer.php';
?>
			
