<?php 
$edit_data		=	$this->db->get_where('employee' , array(
	'emp_id' => $param2 ))->result_array();
foreach ($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_employee'); echo $param1;echo $param2?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(site_url('admin/employee/do_update/'.$row['emp_id'])  , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                	<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Ar name');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="ar_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['ar_name']?>" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('en name');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="en_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['en_name']?>" autofocus required>
						</div>
					</div>

					

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Social Status');?></label>

						<div class="col-sm-5">
							<select name="social_status" class="form-control select2" required>
								<option value="Married" <?php if($row['social_status']=="Married")echo 'selected'; ?> >Married</option>
								<option value="Unmarried" <?php if($row['social_status']=="Unmarried")echo 'selected'; ?> >Unmarried</option>
								<option value="Absolute" <?php if($row['social_status']=="Absolute")echo 'selected'; ?> >Absolute</option>
								
                             
                          </select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nationality');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['nationality']?>" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('dob');?></label>

					<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="dob" value="<?php echo $row['dob']?>" data-start-view="2">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('qualification');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="qualification" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['qualification']?>" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('conservation amount');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="amt_conservation" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['amt_conservation']?>" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Departments Authorization');?></label>

						<div class="col-sm-5">
							<select name="dept_auth" class="form-control select2" required>
								<option value="A Certified" <?php if($row['dept_auth']=="A Certified")echo 'selected'; ?> >A Certified</option>
								<option value="Not Certified" <?php if($row['dept_auth']=="Not Certified")echo 'selected'; ?> >Not Certified</option>
								<option value="Experimenter" <?php if($row['dept_auth']=="Experimenter")echo 'selected'; ?> >Experimenter</option>
								<option value="Not Experimenter" <?php if($row['dept_auth']=="Not Experimenter")echo 'selected'; ?> >Not Experimenter</option>
                             
                          </select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Job Title');?></label>

						<div class="col-sm-5">
							<select name="job_title" class="form-control select2" required>
								<option value="Administrative" <?php if($row['job_title']=="Administrative")echo 'selected'; ?> >Administrative</option>
								<option value="Curriculum Teacher" <?php if($row['job_title']=="Curriculum Teacher")echo 'selected'; ?>>Curriculum Teacher</option>
								<option value="Memorizer" <?php if($row['job_title']=="Memorizer")echo 'selected'; ?>>Memorizer</option>
								<option value="Assistant Teacher" <?php if($row['job_title']=="Assistant Teacher")echo 'selected'; ?>>Assistant Teacher</option>
								<option value="Factor" <?php if($row['job_title']=="Factor")echo 'selected'; ?>>Factor</option>
								<option value="Driver" <?php if($row['job_title']=="Driver")echo 'selected'; ?>>Driver</option>
								<option value="Other" <?php if($row['job_title']=="Other")echo 'selected'; ?>>Other</option>
                             
                          </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>

						<div class="col-sm-5">
							<input type="email" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['email']?>" autofocus required>
						</div>
					</div>

					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('joining year');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="joining_year" value="" data-start-view="2" value="<?php echo $row['joining_year']?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('living');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="living" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['living']?>" autofocus required>
						</div>
					</div>

						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Passport number');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="passport_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['passport_no']?>" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Expiry date');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="pexpiry_date" value="<?php echo $row['pexpiry_date']?>" data-start-view="2">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Residency Number');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="residency_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['residency_no']?>" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Expiry date');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="rexpiry_date" value="" data-start-view="2" value="<?php echo $row['rexpiry_date']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Unified Number');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="unified_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['unified_no']?>" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('guarantor');?></label>

						<div class="col-sm-5">
							<select name="guaranter" class="form-control select2" required>
								<option value="The Center" <?php if($row['guaranter']=="The Center")echo 'selected'; ?>>The Center</option>
								<option value="His Family" <?php if($row['guaranter']=="His Family")echo 'selected'; ?>>His Family</option>
								                             
                          </select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('ID No');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="Id_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['Id_no']?>" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Tel');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="tel"  value="<?php echo $row['tel']?>" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Notes');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="notes"  value="<?php echo $row['notes']?>" autofocus >
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('branch');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="branch" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['branch']?>" autofocus required>
						</div>
					</div>



				

					

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php echo $this->crud_model->get_image_url('employee_image' , $row['emp_id']);?>" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="personal_photo" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                
                	
	
				<!-- 	<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" alt="...">
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
					</div> -->
	
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_employee');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>

