<hr />
<a href="<?php echo site_url('admin/student_add');?>"
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo get_phrase('add_new_student');?>
    </a>
<br>

<div class="row">
    <div class="col-md-12">

        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#home" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-users"></i></span>
                    <span class="hidden-xs"><?php echo get_phrase('all_students');?></span>
                </a>
            </li>
            <?php
            $query = $this->db->get_where('section' , array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
               // var_dump($sections);
                foreach ($sections as $row):
            ?>
            <li>
                <a href="#<?php echo $row['section_id'];?>" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                    <span class="hidden-xs"><?php //echo get_phrase('division');?> 
                        <?php echo $row['name'];?>
                    </span>
                </a>
            </li>
                <?php endforeach;?>
            <?php endif;?>
            <li>
                <a href="#orphan" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                    <span class="hidden-xs"><?php echo get_phrase('orphans');?></span>
                </a>
            </li>              
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">

                <table class="table table-bordered datatable" id="table_export">
                <!-- <table class="table table-bordered datatable"> -->
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id_no');?></div></th>
                            <!-- <th width="80"><div><?php echo get_phrase('photo');?></div></th> -->
                            <th><div><?php echo get_phrase('name_in_arabic');?></div></th>
                            <!-- <th class="span3"><div><?php echo get_phrase('address');?></div></th> -->
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('joining_year');?></div></th>
                            <th><div><?php echo get_phrase('date_of_birth');?></div></th>
                            <!-- <th><div><?php echo get_phrase('status');?></div></th> -->
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $students   =   $this->db->get_where('enroll' , array(
                                    'class_id' => $class_id , 'year' => $running_year
                                ))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $this->db->get_where('student' , array(
                                    'student_id' => $row['student_id']
                                ))->row()->student_code;?></td>
                            <!-- <td><img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="img-circle" width="30" /></td> -->
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->ar_name;
                                ?>
                            </td>
                           <!--  <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->address;
                                ?>
                            </td> -->
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->phone;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->joining_year;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->birthday;
                                ?>
                            </td>
                            <!-- <td>
                                <?php
                                    $adm_status = $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->status;
                                ?>
                                <?php echo $adm_status == 1 ? 'orphan' : 'not orphan'; ?>
                            </td> -->                            
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <?php echo get_phrase('action');?> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT MARKSHEET LINK  -->
                                        <!-- <li>
                                            <a href="<?php echo site_url('admin/student_marksheet/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('mark_sheet');?>
                                                </a>
                                        </li> -->

                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_profile/'.$row['student_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['student_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT ID CARD LINK  -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/student_id/'.$row['student_id']);?>');">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_id');?>
                                            </a>
                                        </li>

                                        <!-- STUDENT REPORT CARD LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_statement/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('certificate');?>
                                                </a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('admin/delete_student/'.$row['student_id'].'/'.$class_id);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

            </div>
        <?php
            $query = $this->db->get_where('section' , array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
                foreach ($sections as $row):
        ?>
            <div class="tab-pane" id="<?php echo $row['section_id'];?>">

                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id_no');?></div></th>
                          <!--  <th width="80"><div><?php echo get_phrase('photo');?></div></th> -->
                            <th><div><?php echo get_phrase('name_in_arabic');?></div></th>
                            <!-- <th class="span3"><div><?php echo get_phrase('address');?></div></th> -->
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('joining_year');?></div></th>
                            <th><div><?php echo get_phrase('date_of_birth');?></div></th>
                            <!-- <th><div><?php echo get_phrase('status');?></div></th> -->
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $students   =   $this->db->get_where('enroll' , array(
                                    'class_id'=>$class_id , 'section_id' => $row['section_id'] , 'year' => $running_year
                                ))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $this->db->get_where('student' , array(
                                    'student_id' => $row['student_id']
                                ))->row()->student_code;?></td>
                           <!-- <td><img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="img-circle" width="30" /></td> -->
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->ar_name;
                                ?>
                            </td>
                            <!-- <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->address;
                                ?>
                            </td> -->
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->phone;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->joining_year;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->birthday;
                                ?>
                            </td>
                            <!-- <td>
                                <?php
                                    $adm_status = $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->status;
                                ?>
                                <?php echo $adm_status == 1 ? 'orphan' : 'not orphan'; ?>
                            </td> -->                             
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <?php echo get_phrase('action');?><span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT MARKSHEET LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_marksheet/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('mark_sheet');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT REPORT CARD LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_statement/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('certificate');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_profile/'.$row['student_id']);?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/student_id/'.$row['student_id']);?>');">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_id');?>
                                            </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['student_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                            <?php endforeach;?>
                    </tbody>
                </table>

            </div>
                <?php endforeach;?>
            <?php endif;?>
            <div class="tab-pane" id="orphan">
        <?php
            #$sections = $this->db->get_where('student' , array('class_id' => $class_id, 'status' => 1))->result_array();
            $orphans = $this->db->get_where('student' , array('class_id' => $class_id, 'status' => 1))->result_array();
            if (count($orphans) > 0): ?>            
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id_no');?></div></th>
                            <!-- <th width="80"><div><?php echo get_phrase('photo');?></div></th> -->
                            <th><div><?php echo get_phrase('name_in_arabic');?></div></th>
                            <!-- <th class="span3"><div><?php echo get_phrase('address');?></div></th> -->
                            <th><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('joining_year');?></div></th>
                            <th><div><?php echo get_phrase('date_of_birth');?></div></th>
                            <!-- <th><div><?php echo get_phrase('status');?></div></th> -->
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>                                    
                    <?php foreach ($orphans as $row): ?>
                        <?php
                                // $students   =   $this->db->get_where('student' , array(
                                //     'student_id'=>$class_id
                                // ))->result_array();
                                // var_dump(count($students));
                                #foreach($students as $student):?>
                                <?php #var_dump($student); ?>
                            <?php #endforeach;?>
                        <tr>
                            <td><?php echo $row['student_code'];?></td>
                            <!-- <td><img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="img-circle" width="30" /></td> -->
                            <td>
                                <?php echo $row['ar_name'];?>
                            </td>
                            <!-- <td>
                                <?php
                                    // echo $this->db->get_where('student' , array(
                                    //     'student_id' => $row['student_id']
                                    // ))->row()->address;
                                ?>
                                <?php echo $row['address'];?>
                            </td> -->
                            <td>
                                <?php
                                    // echo $this->db->get_where('student' , array(
                                    //     'student_id' => $row['student_id']
                                    // ))->row()->phone;
                                ?>
                                <?php echo $row['phone'];?>
                            </td>
                            <td>
                                <?php
                                    echo $row['joining_year'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['birthday'];
                                ?>
                            </td>
                            <!-- <td>
                                <?php
                                    $adm_status = $this->db->get_where('student' , array(
                                        'student_id' => $row['student_id']
                                    ))->row()->status;
                                ?>
                                <?php echo $adm_status == 1 ? 'orphan' : 'not orphan'; ?>
                            </td> -->
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <?php echo get_phrase('action');?><span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT MARKSHEET LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_marksheet/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('mark_sheet');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT REPORT CARD LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_statement/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('certificate');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_profile/'.$row['student_id']);?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/student_id/'.$row['student_id']);?>');">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_id');?>
                                            </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['student_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>         
            <?php else :  ?>
                No orphans
        <?php endif;?>
            </div>
        </div>


    </div>
</div>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($)
	{


		// var datatable = $("#table_export").dataTable({
		// 	"sPaginationType": "bootstrap",
		// 	"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
		// 	"oTableTools": {
		// 		"aButtons": [

		// 			{
		// 				"sExtends": "xls",
		// 				"mColumns": [0, 2, 3, 4, 5]
		// 			},
		// 			{
		// 				"sExtends": "pdf",
		// 				"mColumns": [0, 2, 3, 4, 5]
		// 			},
		// 			{
		// 				"sExtends": "print",
		// 				"fnSetText"	   : "Press 'esc' to return",
		// 				"fnClick": function (nButton, oConfig) {
		// 					datatable.fnSetColumnVis(1, false);
		// 					datatable.fnSetColumnVis(5, false);

		// 					this.fnPrint( true, oConfig );

		// 					window.print();

		// 					$(window).keyup(function(e) {
		// 						  if (e.which == 27) {
		// 							  datatable.fnSetColumnVis(1, true);
		// 							  datatable.fnSetColumnVis(5, true);
		// 						  }
		// 					});
		// 				},

		// 			},
		// 		]
		// 	},

		// });

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>
