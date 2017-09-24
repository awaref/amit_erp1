<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';

?>
<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  	<h1>
	  		ERP
	    	<small>Add User</small>
	  	</h1>
	</section>
<!-- Main row -->
		<div class="row">
			<div class="add-order-form">
				<div class="col-md-6 col-md-offset-3">
					<form action="add_user.php" method="POST">
					    <div class="get_user_customer_id">
					    	<div class="row">
					    		<div class="col-md-6">
						    		<div class="form-group">
									    <label for="user-id">User ID:</label>
									    <input type="text" class="form-control" name="user_id" id="user-id" value="<?php echo $_SESSION['id']; ?>">
									</div>
						    	</div>
						    	<div class="col-md-6">
						    		<div class="form-group">
									    <label for="customer-id">Customer ID:</label>
									    <input type="text" class="form-control" name="customer_id" id="customer-id">
						  			</div>
						    	</div>
					    	</div>
					    </div>
						<div class="form-group">
						    <label for="total-amount">Total Amount:</label>
						    <input type="password" class="form-control" name="total_amount" id="total-amount">
					  	</div>
					  	<div class="form-group">
						    <label for="shipping-fees">ٍShipping Fees:</label>
						    <input type="password" class="form-control" name="shipping_fees" id="shipping-fees">
					  	</div>
					  	<div class="form-group">
						    <label for="status">Status:</label>
						    <input type="password" class="form-control" name="status" id="status">
					  	</div>
					  	<div class="form-group">
						  	<label for="notes">Notes:</label>
					  		<textarea class="form-control" rows="5" name="notes" id="notes"></textarea>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row (main row) -->
	</section>
	<!-- /.content -->

	<?php //include 'includes/main_content.php'; ?>
	</div>
	<!-- /.content-wrapper -->
<?php include 'includes/main_footer.php'; ?>