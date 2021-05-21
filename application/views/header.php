<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>perum lppnpi cabang tumbolka sumba barat daya</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url('aset/vendor/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url('aset/vendor/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url('aset/css/style.blue.css') ?>" id="theme-stylesheet">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url('aset/img/icon.png') ?>">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- Side Navbar -->
<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img src="<?php echo base_url('aset/img/icon.png') ?>" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>A</strong>ir<strong class="text-primary">N</strong>av</a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Main</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">
        <li><a href="<?php echo base_url('dasboard') ?>"> <i class="icon-home"></i>Home </a></li>
        <li><a href="<?php echo site_url('kedatangan/input') ?>"> <i class="icon-form"></i>Input Kedatangan</a></li>
        <li><a href="<?php echo site_url('keberangkatan/input') ?>"> <i class="icon-form"></i>Input Keberangkatan</a></li>

        <li><a href="<?php echo site_url('kedatangan') ?>">Kedatangan</a></li>
        <li><a href="<?php echo site_url('keberangkatan') ?>">Keberangkatan</a></li>

        <li><a href="<?php echo site_url('tentang') ?>"> <i class="fa fa-id-badge"></i>About</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="page">
  <!-- navbar-->
  <header class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between">
          <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url('') ?>" class="navbar-brand">
              <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">perum lppnpi cabang tumbolka sumba barat daya</strong></div>
            </a></div>
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

            <!-- Log out-->
            <li class="nav-item"><a href="<?php echo site_url('login') ?>" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>