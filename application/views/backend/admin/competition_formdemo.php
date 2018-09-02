<link rel="stylesheet" href="<?php echo base_url('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/entypo/css/entypo.css');?>">
<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/neon-core.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/neon-theme.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/neon-forms.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
<?php
    $skin_colour = $this->db->get_where('settings' , array(
        'type' => 'skin_colour'
    ))->row()->description;
    if ($skin_colour != ''):?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/' . $skin_colour . '.css');?>">

<?php endif;?>

<?php if ($text_align == 'right-to-left') : ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/neon-rtl.css');?>">
<?php endif; ?>
<script src="<?php echo base_url('assets/js/jquery-1.11.0.min.js');?>"></script>

        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/font-awesome/css/font-awesome.min.css');?>">

<link rel="stylesheet" href="<?php echo base_url('assets/js/vertical-timeline/css/component.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/responsive/css/datatables.responsive.css');?>">

<link rel="stylesheet" href="<?php echo base_url('assets/js/wysihtml5/bootstrap-wysihtml5.css');?>">

<!--Amcharts-->
<script src="<?php echo base_url('assets/js/amcharts/amcharts.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/pie.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/serial.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/gauge.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/funnel.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/radar.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/exporting/amexport.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/exporting/rgbcolor.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/exporting/canvg.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/exporting/jspdf.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/exporting/filesaver.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/amcharts/exporting/jspdf.plugin.addimage.js');?>" type="text/javascript"></script>

<script>
function engselected() {
	<?php $lang="eng";?>
    var x = document.getElementById("inst");
    x.style.display = "block";
   /* if (x.style.display === "none") {
        x.style.display = "block";
    }*/
}
function arabicselected() {
	<?php $lang="arabic";?>
    var x = document.getElementById("inst");
    x.style.display = "block";
   /* if (x.style.display === "none") {
        x.style.display = "block";
    }*/
}
</script>




<div class="container">
	<div>
		<div class="panel panel-primary" data-collapsed="0"  id="selectlang">
        	<div>
            	<div>
            		<img width="100%" src="<?echo base_url(); ?>assets/images/header2.jpg">
            		<!-- <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?> -->
            	</div>
            </div><hr>
			<div class="panel-body">
				<div align="center">
					<h1>Please Select Language</h1>
					<hr>
					<div class="row">
						<div align="left" class="col-md-6 form-group">
							<div class="col-sm-offset-3">
								<button type="submit" class="btn btn-warning btn-lg" onclick="engselected()"><?php echo get_phrase('English');?></button>
							</div>
						</div>

						<div align="center" class="col-md-6 form-group">
							<div class="col-sm-offset-3">
								<button type="submit" class="btn btn-warning btn-lg" onclick="arabicselected()"><?php echo get_phrase('Arabic');?></button>
							</div>
						</div>
					</div>
					<br>
					<br>
				</div>

        	</div>
	</div>
</div>

	<div>
		<div class="panel panel-primary" data-collapsed="0" id="inst" style="display: none;">
        	<div>
            	<div>
            		<img width="100%" src="<?echo base_url(); ?>assets/images/header2.jpg">
            		<!-- <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?> -->
            	</div>
            </div><hr>
			<div class="panel-body">
				<div align="center">
					<hr>
						<div class="form-group">
							<button type="submit" class="btn btn-warning btn-lg"><?php if($lang=="eng")
							{
								echo get_phrase('Read the Instruction');
							}else
							{
								echo get_phrase('arabic Read the Instruction');
							}
							?></button>
						</div>
						
						<br>
						<br>

						<div class="form-group">
							<button type="submit" class="btn btn-warning btn-lg"><?php echo get_phrase('Register');?></button>
						</div>
					<br>
					<br>
				</div>

        	</div>
	</div>
</div>

	<div>
		<div class="panel panel-primary" data-collapsed="0" id="formeng" style="display: none;">
        	<div>
            	<div>
            		<img width="100%" src="<?echo base_url(); ?>assets/images/header2.jpg">
            		<!-- <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?> -->
            	</div>
            </div><hr>
			<div class="panel-body">

                <?php echo form_open(site_url('admin/student/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('fullname');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="fullname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Nationality');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>

						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('male');?></option>
                              <option value="female"><?php echo get_phrase('female');?></option>
                          </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('grade');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="grade" value="" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Mobile No');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="" >
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="">
						</div>
					</div>


					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Notes');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="notes" value="" >
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('add_student');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
