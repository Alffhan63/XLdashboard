<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> User Management</a></li>
      <li class="active">Add User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-header with-border" style="background: #337ab7; border-radius: 5px;">
        <h3 class="box-title" style="color: white;">Edit Account</h3>
      </div>
      <div class="box-body" style="padding-left:20%; padding-right:30%">
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
            <div class="form-group">
              <label class="col-sm-2 control-label">Username*</label>
              <div class="col-sm-10">
                <input class="form-control" id="username" placeholder="admin" require>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label">Email*</label>
              <div class="col-sm-10">
                <input class="form-control" id="username" placeholder="pushwib@gmail.com" require>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label">Nama*</label>
              <div class="col-sm-10">
                <input class="form-control" id="username" placeholder="Administrator" require>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label">Photo</label>
              <div class="col-sm-10">
              <input type="file" id="uploadfile" style="display:none;" />
                    <input class="btn btn-info" type="button" id="clickme" value="Upload Photo" />
                    <span id='val' style="padding-left:10px;"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">User Group*</label>
              <div class="col-sm-8" style="padding-right:30%">
                <select class="form-control" id="usrgrp" require>
                  <option>Administrator</option>
                  <option>Business User Creator</option>
                  <option>Business User Approver</option>
                  <option>CS</option>
                  <option>View Only</option>
                </select>
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">Department*</label>
              <div class="col-sm-8" style="padding-right:30%">
                <select class="form-control" id="department" require>
                  <option>HCD</option>
                  <option>----</option>
                  <option>-----</option>
                  <option>---</option>
                  <option>-----</option>
                </select>
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <div class="col-sm-8" style="padding-right:30%">
                <select class="form-control" id="status">
                  <option>Active</option>
                  <option>----</option>
                </select>
              </div>
            </div>
			<div class="form-group">
              <label  class="col-sm-2 control-label">New password</label>
              <div class="col-sm-10">
                <input type = "password" class="form-control" id="password" placeholder="New Password">
              </div>
            </div>
			<div class="form-group">
              <label  class="col-sm-2 control-label">Confirm assword</label>
              <div class="col-sm-10">
                <input type = "password" class="form-control" id="confirm-password" placeholder="Confirm Password">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-success">
                      <i class="fa fa-check" style="padding-right:5px;"></i>
                      Save
                    </button>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-warning"
                        style="padding-right:5px;"></i>
                      Cancel
                    </button>
                  </div>
                </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>
  </section>

  <script>
         $('#clickme').click(function () {
        $('#uploadfile').click();
      });

        $("input[type='file']").change
        (function () {
          $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
        })
  </script>
