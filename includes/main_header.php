<header class="main-header">
	<!-- Logo -->
	<a href="index2.html" class="logo">
	  	<!-- mini logo for sidebar mini 50x50 pixels -->
	  	<span class="logo-mini">ERP</span>
	  	<!-- logo for regular state and mobile devices -->
	 	<span class="logo-lg"><b>ERP</b>-Project</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
	  <!-- Sidebar toggle button-->
	  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	    <span class="sr-only">Toggle navigation</span>
	  </a>

	  <div class="navbar-custom-menu">
	    <ul class="nav navbar-nav">
	      <!-- User Account: style can be found in dropdown.less -->
	      <li class="dropdown user user-menu">
	        <a href="#">
	          <span class="hidden-xs"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></span>
	        </a>
	      </li>
	      <li>
	              <a href="<?php echo "includes/handlers/logout.php"; ?>"><span class="fa fa-sign-out"></span></a>
	      </li>
	      <!-- Control Sidebar Toggle Button -->
	    </ul>
	  </div>
	</nav>
	</header>
