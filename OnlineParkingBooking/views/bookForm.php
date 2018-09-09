<?php
include_once'header.php';
?>
<div class="booking">
<!-- 	<div class="form-wrapper">
		<form action="">
			<table border="1">
				<tr class="gap">
					<th colspan="2"><label for="bookingDate">Booking Date</label></th>
					<td><input type="Date" name="bookingDate"></td>
				</tr>
				<tr class="gap">
					<th colspan="2"><label for="vehicleNo">Vehicle Number</label></th>
					<td><input type="text" name="vehicleNo" placeholder="Enter Vehicle No."></td>
				</tr>
				<tr class="gap">
					<th colspan="2"></th>
					<td><input type="submit" class="button" name="submit"></td>
				</tr>
			</table>
		</form>
	</div> -->

<form action="doit" id="doit" method="post">
    <label class="gap">
        Booking Date
        <input type="Date" name="bookingDate">
    </label>

    <label>
        Vehicle Number
        <input type="text" name="vehicleNo" placeholder="Enter Vehicle No." />
    </label>
    <input type="submit" class="button" name="submit">
</form>

</div>


<?php
include_once'footer.php';
?>