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
	
    var x = document.getElementById("enginst");
    //x.style.display = "block";
    if (x.style.display === "none") {
        x.style.display = "block";
         var y = document.getElementById("arabicinst");
         y.style.display="none";

    }
}
function arabicselected() {
	 var x = document.getElementById("arabicinst");
	 if (x.style.display === "none") {
        x.style.display = "block";
         var y = document.getElementById("enginst");
         y.style.display="none";

    }
}
function register() {
	 var x = document.getElementById("engform");
	 if (x.style.display === "none") {
        x.style.display = "block";
        

    }
}
</script>




<div class="container">
	<div>
		<div class="panel panel-primary" data-collapsed="0" style="display: block;" id="selectlang">
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
		<div class="panel panel-primary" data-collapsed="0" style="display: none;" id="enginst">
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
							<!-- <button type="submit" class="btn btn-warning btn-lg"><?php echo get_phrase('Read the Instruction');?></button> -->
							<h1>Hassan Rashid Alabbar Ramadan Competition..Third session(AH 1439 - AD 2018)</h1>
							<h3>Competition definition:</h3>
							<p>The first session of the competition began in Ramadan 1437 – 2016 .The competition will be held at the Bilal Bin Rabah Center for memorizing the Holy Quran .The competition continues daily during the month of Ramadan in 1439 AH .The Qur'anic portions are divided by the number of days of the month by the rate a fraction of a day .The contestant recites the daily .The Qur'anic portion by narrative .Those who test the contestants are experienced committees and efficient from the center .The number of winners over the month is more than 240 male and female winners, rate is  8 winners a day Valuable prizes have been allocated to winners.</p>
							<br><br>
							<h3>The objectives of the competition:</h3>
							<p>Serving the book of Allaah and taking care of it by encouraging and protecting it.Encourage citizens and residents of both sexes in the country to compete in the field of memorizing the Holy Quran.Take care of the Disabled and the elderly by allowing them to participate in the competition .Search for outstanding talents in the field of mastery of memorization, intonation and good sound.</p>
							<br><br>
							<h3>Contest Terms: </h3>
							<p>Each contestant has the right to broadcast only three parts during the month on different days 
							Competition participants from Abu Dhabi and its suburbs are entitled to hear three parts at once Parts 28, 29 and 30 for children under the age of 12 - and older persons over the age of 55
							That the contestant has not won the same part in previous years
							15 from contestants are entitled to register in the competition on a daily basis according to the parts to be recite it and according to the schedule 
							(Priority of admission to those who took precedence in registration)
							The results are announced daily on the website and the Facebook page of the Center
							</p>

							<br><br>
							<h3>Competition:</h3>
							<p>For females: The main building of the center (female branch) in Muhaisnah area (2) from 11:00 until 14:00
							For males: Hassan Hassan Mosque, Al-Tawar area 2, immediately after noon prayer
							The deadline for registration is the end of the month of Shaaban 1439 AH
							A certificate of participation for the winners and valuable financial prizes shall be given to each part
							</p>

							<br><br>
							<h3>Important Instructions:</h3>
							<p>The contestant is responsible for the correctness of the information mentioned
							in the nomination form
							Commitment to the part and the specific day of the hearing
							For inquiries, please contact:
							For females: 0565455856, for males: 0568359562
							</p>
						</div>
						
						<br>
						<br>

						<div class="form-group">
							<button type="submit" class="btn btn-warning btn-lg" onclick="register()"><?php echo get_phrase('Register');?></button>
						</div>
					<br>
					<br>
				</div>

        	</div>
	</div>
</div>
<div>
		<div class="panel panel-primary" data-collapsed="0" style="display: none;" id="arabicinst">
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
							<button type="submit" class="btn btn-warning btn-lg"><?php echo get_phrase('arabic Read the Instruction');?></button>
						</div>
						
						<br>
						<br>

						<div class="form-group">
							<button type="submit" class="btn btn-warning btn-lg" onclick="register()"><?php echo get_phrase(' arabic Register');?></button>
						</div>
					<br>
					<br>
				</div>

        	</div>
	</div>
</div>


	<div>
		<div class="panel panel-primary" data-collapsed="0" style="display: none;" id="engform">
        	<div>
            	<div>
            		<img width="100%" src="<?echo base_url(); ?>assets/images/header2.jpg">
            		<!-- <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?> -->
            	</div>
            </div><hr>
			<div class="panel-body">

                <?php echo form_open(site_url('admin/competition_entry/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						

						<div class="col-sm-5">
							<input type="text" class="form-control" name="fullname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
					</div>

					<div class="form-group">
						

						<div class="col-sm-5">
							<input type="text" class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Nationality');?></label>
					</div>

					<div class="form-group">
						

						<div class="col-sm-5">
							<select name="sex" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('male');?></option>
                              <option value="female"><?php echo get_phrase('female');?></option>
                          </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
					</div>

					<div class="form-group">
						

						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
					</div>

					<div class="form-group">
						

						<div class="col-sm-5">
							<input type="text" class="form-control" name="mobile" value="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone_1');?></label>
					</div>


					<div class="form-group">
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email"  value="">
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
					</div>


					<div class="form-group">
						

						<div class="col-sm-5">
							<input type="text" class="form-control" name="retention_amt" value="" >
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('amount_of_conservation');?></label>
					</div>

					<div class="form-group">
						

						<div class="col-sm-5">
							<select name="part_win" class="form-control">
								<?php for($i = 1;$i<31;$i++){ ?>
									<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
                          </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('In which parts you have won the competitions before?');?></label>
					</div>

					<div class="form-group">
						

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
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('id_card');?></label>
					</div>

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<input type="hidden" name="competition_id" value="<?php echo $this->uri->segment('5'); ?>">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Submit');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
