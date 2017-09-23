
<?php
 session_start();  
include 'includes/classes/config/Crud.php';
include 'includes/classes/config/Validation.php';
include 'includes/form_handlers/login_handlers.php';
?>
<?php $page_title = "ERP | Login Page"; ?>
<?php include 'includes/login_header.php'; ?>

    <div class="login-logo">
    <a href="#"><b>ERP</b><small>Project</small></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-md-4 col-md-offset-8">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    </div>
    <!-- /.login-box-body -->
<?php include 'includes/login_footer.php'; ?>
