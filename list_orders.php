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
		    	<small>List Orders</small>
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
			            		<!-- /.box-header -->
			            		<div class="box-body">
				              		<table id="example1" class="table table-bordered table-striped">
				                		<thead>
				                			<tr>
								                <th>ID</th>
								                <th>User_ID</th>
								                <th>Customer_ID</th>
								                <th>Product</th>
								                <th>Total_Amount</th>
								                <th>Shipping_Fees</th>
								                <th>Notes</th>
								                <th>Created_At</th>
				                			</tr>
				                		</thead>
				                		<tbody>
				                		<?php
				                			$crud = new Crud();
			            					$result = $crud->getAllData('orders');
				                			foreach ($result as $order) {
					                  			$order_id = $order['id'];
					                  			$user_id = $order['user_id'];
					                  			$customer_id = $order['customer_id'];
					                  			$product = $order['product'];
					                  			$total_amount = $order['total_amount'];
					                  			$shipping_fees = $order['shipping_fees'];
					                  			$notes = $order['notes'];
					                  			$created_at = $order['created_at'];
					                  		?>

				                			<tr>
							                  	<td><?=  $order_id; ?></td>
							                  	<td><?=  $user_id; ?></td>
							                  	<td><?=  $customer_id; ?></td>
							                  	<td><?=  $product; ?></td>
							                  	<td><?=  $total_amount; ?></td>
							                  	<td><?=  $shipping_fees; ?></td>
							                  	<td><?=  $notes; ?></td>
							                  	<td><?=  $created_at; ?></td>
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
