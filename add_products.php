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
			<div class="add-user-form">
				<div class="col-md-6 col-md-offset-3">
					<form action="add_user.php" method="POST">
					<div class="username">
					    	<div class="row">
					    		<div class="col-md-6">
					    			<div class="form-group">
								        <!-- <label for="input-firstname">First Name</label> -->
								        <input type="text" name="fname" class="form-control" id="input-firstname" placeholder="First Name" 
										value="<?= (isset($_POST['fname']) && !empty($error_array)? ($_POST['fname']):"" )?>">
					    			</div>
					    		</div>
					    		<div class="col-md-6">
					    			<div class="form-group">
								        <!-- <label for="input-lastname">Last Name</label> -->
								        <input type="text" name="lname" class="form-control" id="input-lastname" placeholder="Last Name"
										value="<?= (isset($_POST['lname']) && !empty($error_array)? ($_POST['lname']):"" )?>">
					    			</div>
					    			
					    		</div>
					    	</div>
					    </div>
					    <div class="form-group">
					        <!-- <label for="input-password">Password</label> -->
					        <input type="password" name="password" class="form-control" id="input-password" placeholder="Password">
					    </div>
					    <div class="form-group">
					        <!-- <label for="input-rpassword">Retype Password</label> -->
					        <input type="password" name="conf_password" class="form-control" id="input-rpassword" placeholder="Confirm Password">
					    </div>
					    <div class="form-group">
					        <!-- <label for="input-email">Email</label> -->
					        <input type="email" name="email" class="form-control" id="input-email" placeholder="Email"
							value="<?= (isset($_POST['email']) && !empty($error_array)? ($_POST['email']):"" )?>">
					    </div>
					    <div class="form-group">
					        <!-- <label for="input-email">Email</label> -->
					        <input type="email" name="conf-email" class="form-control" id="input-email" placeholder="Confirm Email"
							value="<?= (isset($_POST['conf-email']) && !empty($error_array)? ($_POST['conf-email']):"" )?>">
					    </div>
					    
					    <button type="submit" name="add_user" class="btn btn-primary">Add user</button>
					    
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