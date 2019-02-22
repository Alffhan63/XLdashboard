<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         User Management
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Administrator</a></li>
          <li class="active">User Management</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header with-border" style="background: #337ab7; border-radius: 5px;">
                <h3 class="box-title" style="color:white; padding: 3px;">User Management</h3>
                <div class="box-tools" style="float:right; padding-right:30px;">
								<a href="<?php echo site_url('register') ?>">
									<button type="button" class="btn btn-success">
                    <i class="fa  fa-user-plus" style="padding-right:10px;"></i><b>Add user</b>
                  </button>
									</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>User Group</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>alfhan63</td>
                      <td>alfhanrf@xl.co.id</td>
                      <td>Alfhan Rizky Fauzan</td>
                      <td>Administrator</td>
                      <td>Active</td>
                      <td>
					  
											<button class="btn btn-warning " type="submit">
																	<i class="fa fa-edit" style="padding-right:10px;">
											</i>Edit</button>
						
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Hermanoob</td>
                      <td>herman@xl.co.id</td>
                      <td>Herman Cyank Dia</td>
                      <td>Campaign Approvel</td>
                      <td>Active</td>
                      <td><button class="btn btn-warning " type="submit">
                        <i class="fa fa-edit" style="padding-right:10px;">
                        </i>Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>OmDinoob</td>
                      <td>Dinoob@xl.co.id</td>
                      <td>Dino H</td>
                      <td>Campaign Creator</td>
                      <td>Active</td>
                      <td><button class="btn btn-warning " type="submit">
                        <i class="fa fa-edit" style="padding-right:10px;">
                        </i>Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Wilispie</td>
                      <td>Wg@xl.co.id</td>
                      <td>Wilis G</td>
                      <td>Administrator</td>
                      <td>Non Active</td>
                      <td><button class="btn btn-warning " type="submit">
                        <i class="fa fa-edit" style="padding-right:10px;">
                        </i>Edit</button>
                      </td>
                    </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
