




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V15</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url().'assets/log/images/icons/favicon.ico';?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/css/util.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/log/css/main.css'?>">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(../assets/log/images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>

      
         <form action="<?php form_open().'auth/login'; ?>" method="post" class="login100-form validate-form"> 
           <?php echo form_open('auth/login'); ?> 
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
           
            <?php echo form_input($identity);?>

            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <?php echo form_input($password);?>
            <span class="focus-input100"></span>
          </div>

          <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
              <label><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember Me </label>
            </div>
            <div>
              <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn btn-block btn-sm">
              Login
            </button>
          </div>
        </form>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/vendor/bootstrap/js/popper.js'?>"></script>
  <script src="<?php echo base_url().'assets/log/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/vendor/daterangepicker/moment.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/log/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'assets/log/js/main.js'?>"></script>

</body>
</html>











<!-- <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->