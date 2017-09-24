<?php include 'includes/header.php'; ?>
<?php include 'includes/main_header.php'; ?>
<?php include 'includes/left_sidebar.php'; ?>
<?php include 'includes/classes/config/Crud.php'; ?>
<?php include 'includes/form_handlers/listUsers_handlers.php'; ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">USERS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Email </th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
                
             <?php 

		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo ($row["id"]); ?></td>
				<td><?php echo ($row["firstname"]); ?></td>
				<td><?php echo ($row["lastname"]); ?></td>
				<td><?php echo ($row["email"]); ?></td>
			</tr>
		<?php 
		} ?>

	"</tbody>";
"</table>";
	


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php include 'includes/main_footer.php'; ?>
