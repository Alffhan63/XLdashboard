<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daily Push Capacity
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Reports</a></li>
      <li class="active">Dailu Push Capacity</li>
    </ol>
    <div class="box-tools" style="margin-top: 15px;">
      
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- /.box-header -->
    <button type="button" class="btn" style="margin-bottom:10px;">
        <span>
          <i class="fa fa-calendar"></i> Date range picker
        </span>
        <i class="fa fa-caret-down"></i>
      </button>

    <div class="box box-primary">
        <div class="box-header with-border" style="background: #337ab7; border-radius: 5px;">
        <h3 class="box-title" style="color:white; padding: 3px;">Daily Push Capacity</h3>
        
        <div class="box-tools pull-right">
        <button type="button" class="btn" style="margin-left:10px; margin-right: 5px; background-color:#225179;"><i class="fa fa-camera"
        style="color:white;"></i>
      </button>
      <button type="button" class="btn btn-success" style="margin-left:10px; margin-right: 5px;"><i class="fa fa-download"></i>
        Download
      </button>
      
    </div>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="dailyPush" style="height:280px;"></canvas>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </section>

</div>
<!-- /.content-wrapper -->

<script>
var ctx = document.getElementById("dailyPush").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderWidth: 1
        },
        {
          label: '# of kocak',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(0, 0, 0, 0)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            type: 'line',
            borderWidth: 1
        }, {
          label: '# of kocak',
            data: [20, 20, 20, 20, 20, 20],
            borderColor: [
                'rgba(255,99,132,1)', 
            ],
            backgroundColor: [
                'rgba(0, 0, 0, 0)',
            ],
           
            type: 'line',
            borderWidth: 1
        }
      ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

</script>
