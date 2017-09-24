	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
	  <!-- Sidebar user panel -->
		<div class="user-panel">
	    	<div class="pull-left image">
	      		<img src="http://via.placeholder.com/60x60" class="img-circle" alt="User Image">
	    	</div>
	    	<div class="pull-left info">
	      		<p><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></p>
	    	</div>
	  </div>
	  	<!-- search form -->
	  	<form action="#" method="get" class="sidebar-form">
		    <div class="input-group">
		    	<input type="text" name="q" class="form-control" placeholder="Search...">
		      	<span class="input-group-btn">
	            	<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
		            </button>
		        </span>
		    </div>
	  	</form>
	  	<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
		  		<a href="#">
		    		<i class="fa fa-users"></i> <span>Users</span>
			    	<span class="pull-right-container">
			      	<i class="fa fa-angle-left pull-right"></i>
			    	</span>
		  		</a>
		  		<ul class="treeview-menu">
		  			<li><a href="add_user.php"><i class="fa fa-circle-o"></i> Add User</a></li>
		    		<li><a href="list_users.php"><i class="fa fa-circle-o"></i> List Users</a></li>
		  		</ul>
			</li>
			<li class="treeview">
		  		<a href="#">
		    		<i class="fa fa-shopping-basket"></i> <span>Products</span>
			    	<span class="pull-right-container">
			      	<i class="fa fa-angle-left pull-right"></i>
			    	</span>
		  		</a>
		  		<ul class="treeview-menu">
		  			<li><a href="add_products.php"><i class="fa fa-circle-o"></i> Add Products</a></li>
		    		<li><a href="index.html"><i class="fa fa-circle-o"></i> List Products</a></li>
		  		</ul>
			</li>
			<li class="treeview">
		  		<a href="#">
		    		<i class="fa fa-shopping-basket"></i> <span>Orders</span>
			    	<span class="pull-right-container">
			      	<i class="fa fa-angle-left pull-right"></i>
			    	</span>
		  		</a>
		  		<ul class="treeview-menu">
		  			<li><a href="add_order.php"><i class="fa fa-circle-o"></i> Add Orders</a></li>
		    		<li><a href="index.html"><i class="fa fa-circle-o"></i> List Orders</a></li>
		  		</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
	</aside>
