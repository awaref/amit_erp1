<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php'; ?>

<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  	<h1>
		  		ERP
		    	<small>List Users</small>
		  	</h1>
		</section>
		<!-- Main content -->
		<section class="content">
			<!-- Main row -->
			<div class="row">
				<!-- Main content -->
    			<section class="content">
      				<div class="row">
			        	<div class="col-xs-12">
			          		<div class="box">
			            		<div class="box-header">
			              			<h3 class="box-title">Data Table With Full Features</h3>
			            		</div>

			            		<?php 

			            			$crud = new Crud();
			            			$result = $crud->getAllData('users');

			            		 ?>

			            		<!-- /.box-header -->
			            		<div class="box-body">
				              		<table id="example1" class="table table-bordered table-striped">
				                		<thead>
				                			<tr>
								                <th>ID</th>
								                <th>First Name</th>
								                <th>Last Name</th>
								                <th>Username</th>
								                <th>Email</th>
								                <th>Created_at</th>
				                			</tr>
				                		</thead>
				                		<tbody>
				                		<?php 
				                			foreach ($result as $user) {
					                  			$user_id = $user['id'];
					                  			$user_username = $user['username'];
					                  			$user_firstname = $user['firstname'];
					                  			$user_lastname = $user['lastname'];
					                  			$user_email = $user['email'];
					                  			$user_created_at = $user['created_at'];
					                  		?>

				                			<tr>
							                  	<td><?=  $user_id; ?></td>
							                  	<td><?=  $user_firstname; ?></td>
							                  	<td><?=  $user_lastname; ?></td>
							                  	<td><?=  $user_username; ?></td>
							                  	<td><?=  $user_email; ?></td>
							                  	<td><?=  $user_created_at; ?></td>
							                </tr>
										<?php
							            	}      	 
							            ?>
							                      		
				                		</tbody>
				              		</table>
			            		</div>
			            		<!-- /.box-body -->
			          		</div>
			          		<!-- /.box -->
						</div>
						<!-- /.row (main row) -->
					</div>
				</section>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
<?php include 'includes/main_footer.php'; ?>
