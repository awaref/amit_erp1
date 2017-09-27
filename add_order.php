<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_order_handlers.php';
include 'includes/handlers/functions.php';
?>
<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  	<h1>
	  		ERP
	    	<small>Add Order</small>
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
					<form action="add_order.php" method="POST" >
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
								    	<label for="total-amount">Customer:</label>
								    	<select name="customer_id" id="" class="form-control">
								    		<option value="select">Select</option>
								    		<?php  
								    			$result = $crud->getAllData('customers');
								    			foreach ($result as $customer){
													$customer_id = $customer['id'];
													$customer_name = $customer['firstname']." ".$customer['lastname'];
								    		?>
												<option value="<?= $customer_id; ?>"><?= $customer_id."-".$customer_name; ?></option>
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
									    <label for="customer-id">Product:</label>
									    <input type="text" name="product" id="product" onkeyup="typing_product(this.value)" class="form-control" value="<?php check_str('product') ?>" required>
			  						</div>
			  						<?php  
					  					if (in_array('Product cannot be empty', $msgs_array)) {
					  				?>
									<div class="alert alert-danger error-msg" role="alert">
										Product cannot be empty
									</div>
									<?php
										} elseif (in_array('Product field must be between 2 and 50 characters', $msgs_array)) {
									?>

									<div class="alert alert-danger error-msg" role="alert">
										Product field must be between 2 and 50 characters
									</div>
									<?php
										} elseif (in_array("product: Letters and white spaces are allowed", $msgs_array)) {
									?>
									<div class="alert alert-danger error-msg" role="alert">
										Only Letters and white spaces are allowed
									</div>
									<?php
										} elseif (in_array("Product doesnot exist", $msgs_array)) {
									?>
									<div class="alert alert-danger error-msg" role="alert">
										Product doesn't exist
									</div>
									<?php
										}
									?>

						    	</div>
					    	</div>
					    </div>

			  			<div class="form-group">
					    	<label for="quantity">Quantity:</label>
					    	<input type="number" class="form-control" name="quantity" id="quantity"  value="<?php check_str('quantity') ?>" required>
					  	</div>
						  	<?php  
						  		if (in_array("Quantity cannot be empty", $msgs_array)) {
						  	?>

						  	<div class="alert alert-danger error-msg" role="alert">
								Quantity cannot be empty
							</div>
							<?php
								} elseif (in_array("Quantity must be number", $msgs_array)) {
							?>

							<div class="alert alert-danger error-msg" role="alert">
								Quantity must be number
							</div>
							<?php
								}
						  	?>
			  			
					  	<div class="form-group">
						    <label for="shipping-fees">ٍShipping Fees:</label>
						    <input type="text" class="form-control" name="shipping_fees" id="shipping-fees"  value="<?php check_str('shipping_fees') ?>" required>
					  	</div>
					  	<?php  
					  		if (in_array("Shipping fees cannot be empty", $msgs_array)) {
					  	?>
					  	<div class="alert alert-danger error-msg" role="alert">
							Shipping fees cannot be empty
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
					  		<textarea class="form-control" rows="5" name="notes" id="notes"  value="<?php check_str('notes') ?>"></textarea>
						</div>
						<?php  
							if (in_array("Don't exceed 100 characters", $msgs_array)) {
						?>
						<div class="alert alert-warning error-msg" role="alert">
							Don't exceed 100 characters
		    			</div>
						<?php
							}
						?>
						<input type = "hidden" id="pr_confirm" name="pr_confirm">
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