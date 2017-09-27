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
		    	<small>List Categories</small>
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
			              			<h3 class="box-title">Categories Data</h3>
			            		</div>
			            		<!-- /.box-header -->
			            		<div class="box-body">
				              		<table id="example1" class="table table-bordered table-striped">
				                		<thead>
				                			<tr>
								                <th>ID</th>
								                <th>Name</th>
								                <th>Description</th>
				                			</tr>
				                		</thead>
				                		<tbody>
				                		<?php
				                			$crud = new Crud();
			            					$result = $crud->getAllData('category');
				                			foreach ($result as $order) {
					                  			$category_id = $order['id'];
					                  			$name = $order['name'];
					                  			$description = $order['description'];
					                  		?>

				                			<tr>
							                  	<td><?=  $category_id; ?></td>
							                  	<td><?=  $name; ?></td>
							                  	<td><?=  $description; ?></td>
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
