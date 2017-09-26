<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/add_user_handlers.php';
include 'includes/handlers/functions.php';
?>
<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>
	
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  	<h1>
	  		ERP <?php echo $_SESSION['id'] ?>
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
								        <input type="text" name="fname" class="form-control"  placeholder="First Name" 
										value="<?php check_str('fname') ?>" required>
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
								        <input type="text" name="lname" class="form-control" placeholder="Last Name"
										value="<?php check_str('lname') ?>" required>
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
					        <!-- <label for="input-email">Email</label> -->
					        <input type="text" name="phone" class="form-control" placeholder="Phone Number"
							value="<?php check_str('phone') ?>" required>
					    </div>
					    <div class="form-group">
					        <!-- <label for="input-email">Email</label> -->
					        <input type="email" name="email" class="form-control" placeholder="Email"
							value="<?php check_str('email') ?>" required>
					    </div>
					    <?php  
		    				if (in_array("Email field cannot be empty", $error_array)) {
		    			?>
							<div class="alert alert-danger error-msg" role="alert">
								Email field cannot be empty
							</div>
						<?php
							}
							elseif(in_array("Email already exists", $error_array)){
						?>
							<div class="alert alert-danger error-msg" role="alert">
								Email already exists
							</div>
						<?php
							}
							elseif(in_array("Invalid format!", $error_array)){
						?>
							<div class="alert alert-danger error-msg" role="alert">
								Invalid format!
							</div>
						<?php
							}
						?>
                        <div class="form-group">
					        <!-- <label for="input-email">Email</label> -->
					        <input type="text" name="address" class="form-control" placeholder="Address"
							value="<?php check_str('address') ?>" required>
					    </div>
                        
                        <div class="form-group">
                            <select class="form-control select2" name="city" required >
                               <option value="">Select a City</option>
                            </select>
					    </div>
                        <div class="form-group">
                            <select class="form-control select2" name="gov" required >
                               <option value="">Select a Country</option>
                            </select>
					    </div>
					    <button type="submit" name="add_customer" class="btn btn-primary">Add user</button>
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
