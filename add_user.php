<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_user_handlers.php';
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
					    			<?php  
					    				if (in_array("First name must be between 2 and 25 characters", $error_array)) {
					    			?>
											<div class="alert alert-danger error-msg" role="alert">
		    									First name must be between 2 and 25 chars
		    								</div>
						    		<?php 
						    			}
						    		?>
					    		</div>
					    		<div class="col-md-6">
					    			<div class="form-group">
								        <!-- <label for="input-lastname">Last Name</label> -->
								        <input type="text" name="lname" class="form-control" id="input-lastname" placeholder="Last Name"
										value="<?= (isset($_POST['lname']) && !empty($error_array)? ($_POST['lname']):"" )?>">
					    			</div>
					    			<?php  
					    				if (in_array("Last name must be between 2 and 25 characters", $error_array)) {
					    			?>
											<div class="alert alert-danger error-msg" role="alert">
		    									Last name must be between 2 and 25 chars
		    								</div>
						    		<?php 
						    			}
						    		?>
					    		</div>
					    	</div>
					    </div>
					    <?php  
				    		if (in_array("First name and Last name are required", $error_array)) {
				    	?>
								<div class="alert alert-danger error-msg" role="alert">
									First name and Last name are required
								</div>
						<?php
							}
					    ?>
					    <div class="form-group">
					        <!-- <label for="input-password">Password</label> -->
					        <input type="password" name="password" class="form-control" id="input-password" placeholder="Password">
					    </div>
					    <div class="form-group">
					        <!-- <label for="input-rpassword">Retype Password</label> -->
					        <input type="password" name="conf_password" class="form-control" id="input-rpassword" placeholder="Confirm Password">
					    </div>
					    <?php  
		    				if (in_array("Password fields cannot be empty", $error_array)) {
		    			?>
								<div class="alert alert-danger error-msg" role="alert">
									Password fields cannot be empty
								</div>
			    		<?php 
			    			}
			    			elseif (in_array("Your password don't match, please check it again", $error_array)) {
			    		?>
			    				<div class="alert alert-warning error-msg" role="alert">
									Your password don't match, please check it again
								</div>
			    		<?php 
			    			}
							elseif (in_array("Your password must be between 5 and 30 characters", $error_array)) {
			    		?>
			    				<div class="alert alert-danger error-msg" role="alert">
									Your password must be between 5 and 30 chars
								</div>
						<?php
							}
			    		 ?>
					    <div class="form-group">
					        <!-- <label for="input-email">Email</label> -->
					        <input type="email" name="email" class="form-control" id="input-email" placeholder="Email"
							value="<?= (isset($_POST['email']) && !empty($error_array)? ($_POST['email']):"" )?>">
					    </div>
						<?php  
		    				if (in_array("Email already in use", $error_array)) {
		    			?>
							<div class="alert alert-danger error-msg" role="alert">
									Email already in use
							</div>
						<?php
							}
						?>
					    <div class="form-group">
					        <!-- <label for="input-email">Email</label> -->
					        <input type="email" name="conf-email" class="form-control" id="input-email" placeholder="Confirm Email"
							value="<?= (isset($_POST['conf-email']) && !empty($error_array)? ($_POST['conf-email']):"" )?>">
					    </div>
						<div class="form-group">
					        <!-- <label for="input-phone">Phone</label> -->
					        <input type="text" name="phone" class="form-control" id="input-phone" placeholder="Phone">
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
