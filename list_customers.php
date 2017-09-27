<?php
include 'includes/header.php';
include 'includes/classes/config/Crud.php';
//include 'includes/classes/config/add_order_handlers.php'; ?>

<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  	<h1>
		  		ERP
		    	<small>List Customers</small>
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
			              			<h3 class="box-title">Customers Data</h3>
			            		</div>
			            		<!-- /.box-header -->
			            		<div class="box-body">
				              		<table id="example1" class="table table-bordered table-striped">
				                		<thead>
				                			<tr>
								                <th>ID</th>
								                <th>First Name</th>
								                <th>Last Name</th>
								                <th>Phone</th>
								                <th>Email</th>
								                <th>Address</th>
								                <th>City</th>
								                <th>Country</th>
				                			</tr>
				                		</thead>
				                		<tbody>
				                		<?php
				                			$crud = new Crud();
			            					$result = $crud->getAllData('customers');
				                			foreach ($result as $order) {
					                  			$customer_id = $order['id'];
					                  			$firstname = $order['firstname'];
					                  			$lastname = $order['lastname'];
					                  			$phone = $order['phone'];
					                  			$email = $order['email'];
					                  			$address = $order['address'];
					                  			$city = $order['city'];
					                  			$country = $order['gov'];
					                  		?>

				                			<tr>
							                  	<td><?=  $customer_id; ?></td>
							                  	<td><?=  $firstname; ?></td>
							                  	<td><?=  $lastname; ?></td>
							                  	<td><?=  $phone; ?></td>
							                  	<td><?=  $email; ?></td>
							                  	<td><?=  $address; ?></td>
							                  	<td><?=  $city; ?></td>
							                  	<td><?=  $country; ?></td>
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
