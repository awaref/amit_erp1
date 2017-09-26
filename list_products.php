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
		    	<small>List Products</small>
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
			            			$result = $crud->getData('SELECT products.*,category.name as 
									cat_name from products join category where category_id = category.id');
			            		 ?>

			            		<!-- /.box-header -->
			            		<div class="box-body">
				              		<table id="example1" class="table table-bordered table-striped">
				                		<thead>
				                			<tr>
								                <th>ID</th>
								                <th>Name</th>
								                <th>Category</th>
								                <th>price</th>
								                <th>cost</th>
												<th>Quantity</th>
								                <th>Expire date</th>
				                			</tr>
				                		</thead>
				                		<tbody>
				                		<?php 
				                			foreach ($result as $product) {
					                  			$id = $product['id'];
												$name = $product['name'];
												$desc = $product['description'];
												$quantity = $product['quantity'];
												$category_name = $product['cat_name'];
					                  			$price = $product['price'];
					                  			$cost = $product['cost'];
					                  			$expire_date = $product['expire_date'];
					                  		?>

				                			<tr title="<?=  "Description : ".$desc; ?>">
							                  	<td><?=  $id; ?></td>
							                  	<td><?=  $name; ?></td>
							                  	<td><?=  $category_name; ?></td>
							                  	<td><?=  $price; ?></td>
							                  	<td><?=  $cost; ?></td>
												<td><?=  $quantity; ?></td>
							                  	<td><?=  $expire_date; ?></td>
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
