<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_products_handlers.php';
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
	    	<small>Add Product</small>
		  </h1>
		  
	</section>
<!-- Main row -->
		<div class="row">
			<div class="add-product-form">
				<div class="col-md-6 col-md-offset-3">
					<?= (isset($_POST['success']))? $_POST['success']:"" ;?>
					<form action="add_products.php" method="POST" class="inline">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Product Name" required value="<?php check_str('name') ?>">
						</div>
						<?php  
					    	if (in_array("name", $error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
		    				Product name cannot be empty
		    			</div>
						<?php 
							}elseif (in_array("Name exists", $error_array)) {
						?>
						<div class="alert alert-danger error-msg" role="alert">
							Product Name already exists
						</div>
						<?php 
							}
						?>
						<div class="form-group">
							<div class="row">
					  	 	 	<div class="col-md-8 col-sm-12">
									<select id="category" class="form-control select2" name="category" required value="<?php check_str('category') ?>">
										<?php include "includes/handlers/category_reload.php";?>
                					</select>
								</div>
					    		<div class="col-md-2 col-sm-12">
									<a href="add_category.php" title="Add Category" style="width:100%" target="_blank" class="btn btn-primary">
										<i class="fa fa-plus"></i>
									</a>
								</div>
								<div class="col-md-2 col-sm-12">
									<a href="#" class="btn btn-primary" title="Refresh Categories" style="width:100%" onclick="reload('category');">
										<i class="fa fa-refresh" ></i>
									</a>
					    		</div>
					   		</div>
						</div>
						<?php  
					    	if (in_array("category", $error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
		    				Category cannot be empty
		    			</div>
						<?php 
							}
						?>
					    <div class="form-group">
							<input type="number" name="price" class="form-control" placeholder="Price" required value="<?php check_str('price') ?>">
						</div>
						<?php  
					    	if (in_array("price", $error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
		    				Price cannot be empty
		    			</div>
						<?php 
							}elseif (in_array("Invalid Price", $error_array)) {
						?>
						<div class="alert alert-danger error-msg" role="alert">
							Please Enter a valid Price
						</div>
						<?php 
							}
						?>
						<div class="form-group">
							<input type="number" name="cost" class="form-control" placeholder="Cost" required value="<?php check_str('cost') ?>">
						</div>
						<?php  
					    	if (in_array("cost", $error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
							Cost cannot be empty
		    			</div>
						<?php 
							}elseif (in_array("Invalid Cost", $error_array)) {
						?>
						<div class="alert alert-danger error-msg" role="alert">
								Please Enter a valid Cost
						</div>
						<?php 
							}
						?>
						<div class="form-group">
							<input type="number" name="quantity" class="form-control" placeholder="Quantity" required value="<?php check_str('quantity') ?>">
						</div>
						<?php  
					    	if (in_array("quantity", $error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
							Quantity cannot be empty
		    			</div>
						<?php 
							}elseif (in_array("Invalid Quantity", $error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
							Please Enter a valid Quantity
		    			</div>
						<?php 
							}
						?>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
									<div class="box-header with-border">
										  <h3 style="font-size:13px;" class="box-title">Expiration date:</h3>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<input type="number" min="1" max="31" name="day" class="form-control" placeholder="Day" required value="<?php check_str('day') ?>">							
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<input type="number" min="1" max="12" name="month" class="form-control" placeholder="Month" required value="<?php check_str('month') ?>">
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<input type="number" min="2017" max="2050" name="year" class="form-control" placeholder="Year" required value="<?php check_str('year') ?>">	
									</div>					
								</div>
								
							</div>
							
						</div>
						<?php  
					    	if ($validation->checkarray(['day','month','year'],$error_array)) {
					    ?>
						<div class="alert alert-danger error-msg" role="alert">
							Please Fill in the Date
		    			</div>
						<?php 
							}
							elseif (in_array("Invalid Date", $error_array)){
						?>
						<div class="alert alert-danger error-msg" role="alert">
							Invalid Date check your input
						</div>
						<?php
							}
						?>
						<div class="form-group">
							<textarea class="form-control" rows="3" name="desc" placeholder="Enter a Product Description"><?php check_str('desc') ?></textarea>
						</div>
						<button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
					</form>
					<br/><br/><br/><br/>
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