<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_products_handlers.php';
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
			<div class="add-user-form">
				<div class="col-md-6 col-md-offset-3">
					<form action="add_proucts.php" method="POST">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Product Name" required>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-4 col-md-offset-1">
									<div class="box-header with-border">
										  <h3 class="box-title">Expiration date : </h3>
									</div>
								</div>
								<div class="col-md-2">
									<input type="numbers" name="day" class="form-control" placeholder="Day" required>							
								</div>
								<div class="col-md-2">
									<input type="text" name="day" class="form-control" placeholder="Month" required>							
								</div>
								<div class="col-md-2">
									<input type="text" name="day" class="form-control" placeholder="Year" required>							
								</div>
							</div>
						</div>
						<div class="form-group">
                			<select class="form-control select2">
                  				<option value="">Select a category</option>
                  				<option value="1">Alaska</option>
                			</select>
              			</div>					    
					    
					    <button type="submit" name="add_product" class="btn btn-primary">Add user</button>
					    
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