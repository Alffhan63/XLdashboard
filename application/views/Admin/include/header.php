<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Logo -->
<a href="<?php echo site_url('dashboard') ?>" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini" ><b>W</b>IB</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">
  <img src="<?php echo base_url() ?>assets/bower_components/login/images/xl-logo.png"style="height:40px;">
  <b>WIB</b>PUSH </span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> -->
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url() ?>assets/bower_components/login/images/xl.png" class="user-image" alt="User Image">
          <span class="hidden-xs">Alfhan Rizky</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="<?php echo base_url() ?>assets/bower_components/login/images/xl.png" class="img-circle" alt="User Image">

            <p>
              Alfhan Rizky - Web Developer
              <small>alfhanrf@gmail.com</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>

</nav>