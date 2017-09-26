<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_order_handlers.php';
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
	<!-- Main content -->
	<section class="content">
	<!-- Main row -->
		<div class="row">
			<div class="add-order-form">
				<div class="col-md-6 col-md-offset-3">
				<?php  
					if (in_array("Order added successfully", $msgs_array)) {
				?>
					<div class="alert alert-success error-msg" role="alert">
						Order added successfully
					</div>
				<?php
					}
				?>
					<form action="add_order.php" method="POST">
					    <div class="get_user_customer_id">
					    	<div class="row">
					    		<div class="col-md-6">
						    		<div class="form-group">
									    <label for="user-id">User ID:</label>
									    <input type="text" class="form-control" name="user_id" id="user-id" value="<?php echo $user_id; ?>" readonly>
									</div>
						    	</div>
						    	<div class="col-md-6">
						    		
						  			<div class="form-group">
								    	<label for="total-amount">Customer id:</label>
								    	<select name="customer_id" id="" class="form-control">
								    		<option value="select">Select</option>
								    		<?php  
								    			$result = $crud->getAllData('customers');
								    			foreach ($result as $customer){
								    				$customer_id = $customer['id'];
								    		?>
												<option value="<?= $customer_id; ?>"><?= $customer_id; ?></option>
								    		<?php
								    			}

								    		?>
								    		
								    	</select>
								    	<?php  
								    		if (in_array("Please select customer id", $msgs_array)) {
								    	?>
										<div class="alert alert-danger error-msg" role="alert">
											Please select customer id
										</div>
								    	<?php
								    		}
								    	?>
					  				</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="get_user_customer_id">
					    	<div class="row">
					    		<div class="col-md-12">
						    		<div class="form-group">
									    <label for="customer-id">Products:</label>
									    <input type="text" name="product" class="form-control" required>
			  						</div>
			  						<?php  
					  					if (in_array('This field cannot be empty', $msgs_array)) {
					  				?>
									<div class="alert alert-danger error-msg" role="alert">
										This field cannot be empty
									</div>
									<?php
										} elseif (in_array('Product field must be between 2 and 50 characters', $msgs_array)) {
									?>

									<div class="alert alert-danger error-msg" role="alert">
										Product field must be between 2 and 50 characters
									</div>
									<?php
										} elseif (in_array("Letters and white spaces are allowed", $msgs_array)) {
									?>
									<div class="alert alert-danger error-msg" role="alert">
										Letters and white spaces are allowed
									</div>
									<?php
										}
									?>

						    	</div>
					    	</div>
					    </div>

			  			<div class="form-group">
					    	<label for="total-amount">Total Amount:</label>
					    	<input type="text" class="form-control" name="total_amount" id="total-amount" required>
					  	</div>
						  	<?php  
						  		if (in_array("This field cannot be empty", $msgs_array)) {
						  	?>

						  	<div class="alert alert-danger error-msg" role="alert">
								This field cannot be empty
							</div>
							<?php
								} elseif (in_array("Total amount must be number", $msgs_array)) {
							?>

							<div class="alert alert-danger error-msg" role="alert">
								Total amount must be number
							</div>
							<?php
								}
						  	?>
			  			
					  	<div class="form-group">
						    <label for="shipping-fees">ٍShipping Fees:</label>
						    <input type="text" class="form-control" name="shipping_fees" id="shipping-fees" required>
					  	</div>
					  	<?php  
					  		if (in_array("This field cannot be empty", $msgs_array)) {
					  	?>
					  	<div class="alert alert-danger error-msg" role="alert">
							This field cannot be empty
		    			</div>
						<?php
							} elseif (in_array("Shipping fees must be number", $msgs_array)) {
						?>
						<div class="alert alert-danger error-msg" role="alert">
							Shipping fees must be number
		    			</div>
						<?php
							}
					  	?>

					  	<div class="form-group">
						  	<label for="notes">Notes (Optional):</label>
					  		<textarea class="form-control" rows="5" name="notes" id="notes"></textarea>
						</div>
						<?php  
							if (in_array("Don't exceeds 100 characters", $msgs_array)) {
						?>
						<div class="alert alert-warning error-msg" role="alert">
							Don't exceeds 100 characters
		    			</div>
						<?php
							}
						?>
						<button type="submit" name="add_order" class="btn btn-primary">Add Order</button>
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