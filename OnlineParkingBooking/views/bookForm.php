<?php
include_once'header.php';
?>
<div class="booking">
	<div class="form-wrapper">
		<form action="">
			<table border="1">
				<tr>
					<th colspan="2"><label for="bookingDate">Booking Date</label></th>
					<td><input type="Date" name="bookingDate"></td>
				</tr>
				<tr>
					<th colspan="2"><label for="vehicleNo">Vehicle Number</label></th>
					<td><input type="text" name="vehicleNo" placeholder="Enter Vehicle No."></td>
				</tr>
			</table>
		</form>
	</div>
</div>


<?php
include_once'footer.php';
?>