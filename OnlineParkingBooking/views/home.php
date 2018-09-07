<?php
include_once'../classes/curd.php';
include_once'header.php';
//include_once'main.php';

	$curd = new curd();
	$result = $curd->getParkingSlots();
$bike = array();
$car = array();
	foreach ($result as  $value) {
		if ($value['vehicleType_id']==1) {
			$bike[] = $value['parkingSlots_id'];
		}else{
			$car[] = $value['parkingSlots_id'];
		}
	}


	
?>

<!-- main starts here -->

			<div class="main">

				<div class="slots-wrapper">

					<div class="bike-slots">
						<h2 class="slots">Bike Slots</h2>
					<?php
					foreach ($bike as $b) { 
						?>
							<span ><a href="bookForm.php" class="button"><?php echo $b; ?></a></span>
				 <?php
				}?>

					</div>

					<div class="car-slots">
						<h2 class="slots">Car Slots</h2>
						<?php 
							foreach ($car as $c) { ?>
								<span ><a href="bookForm.php" class="button"><?php echo $c; ?></a></span>
								
						<?php	}
						 ?>
						
					</div>

					
				</div>


				
			</div>
			<!-- main ends here -->
<?php

include_once'footer.php';
?>
			
