<hr />
<div class="row">
    <div class="col-md-12">

        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list2" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('Teachers'); ?>
                </a>
            </li>
            <li>
                <a href="#list" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('Employees'); ?>
                </a>
            </li>
            <li>
                <a href="#list3" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('student_level'); ?>
                </a>
            </li>
            <li>
                <a href="#list4" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('student_bus'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>


        <div class="tab-content">
         <!----TO NUMBER FORM STARTS---->
         

    <!----TO PRINt TEACHERS---->
    <div class="tab-pane box active" id="list2" style="padding: 5px">
        <div class="box-content">
            <?php echo form_open(site_url('admin/print_teacher_view') , array(
              'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
              'target' => '_top')); ?>
              <div class="form-group">
                 Click to print list of teachers.
                 
            </div>
           
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                <button type="submit" id="submit_button" formtarget="_blank" class="btn btn-info"><?php echo get_phrase('print'); ?></button>
              <input type="button" onclick="location.href='export_teacher_view';" name="print_button" class="btn btn-info" formtarget ="_blank" value="<?php echo get_phrase('export');?>">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<!----TO PRINT TEACHERS ENDS-->
<!----TO CPRINT EMPLOYEES---->
    <div class="tab-pane box" id="list" style="padding: 5px">
        <div class="box-content">
            <?php echo form_open(site_url('admin/print_employee_view') , array(
              'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
              'target' => '_top')); ?>
              <div class="form-group">
                 Click to print list of employees.
                 
            </div>
           
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                <button type="submit" id="submit_button" formtarget="_blank" class="btn btn-info"><?php echo get_phrase('print'); ?></button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<!----TO CATEGORY FORM ENDS-->

<!----TO LEVEL FORM STARTS---->
<div class="tab-pane box" id="list3" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(site_url('admin/print_student_class') , array(
          'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
          'target' => '_top')); ?>
          <div class="form-group">
             <?php 
             $sql='SELECT `class_id`,`name` FROM `class`';
             $query = $this->db->query($sql);
             ?>
             <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('select_level');?></label>
             <div class="col-sm-5">
                <select id="select_level" name="select_level" class="form-control">
                  <option value=""><?php echo get_phrase('select');?></option>
                  <?php
                  $class_details = $query->result();                                
                  foreach($query->result_array() as $row):
                      ?>
                      <option value="<?php echo $row['class_id'];?>" ><?php echo get_phrase($row['name']); ?></option>
                  <?php endforeach;?>
              </select>
          </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" id="submit_button" formtarget="_blank" class="btn btn-info"><?php echo get_phrase('print'); ?></button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
</div>
<!----TO LEVEL FORM ENDS-->

<!----TO BUS FORM STARTS---->
<div class="tab-pane box" id="list4" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(site_url('admin/print_student_bus') , array(
          'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
          'target' => '_top')); ?>
          <div class="form-group">
             <?php 
             $sql='SELECT `transport_id`,`route_name` FROM `transport`';
             $query = $this->db->query($sql);
             ?>
             <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('select_bus');?></label>
             <div class="col-sm-5">
                <select id="select_bus" name="select_bus" class="form-control">
                  <option value=""><?php echo get_phrase('select');?></option>
                  <?php
                  $transport_details = $query->result();                                
                  foreach($query->result_array() as $row):
                      ?>
                      <option value="<?php echo $row['transport_id'];?>" ><?php echo $row['route_name'] ?></option>
                  <?php endforeach;?>
              </select>
          </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" id="submit_button" formtarget="_blank" class="btn btn-info"><?php echo get_phrase('print'); ?></button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
</div>
<!----TO BUS FORM ENDS-->            
</div>

</div>
</div>
</div>
<script type="text/javascript">
  function newNumberField(no){    
    $(no).removeClass('hidden');
  }
  function deleteNumberField(no){   
    $(no).find('input:text').val('');
    $(no).addClass('hidden');
  }
</script>