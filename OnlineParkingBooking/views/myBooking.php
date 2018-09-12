<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<?php
include_once'../classes/curd.php';
include_once'header.php';
	$curd = new curd();
	if (isset($_SESSION['email'])) {
		
	
	$user_id = $curd->getUserId($_SESSION['email']);
	$userId;
	foreach ($user_id as  $value) {
		$userId = $value['user_id'];
	}
}
	// for booking history
	$result = $curd->getUserBooking($userId);
	$i=1;
	// for today's booking list
		$result2 = $curd->getUserTodaysBooking($userId);
?>
<!-- main starts here -->
<div class="main">
	<div class="mybooking-today">
		<div >
			<h2 class="badge badge-info">Today's Booking</h3>
			<p>click to cancel booking</p>
		</div>
		
		<?php
		foreach ($result2 as  $value) {?>
		
		<span ><a href="../classes/formValue.php?id=<?php echo $value['parkingSlots_id']; ?>" class="booked-cancel" OnClick="return confirm('Are you sure to cancel booking of slot '+<?php echo $value['parkingSlots_id']; ?>);"><?php echo $value['parkingSlots_id']; ?></a></span>
		<?php		}
		?>
	</div>
	
	<div class="show-history">
		<a href="" class="badge badge-dark" id="show">My Booking History</a>
	</div>
	<div class="myBooking-history">
		<table class="table table-hover">
			
			<thead>
				<th>S.N</th>
				<th>Parking Slot no.</th>
				<th>Booking Date</th>
				<th>Vehicle Number</th>
			</thead>
			<?php
			if ($result) {
			foreach ($result as  $value) {
			?>
			<tbody>
				<td><?php echo $i; ?></td>
				<td><?php echo $value['parkingSlot_id'] ?></td>
				<td><?php echo $value['bookingDate'] ?></td>
				<td><?php echo $value['vehicleNo'] ?></td>
				<?php
					$i++;
							}
						}
				?>
			</tbody>
		</table>
		
	</div>
</div>
<!-- main ends here -->
<?php
include_once'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#show').click(function(e){
			e.preventDefault();
			$('.myBooking-history').show(2000);
		})
	});
</script>