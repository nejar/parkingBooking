
<?php
include_once'../classes/adminCRUD.php';
include_once'adminHeader.php';

$crud = new admincrud();

$result = $crud->bookingHistory();

$i = 1;

?>


<!-- main starts here -->
<div class="main">
	<div class="admin-side-bar">
		<?php 
				include_once'adminSideBar.php';
		?>
	</div>
	<div class="main-content">

		<div class="search">

			<form action="">
				<label for="dateFrom">Date From</label>
				<input type="date" name="dateFrom" id="dateFrom">
				<label for="dateTo">Date To</label>
				<input type="date" name="dateTo" id="dateTo">
				<input type="button" name="search" id="search" class="button" value="search">
			</form>

		</div>

		<div class="search-result">
			<div class="table-wrapper">
	
				
<!-- 				<table class="table table-striped">
					<thead>
						<tr>
							<th>S.N</th>
							<th>Parking Slot no.</th>
							<th>Booking Date</th>
							<th>Vehicle Number</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td id="vehicleNo"></td>
						</tr>
					</tbody>
				</table> -->

			</div>
		</div>

	</div>
	
</div>
<!-- main ends here -->

<!-- </div> -->


<?php
include_once'../views/footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		$('#search').on("click",function(){

			var dateFromAjax = $('#dateFrom').val();
			var dateToAjax = $('#dateTo').val();

			$.ajax({

				url:'../classes/admin_formValue.php',
				method:'POST',
				dataType:'JSON',
				data:{
					dateFrom:dateFromAjax,
					dateTo:dateToAjax
				},

				success:function(response){
					
						for (var i = response.length - 1; i >= 0; i--) {
							 var trHTML = '';
							 trHTML += '<tr><td><strong>' + response[i].user_id+'</strong></td><td><span class="label label-success">'+response[i].bookingDate +'</span></td><td>'+response[i].parkingSlots_id+'</td></tr>';
							  $('#table-wrapper').html(trHTML); 
							console.log(response[i].vehicleNo);
						}
				
				}

			});
		});

	});
	
</script>