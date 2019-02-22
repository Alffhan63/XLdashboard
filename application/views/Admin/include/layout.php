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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/bower_components/login/images/xl-logo.png" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
	<!--data table-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets\bower_components\datatables.net-bs\css\dataTables1.bootstrap.min.css"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/campaign.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins\iCheck/all.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!--internet -->


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url() ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
	<!-- InputMask -->
  <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<!-- date-range-picker -->
  <script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
	<script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	 <!-- iCheck 1.0.1 -->
	 <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
	 <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url() ?>assets/js/Chart.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
   <!-- data table js -->
  <script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets\bower_components\datatables.net-bs\js\dataTables1.bootstrap.min.js"></script>

  <div class="wrapper">
    <header class="main-header">
      <?php $this->load->view('Admin/include/header'); ?>
    </header>

    <aside class="main-sidebar">
      <?php $this->load->view('Admin/include/aside'); ?>
    </aside>

    <main>
      <?php $this->load->view($page); ?>
    </main>

    <footer class="main-footer">
      <?php $this->load->view('Admin/include/footer'); ?>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
      <?php $this->load->view('Admin/include/asideControl'); ?>
    </aside>
    <div class="control-sidebar-bg"></div>

  </div>

  <script>
    $(document).ready(function () {
      $('#example1').DataTable();
      $('#example2').DataTable();
    });
  </script>
</Body>

</html>
