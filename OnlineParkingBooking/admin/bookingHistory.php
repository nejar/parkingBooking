<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<?php
include_once'../classes/adminCRUD.php';
include_once'adminHeader.php';

$crud = new admincrud();

$result = $crud->bookingHistory();

$i = 1;

?>


<div class="main">
	
	<div class="info-wrapper">
			
		 <table class="table table-striped">
			<thead>
				<tr>
					<th>S.N</th>
					<th>Parking Slot no.</th>
					<th>Booking Date</th>
					<th>Vehicle Number</th>
				</tr>
			</thead>
				<?php
					if ($result->num_rows>0) { ?>
			<tbody>
				<?php
					foreach ($result as  $value) {  ?>
						

					 	

				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $value['parkingSlot_id'] ?></td>
					<td><?php echo $value['bookingDate'] ?></td>
					<td><?php echo $value['vehicleNo'] ?></td>
				</tr>

				<?php	
				$i++; } 

				?>
			</tbody>
				<?php	}
				?> 

		</table>

	</div>

</div>








<?php
include_once'../views/footer.php';