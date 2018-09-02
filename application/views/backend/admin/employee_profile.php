<style>
  .exam_chart {
    width       : 100%;
    height      : 265px;
    font-size   : 11px;
  }
</style>

<?php
  $employee_info = $this->db->get_where('employee', array('emp_id' => $emp_id))->result_array();
  foreach ($employee_info as $row):
   /* $enroll_info = $this->db->get_where('enroll', array(
      'student_id' => $row['student_id'], 'year' => $running_year
    ));
    $class_id = $enroll_info->row()->class_id;
    $exams = $this->crud_model->get_exams();*/
?>
<div class="profile-env">
	<header class="row">
		<div class="col-md-3">
			<center>
        <a href="#">
  				<img src="<?php echo $this->crud_model->get_image_url('employee', $emp_id) ;?>" class="img-circle"
          style="width: 60%;" />
  			</a>
        <br>
        <h3>
          <?php echo $row['ar_name']; ?>
        </h3>
        <br>
       
      </center>
		</div>
    <div class="col-md-9">

		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-home"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('basic_info'); ?></span>
				</a>
			</li>
			<!-- <li class="">
				<a href="#tab2" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-user"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('parent_info'); ?></span>
				</a>
			</li>
			<li class="">
				<a href="#tab3" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-mail"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('exam_marks'); ?></span>
				</a>
			</li> -->
			<!-- <li class="">
				<a href="#tab4" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-cog"></i></span>
					<span class="hidden-xs"><?php //echo get_phrase('attendance'); ?></span>
				</a>
			</li> -->
    <!--   <li class="">
				<a href="#tab5" data-toggle="tab" class="btn btn-default">
					<span class="visible-xs"><i class="entypo-cog"></i></span>
					<span class="hidden-xs"><?php echo get_phrase('payments'); ?></span>
				</a>
			</li> -->
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
        <?php
          // $basic_info_titles = ['ar_name','en_name', 'social_status', 'nationality', 'dob', 'qualification','job_title','Id_no', 'email','joining_year','address','passport_no','pexpiry_date','residency_no','rexpiry_date','nearest_person_no','guarantor','tel','tel1','notes','branch'];
          // $basic_info_values = [$row['ar_name'], $row['en_name'] == NULL ? '' :$row['en_name'] ,$row['social_status'],$row['nationality'],$row['dob'],$row['qualification'],$row['job_title'],$row['Id_no'],$row['email'],$row['joining_year'],$row['address'],$row['passport_no'],$row['pexpiry_date'],$row['residency_no'],$row['rexpiry_date'],$row['nearest_person_no'],$row['guarantor'],$row['tel'],$row['tel1'],$row['notes'],$row['branch']]
         $basic_info_titles = ['name_in_arabic','name_in_english', 'social_status', 'nationality', 'date_of_birth', 'qualification','job_title','functional_no','EID_no', 'email','joining_year','address','passport_no','passport_exp_date','residency_no','residency_exp_date','nearest_person_no','guarantor','tel','tel1'];
          $basic_info_values = [$row['ar_name'], $row['en_name'] == NULL ? '' :$row['en_name'] ,$row['social_status'],$row['nationality'],$row['dob'],$row['qualification'],$row['job_title'],$row['Id_no'],$row['eid_no'],$row['email'],$row['joining_year'],$row['address'],$row['passport_no'],$row['pexpiry_date'],$row['residency_no'],$row['rexpiry_date'],$row['nearest_person_no'],$row['guarantor'],$row['tel'],$row['tel1']]
?>
        <table class="table table-bordered" style="margin-top: 20px;">
          <tbody>
          <?php for ($i=0; $i < count($basic_info_titles) ; $i++) { ?>
            <tr>
              <td width="30%">
                <strong><?php echo get_phrase($basic_info_titles[$i]); ?></strong>
              </td>
              <td><?php echo $basic_info_values[$i]; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
			</div>
		
			
			<!-- <div class="tab-pane" id="tab4">
				attendance
			</div> -->
		
		</div>

		<br>

	</div>
	</header>
</div>
<?php endforeach; ?>
