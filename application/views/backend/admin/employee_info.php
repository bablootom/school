<hr />
<a href="<?php echo site_url('admin/employee_add');?>"
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo get_phrase('add_new_employee');?>
    </a>
<br>

<div class="row">
    <div class="col-md-12">

        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#home" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-users"></i></span>
                    <span class="hidden-xs"><?php echo get_phrase('all_employees');?></span>
                </a>
            </li>
        <?php
            $query = $this->db->get_where('section' , array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
                foreach ($sections as $row):
        ?>
            <li>
                <a href="#<?php echo $row['section_id'];?>" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                    <span class="hidden-xs"><?php echo get_phrase('section');?> <?php echo $row['name'];?> ( <?php echo $row['nick_name'];?> )</span>
                </a>
            </li>
        <?php endforeach;?>
        <?php endif;?>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">

                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('ID');?></div></th>
                            <th><div><?php echo get_phrase('name_in_arabic');?></div></th>
                            <th><div><?php echo get_phrase('name_in_english');?></div></th>
                            <th class="span3"><div><?php echo get_phrase('phone');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $employee   =   $this->db->get('employee')->result_array();
                                foreach($employee as $row):?>
                        <tr>
                            <td><?php echo $row["Id_no"]?></td>
                           
                            <td><?php echo $row["ar_name"]?>
                               
                            </td>
                            <td><?php echo $row["en_name"]?>
                                
                            </td>
                            <td><?php echo $row["tel"]?>
                               
                            </td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <?php echo get_phrase('action');?> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                      
                                     <!--    <li>
                                            <a href="<?php #echo site_url('admin/employee_edit/'.$row['emp_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php #echo get_phrase('employee edit');?>
                                                </a>
                                        </li>
                                      
                                        <li>
                                            <a href="<?php echo site_url('admin/employee_profile/'.$row['emp_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>-->
                                         <li>
                                            <a href="<?php echo site_url('admin/employee_edit/'.$row['emp_id']);?>">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('admin/delete_employee/'.$row['emp_id']);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                         <!--  <li>
                                            <a href="<?php #echo site_url('admin/delete/'.$row['emp_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php #echo get_phrase('delete');?>
                                                </a>
                                        </li> -->
                                        <li>
                                          <a href="<?php echo site_url('admin/print_employee/'.$row['emp_id']);?>">
                                            <i class="entypo-print"></i>
                                              <?php echo get_phrase('print');?>
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
        
        </div>


    </div>
</div>


<!-- <script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"></script> -->
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
		// 				"mColumns": [1,2]
		// 			},
		// 			{
		// 				"sExtends": "print",
		// 				"fnSetText"	   : "Press 'esc' to return",
		// 				"fnClick": function (nButton, oConfig) {
		// 					datatable.fnSetColumnVis(0, false);
		// 					datatable.fnSetColumnVis(3, false);
							
		// 					this.fnPrint( true, oConfig );
							
		// 					window.print();
							
		// 					$(window).keyup(function(e) {
		// 						  if (e.which == 27) {
		// 							  datatable.fnSetColumnVis(0, true);
		// 							  datatable.fnSetColumnVis(3, true);
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
