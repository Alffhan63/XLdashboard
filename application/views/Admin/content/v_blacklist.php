<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
            Blacklist
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Campaign Management</a></li>
          <li class="active">Blacklist</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box">
          <div class="box-header with-border" style="background: #337ab7; border-radius: 5px;">
            <h3 class="box-title" style="color:white; padding: 3px;">Blacklist</h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th></th>
                  <th>MSISDN</th>
                  <th>Remark</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                  <td>628189282829</td>
                  <td>No Private</td>
                  <td>23/02/2019 - 00.43</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Edit</button>
                    <button class="btn btn-danger btn-sm" type="submit"> Delete</button>
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                <td>628189282829</td>
                  <td>No Private</td>
                  <td>23/02/2019 - 00.43</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Edit</button>
                    <button class="btn btn-danger btn-sm" type="submit"> Delete</button>
                     
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                <td>628189282829</td>
                  <td>No Private</td>
                  <td>23/02/2019 - 00.43</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Edit</button>
                    <button class="btn btn-danger btn-sm" type="submit"> Delete</button>
                     
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                <td>628189282829</td>
                  <td>No Private</td>
                  <td>23/02/2019 - 00.43</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Edit</button>
                    <button class="btn btn-danger btn-sm" type="submit"> Delete</button>
                     
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                <td>628189282829</td>
                  <td>No Private</td>
                  <td>23/02/2019 - 00.43</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Edit</button>
                    <button class="btn btn-danger btn-sm" type="submit"> Delete</button>
                     
                  </td>
                </tr>
                </tfoot>
            </table>
          </div>

            </div>
            <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<script>

    $('input[type="checkbox"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green'

    });

    $("#select-all").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
    });

    

  </script>