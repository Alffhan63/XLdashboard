<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
  <title>
    <?php echo $title; ?>
  </title>
  <meta charset="utf-8">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/welcomepage.css">

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/bower_components/login/images/xl-logo.png"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/css/loginmain.css">

  <!--internet -->
  

</head>

<Body>

  <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/login/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/login/vendor/tilt/tilt.jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bower_components/login/js/main.js"></script>


  <main>
    <?php $this->load->view($page); ?>
  </main>

</Body>
</html>