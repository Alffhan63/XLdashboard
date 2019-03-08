<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create Automatic Campaign
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Campaign Management</a></li>
          <li class="active">Create Campaign</li>
          <li class="active">Automatic Campaign</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- /.box -->
        <div class="row">
          <div class="col-md-7">
            <div class="box">
              <div class="box-header" style="background: #337ab7; border-radius: 5px;">
                <h3 class="box-title" style="color:white; padding: 3px;">Automatic Create Campaign</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" style="padding-top:10px;">
                <div class="box-body">
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Name</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control input-sm" placeholder="" name="">
                    </div>
                  </div>
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%;">Tone</label>
                    <div class="col-sm-3">
                      <select id="textone" class="form-select input-sm" style="width: 100%;">
                        <option>Yes</option>
                        <option selected="selected">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group textone" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Tone Title</label>
                    <div class="col-sm-3">
                      <input id="captiontone" maxlength="18" type="" class="form-control input-sm" placeholder=""
                        name="">
                    </div>
                  </div>
                  <div class="form-group toneduration" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Tone Duration(s) </label>
                    <div class="col-sm-2">
                      <input id="toneduration" maxlength="2" type="" class="form-control input-sm" placeholder=""
                        name="">
                    </div>
                  </div>
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%;">Number of layer</label>
                    <div class="col-sm-3">
                      <select id="layer" class="form-select input-sm" style="width: 100%;">
                        <option value="1" selected="selected">1 Layer</option>
                        <option>2 Layer</option>
                        <option>3 Layer</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group layer-1" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Layer-1 (Text)</label>
                    <div class="col-sm-6">
                      <textarea maxlength="110" class="form-control" rows="4" placeholder="" id="layer1"></textarea>
                      <i>110 Character</i>
                    </div>
                  </div>
                  <div class="form-group layer-2" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Layer-2 (Text)</label>
                    <div class="col-sm-6">
                      <textarea maxlength="110" class="form-control" rows="4" placeholder="" id="layer2"></textarea>
                      <i>110 Character</i>
                    </div>
                  </div>
                  <div class="form-group layer-3" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Layer-3 (Text)</label>
                    <div class="col-sm-6">
                      <textarea maxlength="110" class="form-control" rows="4" placeholder="" id="layer3"></textarea>
                      <i>110 Character</i>
                    </div>
                  </div>
                  <div class="form-group " name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%;">Save to inbox ?</label>
                    <div class="col-sm-3">
                      <select id="inbox" class="form-select input-sm" style="width: 100%;">
                        <option>Yes</option>
                        <option value="" selected="selected">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group inbox" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Save to inbox (SMS)</label>
                    <div class="col-sm-6">
                      <textarea maxlength="110" class="form-control" rows="4" placeholder=""></textarea>
                      <i>110 Character</i>
                    </div>
                  </div>
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%;">Action (Final)</label>
                    <div class="col-sm-3">
                      <select id="actionfinal" class="form-select input-sm" style="width: 100%;">
                        <option selected="selected">None</option>
                        <option>SMS</option>
                        <option>USSD</option>
                        <option>Call</option>
                        <option>Browse</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group destination">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Destination</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control input-sm" placeholder="" name="">
                    </div>
                  </div>
                  <div class="form-group sms" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">SMS</label>
                    <div class="col-sm-6">
                      <textarea maxlength="110" class="form-control" rows="4" placeholder=""></textarea>
                      <i>110 Character</i>
                    </div>
                  </div>
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Total Recepient</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control input-sm" placeholder="" name="">
                    </div>
                  </div>
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%">Start Date</label>
                    <div class="col-sm-3">
                      <input name="" type="text" class="form-control input-sm" id="datepicker">
                    </div>
                  </div>
                  <div class="form-group" name="">
                    <label for="" class="col-sm-2 control-label" style="width:30%;">Start Time</label>
                    <div class="col-sm-3">
                      <select class="form-select input-sm" style="width: 100%;">
                        <option value="" selected="selected"></option>
                        <option value="">09.00</option>
                        <option value="">09.30</option>
                        <option value="">10.00</option>
                        <option value="">10.30</option>
                        <option value="">11.00</option>
                        <option value="">11.30</option>
                        <option value="">12.00</option>
                        <option value="">12.30</option>
                        <option value="">13.00</option>
                        <option value="">13.30</option>
                        <option value="">14.00</option>
                        <option value="">15.30</option>
                        <option value="">16.00</option>
                        <option value="">16.30</option>
                        <option value="">17.00</option>
                        <option value="">17.30</option>
                        <option value="">18.00</option>
                        <option value="">18.30</option>
                        <option value="">19.00</option>
                        <option value="">19.30</option>
                        <option value="">20.00</option>
                        <option value="">20.30</option>
                      </select>
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
                    <button type="submit" class="btn btn-info"><i class="fa fa-repeat" style="padding-right:5px;"></i>
                      Save and Return
                    </button>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-warning"
                        style="padding-right:5px;"></i>
                      Cancel
                    </button>
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
                  <!-- <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol> -->

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div id="layerutama" class="item layerpreview1 active">
                      <img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;">
                      <div class="container">
                        <div class="carousel-caption">
                          <span id="previewlayer1" style="color:black; font-size:14px; white-space: pre-wrap;
                                   word-break: break-word; vertical-align: bottom;">
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="item layerpreview2">
                      <img src="bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;">
                      <div class="container">
                        <div class="carousel-caption"
                          style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;">
                          <span id="previewlayer2" style="color:black; font-size:15x; white-space: pre-wrap;
                                 word-break: break-word;">
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="item layerpreview3">
                      <img src="bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;">
                      <div class="container">
                        <div class="carousel-caption"
                          style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;">
                          <span id="previewlayer3" style="color:black; font-size:15x; white-space: pre-wrap;
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
	
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A' })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>

  <script>
    $(document).ready(function () {
      $('.inbox').hide();
      $('#inbox').change(function () {
        if ($('#inbox').val() == 'Yes') {
          $('.inbox').show();
        } else {
          $('.inbox').hide();
        }

      })

      $('.destination').hide();
      $('.sms').hide();
      $('#actionfinal').change(function () {
        if ($('#actionfinal').val() == 'None') {
          $('.destination').hide();
          $('.sms').hide();
        } else if ($('#actionfinal').val() == 'SMS') {
          $('.destination').show();
          $('.sms').show();
        } else {
          $('.destination').show();
          $('.sms').hide();
        }

      })

      $('.layer-2').hide();
      $('.layer-3').hide();
      $('#layer').change(function () {
        if ($('#layer').val() == '2 Layer') {
          $('.layer-2').show();
          $('.layer-3').hide();
        } else if ($('#layer').val() == '3 Layer') {
          $('.layer-2').show();
          $('.layer-3').show();
        } else {
          $('.layer-2').hide();
          $('.layer-3').hide();
        }

      })

      $('#clickme').click(function () {
        $('#uploadfile').click();
      });

      $("input[type='file']").change
        (function () {
          $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
        })

      $('#layer1').on('input', function (e) {
        let layer1 = $('#layer1').val();
        // let firstName = $.trim($('#namadepan').val());
        var layer1preview = (layer1).replace();;
        $("#previewlayer1").html(layer1preview);

      });

			$('#layer2').on('input', function (e) {
        let layer2 = $('#layer2').val();
        // let firstName = $.trim($('#namadepan').val());
        var layer2preview = (layer2).replace();;
        $("#previewlayer2").html(layer2preview);

      });

			$('#layer3').on('input', function (e) {
        let layer3 = $('#layer3').val();
        // let firstName = $.trim($('#namadepan').val());
        var layer3preview = (layer3).replace();;
        $("#previewlayer3").html(layer3preview);

      });

      $('#captiontone').on('input', function (e) {
        let captiontone = $('#captiontone').val();
        // let firstName = $.trim($('#namadepan').val());
        var tonepreview = (captiontone).replace();;
        $("#previewtone").html(tonepreview);

      });

      $('.textone').hide();
      $('.toneduration').hide();
      $('#textone').change(function () {
        if ($('#textone').val() == 'Yes') {
          $('.textone').show();
          $('.toneduration').show();
          $("#layer").val(1);
          $('#myCarousel').carousel(0);
          $(".active").attr("class", "item layerpreview1");
          $(`<div id="toneCarousel" class="item active">
							<img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateTonecampaign.png" alt="Chicago"style="width:100%;"> 
							<div class="container"> 
								<div class="carousel-caption" style="padding-left:50px; padding-right: 50px; top: 58%; text-align: center"> 
									<span id="previewtone" style="color:white; font-size:15px; white-space: pre-wrap;word-break: break-word;"></span>
								</div> 
							</div> 
						</div>`).insertBefore('#layerutama');
          $('.layerpreview2').remove();
          $('.layerpreview3').remove();
          $('.layer-2').hide();
          $('.layer-3').hide();
				} else {
          $('.textone').hide();
          $('.toneduration').hide();
          $("#layer").val(1);
          $('#myCarousel').carousel(0);
          setTimeout(function () {
            $(".active").attr("class", "item layerpreview1 active");
            $('#toneCarousel').remove();
            $('.layerpreview2').remove();
            $('.layerpreview3').remove();
          }, 1000); 
          $('.layer-2').hide();
          $('.layer-3').hide();
				}
      })

      $('#layer').change(function () {
        var result = $('#layer').val();
        switch (result) {
          case "2 Layer":
          $('#myCarousel').carousel(0);
					$('#layer2').val('');
						$('#layer3').val('');
          setTimeout(function () {
            $('.layerpreview2').remove();
            $('.layerpreview3').remove();
            $('<div class="item layerpreview2"><img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;"><div class="container"><div class="carousel-caption"style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;"><span id="previewlayer2" style="color:black; font-size:15x; white-space: pre-wrap;word-break: break-word;"></span></div></div></div>').appendTo('.carousel-inner');
          }, 1000); 
        	break;
          case "3 Layer":
          $('#myCarousel').carousel(0);
					$('#layer2').val('');
          setTimeout(function () {	
            $('.layerpreview2').remove();
            $('<div class="item layerpreview2"><img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;"><div class="container"><div class="carousel-caption"style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;"><span id="previewlayer2" style="color:black; font-size:15x; white-space: pre-wrap;word-break: break-word;"></span></div></div></div>').appendTo('.carousel-inner');
            $('<div class="item layerpreview3"><img src="<?php echo base_url() ?>assets/bower_components/login/images/TemplateCampaign.png" alt=" " style="width:100%;"><div class="container"><div class="carousel-caption"style="padding-bottom:65%; padding-left:35px; padding-right:50px; text-align:left;"><span id="previewlayer3" style="color:black; font-size:15x; white-space: pre-wrap;word-break: break-word;"></span></div></div></div>').appendTo('.carousel-inner');
          }, 1000); 
				  break;
          default:
          $('#myCarousel').carousel(0);
          setTimeout(function () {
            $('.layerpreview2').remove();
            $('.layerpreview3').remove();
          }, 1000); 
        }
      })
    });
  </script>
