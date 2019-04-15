<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Reports
      <small>Reports Summary</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Reports</li>
    </ol>
    <div class="box-tools" style="margin-top: 15px;">
      <button type="button" class="btn" style="padding-right:10px;">
        <span>
          <i class="fa fa-calendar"></i> Date range picker
        </span>
        <i class="fa fa-caret-down"></i>
      </button>
      <button type="button" class="btn btn-success" style="margin-left:10px; margin-right: 5px;"><i class="fa fa-download"></i>
        Download
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="collapse" style="color:white"><i class="fa fa-minus"></i>
      </button>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box" style="min-height: 80px;">
          <span class="info-box-icon bg-yellow"><i class="fa fa-spinner" style="padding-top:20px;"></i></span>
          <div class="info-box-content">
            <span class="info-box-text1"><b>Incomplete</b></span>
            <span class="info-box-number">2</span>
            <span style="font-size:10px">Email not yet send</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box" style="min-height: 80px;">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-time" style="padding-top:20px;"></i></span>

          <div class="info-box-content">
            <span class="info-box-text1"><b>Wait Approval</b></span>
            <span class="info-box-number">41,410</span>
            <span style="font-size:10px">System already send email</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box" style="min-height: 80px;">
          <span class="info-box-icon bg-yellow"><i class="fa fa-file" style="padding-top:20px;"></i></span>

          <div class="info-box-content">
            <span class="info-box-text1"><b>Wait For File</b></span>
            <span class="info-box-number">760</span>
            <span style="font-size:10px">Waiting list MSISDN</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box" style="min-height: 80px;">
          <span class="info-box-icon bg-green"><i class="fa fa-stack-overflow" style="padding-top:20px;"></i></span>

          <div class="info-box-content">
            <span class="info-box-text1"><b>In Queue</b></span>
            <span class="info-box-number">20</span>
            <span style="font-size:10px">Broadcast in the queue</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Latest Campaign</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <!-- /.box-header -->
      <div class="box-body">
      <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Type</th>
              <th>Recepient</th>
              <th>Schedule</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-info">Wait Approval</span></td>
            </tr>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-danger">In Queue</span></td>
            </tr>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-info">Wait Approval</span></td>
            </tr>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-info">Wait Approval</span></td>
            </tr>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-danger">In Queue</span></td>
            </tr>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-success">Completed</span></td>
            </tr>
            <tr>
              <td>123</td>
              <td>Xtravaganza</td>
              <td>Automatic</td>
              <td>50.000</td>
              <td>09.00</td>
              <td><span class="label label-info">Wait Approval</span></td>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box-body -->
    </div>
    
    <!-- /.box-header -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Based On Top Region/h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="dailyPush" style="height:250px"></canvas>
        </div>
      </div>
      <!-- /.box-body -->
    </div>

    <!-- /.box-header -->
    <div class="box">
    <div class="box">
          <div class="box-header with-border" style="background: #FFA500; border-radius: 5px;">
            <h3 class="box-title" style="color:white; padding: 3px;">Based on Top 10 Region</h3>
            <!-- <button type="button" class="btn btn-success" style="margin-left:10px; margin-right: 5px; float:right;"><i class="fa fa-download"></i>
                    Download
            </button> -->
          </div>
      <div class="box-body">
        <div class="chart">
          <!-- <canvas id="myChart" style="height:250px"></canvas> -->
          <canvas id="myChartPie" style="height:350px"></canvas>
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

// var cto = document.getElementById("myChart").getContext('2d');
// var chart = new Chart(cto, {
//     type: 'horizontalBar',
//     data: {
//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//         datasets: [{
//             label: '# of Votes',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(75, 192, 192, 0.2)',
//             ],
//             borderColor: [
//                 'rgba(75, 192, 192, 0.2)',
//             ],
//             borderWidth: 1
//         }
//       ]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
// });

var cta = document.getElementById("myChartPie").getContext('2d');
var charts = new Chart(cta, {
    type: 'pie',
    data: {
        labels: ["Jakarta","Bandung", "Bekasi"],
        datasets: [{
             ill: true,
            backgroundColor: [
                '#eb2d3a',
                '#add8e6',
                '#90ee90'],
            label: '# of Votes',
            data: [100, 110, 15],
            borderColor: [
              '#fff'
            ],
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
