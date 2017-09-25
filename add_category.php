<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_category_handlers.php';
?>
<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>
	
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  	<h1>
	  		ERP
	    	<small>Add Product Category</small>
	  	</h1>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<div class="add-category-form">
				<div class="col-md-6 col-md-offset-3">

					<form action="add_category.php" method="POST">
					    <div class="username">
					    	<div class="row">
					    		<div class="col-md-12">
					    			<div class="form-group">
								        <!-- <label for="input">-->
								        <input type="text" name="cname" class="form-control" id="category_name" placeholder="Name" >
									</div>
									<div class="form-group">
								        <!-- <label for="input">-->
										<input type="text" name="cdetails" class="form-control" id="category_details" placeholder="Details">
									</div>
									<div class="form-group">
								        <!-- <label for="input">-->
										<button type="submit" name="add_category" class="btn btn-primary">Add</button>
					    			</div>
					    			<?php // var_dump($_POST); ?>
					    		</div>
					    		
					    		
					    	</div>
					    </div>
					   <?php// var_dump($_POST[$cname]); ?>
					   
					    </div>
					    
					    		
				    </form>
				   
					    
					   
			</div>
		</div>
		<!-- /.row (main row) -->
	</section>
	<!-- /.content -->

	<?php //include 'includes/main_content.php'; ?>
	</div>
	<!-- /.content-wrapper -->
<?php include 'includes/main_footer.php'; ?>
