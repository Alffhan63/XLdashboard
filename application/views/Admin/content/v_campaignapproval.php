<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Campaign Approval
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Campaign Management</a></li>
          <li class="active">Campaign Approval</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box">
          <div class="box-header with-border" style="background: #337ab7; border-radius: 5px;">
            <h3 class="box-title" style="color:white; padding: 3px;">Latest Campaign For Approval</h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th></th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Recepient</th>
                  <th>Schedule</th>
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
                  <td>Alfhan</td>
                  <td>Manual</td>
                  <td>50.000</td>
                  <td>15.30</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Approve</button>
                    <button class="btn btn-danger btn-sm" type="submit">Decline</button>
                    <button class="btn btn-info " type="button" data-toggle="modal" data-target="#modal-default">
                          <i class="fa fa-search"></i></button>
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                  <td>Xtravaganza</td>
                  <td>Manual</td>
                  <td>50.000</td>
                  <td>15.30</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Approve</button>
                    <button class="btn btn-danger btn-sm" type="submit">Decline</button>
                    <button class="btn btn-info " type="submit"><i class="fa fa-search"></i></button>
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                
                  <td>Fantaxis</td>
                  <td>Manual</td>
                  <td>50.000</td>
                  <td>15.30</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Approve</button>
                    <button class="btn btn-danger btn-sm" type="submit">Decline</button>
                    <button class="btn btn-info " type="submit"><i class="fa fa-search"></i></button>
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                  <td>Spextrakuler</td>
                  <td>Manual</td>
                  <td>50.000</td>
                  <td>15.30</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Approve</button>
                    <button class="btn btn-danger btn-sm" type="submit">Decline</button>
                    <button class="btn btn-info " type="submit"><i class="fa fa-search"></i></button>
                  </td>
                </tr>
                <tr>
                <td>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                </td>
                  <td>Triviaxis</td>
                  <td>Manual</td>
                  <td>50.000</td>
                  <td>15.30</td>
                  <td>
                    <button class="btn btn-success btn-sm" type="submit">Approve</button>
                    <button class="btn btn-danger btn-sm" type="submit">Decline</button>
                    <button class="btn btn-info " type="submit"><i class="fa fa-search"></i></button>
                  </td>
                </tr>
                </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
              <!-- /.col -->
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Preview Campaign</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-7">
                    <div class="box">
                      <div class="box-header" style="background: #337ab7; border-radius: 5px;">
                        <h3 class="box-title" style="color:white; padding: 3px;">Detail Campaign</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      <form class="form-horizontal" style="padding-top:10px;">
                        <div class="box-body">
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%">Name</label>
                            <div class="col-sm-6">
                              <p>WIBPUSH-Spextrakuler</p>
                            </div>
                          </div>
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%;">Tone</label>
                            <div class="col-sm-6">
                            <p>YES</p>
                          </div>
                          </div>
                          <div class="form-group textone" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%">Text Tone</label>
                            <div class="col-sm-3">
                              <p id="captiontone">Kuis Spextrakuler</p>
                            </div>
                          </div>
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%;">Number of layer</label>
                            <div class="col-sm-3">
                              <p>1</p>
                            </div>
                          </div>
                          <div class="form-group layer-1" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%">Layer-1 (Text)</label>
                            <div class="col-sm-6">
                              <p id="layer1"> Selamat Anda berkesempatan mendapatkan samsung s9+

                                Klik OK! Skrg GRATIS
                              </p>
                            </div>
                          </div>
                          <div class="form-group " name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%;">Save to inbox ?</label>
                            <div class="col-sm-3">
                              <p>NO</p>
                            </div>
                          </div>
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%;">Action (Final)</label>
                            <div class="col-sm-3">
                              <p>USSD</p>
                            </div>
                          </div>
                          <div class="form-group destination">
                            <label for="" class="col-sm-2 control-label" style="width:30%">Destination</label>
                            <div class="col-sm-6">
                              <p>*123#</p>
                            </div>
                          </div>
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%">Total Recepient</label>
                            <div class="col-sm-3">
                             <p>50,000</p>
                            </div>
                          </div>
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%">Start Date</label>
                            <p>20/02/2019</p>
                          </div>
                          <div class="form-group" name="">
                            <label for="" class="col-sm-2 control-label" style="width:30%;">Start Time</label>
                            <div class="col-sm-3">
                              <p>19.30</p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group" name="">
                          <label for="" class="col-sm-2 control-label" style="width:30%">File Name</label>
                          <div class="col-sm-8">
                            <span id='val' style="padding-left:10px;">192001021_Xtravaganza</span>
                          </div>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                  </div>
                  <div class="col-md-5">
                    <div class="box">
                      <div class="box-header" style="background: #337ab7; border-radius: 5px;">
                        <h3 class="box-title text-center" style="color:white; padding: 3px;">Preview Campaign</h3>
                      </div>
                      <div class="carousel">
                        <div id="myCarousel" class="carousel slide" data-interval="false">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">

                            <div class="item active">
                              <img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateTonecampaign.png" alt=" " style="width:100%;" alt="Chicago"
                                style="width:100%; height: 80%;">
                              <div class="container">
                                <div class="carousel-caption" style="padding-left:50px; padding-right: 50px; top: 58%;
                                text-align: center">
                                  <span id="previewtone" style="color:white; font-size:15px; white-space: pre-wrap;
                                           word-break: break-word; ">
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="item layerpreview1">
                              <img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;" alt=" " style="width:100%;">
                              <div class="container">
                                <div class="carousel-caption">
                                  <span id="previewlayer1" style="color:black; font-size:13px; white-space: pre-wrap;
                                           word-break: break-word; vertical-align: bottom;">
                                  </span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="item">
                              <img src="bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;">
                              <div class="container">
                                <div class="carousel-caption"
                                  style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;">
                                  <span id="previewlayer1" style="color:black; font-size:15x; white-space: pre-wrap;
                                         word-break: break-word;">
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;">
                              <div class="container">
                                <div class="carousel-caption"
                                  style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;">
                                  <span id="previewlayer1" style="color:black; font-size:15x; white-space: pre-wrap;
                                           word-break: break-word;">
                                  </span>
                                </div>
                              </div>
                            </div> -->
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                <button type="button" data-dismiss="modal" class="btn btn-lg btn-info">Exit</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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