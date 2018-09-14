
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



	</div>
	
</div>
<!-- main ends here -->

<!-- </div> -->








<?php
include_once'../views/footer.php';