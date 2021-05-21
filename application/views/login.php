<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - perum lppnpi cabang tumbolka sumba barat daya</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url('aset/vendor/bootstrap/css/bootstrap.min.css') ?> ">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url('aset/vendor/font-awesome/css/font-awesome.min.css') ?> ">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="<?php echo base_url('aset/css/fontastic.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url('aset/css/style.default.css') ?>" id="theme-stylesheet">

  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url('aset/img/icon.png') ?>">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div class="page login-page">
    <div class="container">

      <div class="form-outer text-center  align-items-center mt-5">
        <div class="form-inner">
          <div class="logo text-uppercase"><strong class="text-primary">Login</strong></div>
          <p>perum lppnpi cabang tumbolka sumba barat daya</p>
          <form action="<?php echo site_url('login/aksi_login') ?>" method="POST" class="text-left form-validate">
            <div class="form-group-material">
              <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
              <label for="login-username" class="label-material">Username</label>
            </div>
            <div class="form-group-material">
              <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
              <label for="login-password" class="label-material">Password</label>
            </div>
            <button type="submit" name="input" class="btn btn-primary">Input</button>
          </form>
          <!-- <a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>
          </div> -->
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">ImeldaUbas</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->

          </div>
        </div>

      </div>
    </div>
    <!-- JavaScript files-->
    <script src=" <?php echo base_url('aset/vendor/jquery/jquery.min.js') ?> "></script>
    <script src="<?php echo base_url('aset/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('aset/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('aset/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <!-- Main File-->
    <script src="<?php echo base_url('aset/js/front.js') ?>"></script>
</body>

</html>