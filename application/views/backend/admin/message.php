<hr />
<div class="row">
    <div class="col-md-12">

        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('to_a_number'); ?>
                </a>
            </li>
            <li>
                <a href="#list2" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('to_a_category'); ?>
                </a>
            </li>
            <li>
                <a href="#list3" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('to_a_level'); ?>
                </a>
            </li>
            <li>
                <a href="#list4" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('to_a_bus'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>


        <div class="tab-content">
         <!----TO NUMBER FORM STARTS---->
         <div class="tab-pane box active" id="list" style="padding: 5px">
            <div class="box-content">
                <?php echo form_open(site_url('admin/smsplatform/tonum') , array(
                  'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
                  'target' => '_top')); ?>
                <div id="no-1" class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('phone_1'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="sms_num_1" data-validate="required" data-message-required="<?php echo get_phrase('please_input_number');?>" value="" autofocus required>
                        <button type="button" class="btn btn-sm btn-primary" onclick="newNumberField('#no-2')"><i class="entypo-plus-circled"></i>Add New Number</button>                        
                    </div>
                </div>
                <div id="no-2" class="form-group hidden">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('phone_2'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="sms_num_2"  />
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteNumberField('#no-2')">delete</button>
                        <button type="button" class="btn btn-sm btn-primary" onclick="newNumberField('#no-3')"><i class="entypo-plus-circled"></i>Add New Number</button>
                    </div>
                </div>
                <div id="no-3" class="form-group hidden">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('phone_3'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="sms_num_3" />
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteNumberField('#no-3')">Delete</button>
                        <button type="button" class="btn btn-sm btn-primary" onclick="newNumberField('#no-4')"><i class="entypo-plus-circled"></i>Add New Number</button>
                    </div>
                </div>
                <div id="no-4" class="form-group hidden">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('phone_4'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="sms_num_4"  />
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteNumberField('#no-4')">Delete</button>
                        <button type="button" class="btn btn-sm btn-primary" onclick="newNumberField('#no-5')"><i class="entypo-plus-circled"></i>Add New Number</button>
                    </div>
                </div>
                <div id="no-5" class="form-group hidden">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('phone_5'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="sms_num_5" />
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteNumberField('#no-5')">Delete</button>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"><?php echo get_phrase('message'); ?></label>
                  <div class="col-sm-5">
                      <textarea class="form-control" rows="5" name="sms_message" data-validate="required" data-message-required="<?php echo get_phrase('please_input_message');?>" value="" autofocus required></textarea>
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">
                    <button type="submit" id="submit_button" class="btn btn-info"><?php echo get_phrase('send_SMS'); ?></button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <!----TO NUMBER FORM ENDS-->

    <!----TO CATEGORY FORM STARTS---->
    <div class="tab-pane box" id="list2" style="padding: 5px">
        <div class="box-content">
            <?php echo form_open(site_url('admin/smsplatform/tocat') , array(
              'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
              'target' => '_top')); ?>
              <div class="form-group">
                 <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('select_category');?></label>
                 <div class="col-sm-5">
                    <select name="select_category" class="form-control">
                        <option value=""><?php echo get_phrase('select');?></option>
                        <option value="all"><?php echo get_phrase('all');?></option>
                        <option value="students"><?php echo get_phrase('students');?></option>
                        <option value="teachers"><?php echo get_phrase('teachers');?></option>
                        <option value="employees"><?php echo get_phrase('employees');?></option>
                        <option value="parents"><?php echo get_phrase('parents');?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"><?php echo get_phrase('message'); ?></label>
              <div class="col-sm-5">
                  <textarea class="form-control" rows="5" name="sms_message" data-validate="required" data-message-required="<?php echo get_phrase('please_input_message');?>" value="" autofocus required></textarea>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                <button type="submit" id="submit_button" class="btn btn-info"><?php echo get_phrase('send_SMS'); ?></button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<!----TO CATEGORY FORM ENDS-->

<!----TO LEVEL FORM STARTS---->
<div class="tab-pane box" id="list3" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(site_url('admin/smsplatform/tolevel') , array(
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
          <label class="col-sm-3 control-label"><?php echo get_phrase('message'); ?></label>
          <div class="col-sm-5">
              <textarea class="form-control" rows="5" name="sms_message" data-validate="required" data-message-required="<?php echo get_phrase('please_input_message');?>" value="" autofocus required></textarea>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" id="submit_button" class="btn btn-info"><?php echo get_phrase('send_SMS'); ?></button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
</div>
<!----TO LEVEL FORM ENDS-->

<!----TO BUS FORM STARTS---->
<div class="tab-pane box" id="list4" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(site_url('admin/smsplatform/tobus') , array(
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
          <label class="col-sm-3 control-label"><?php echo get_phrase('message'); ?></label>
          <div class="col-sm-5">
              <textarea class="form-control" rows="5" name="sms_message" data-validate="required" data-message-required="<?php echo get_phrase('please_input_message');?>" value="" autofocus required></textarea>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" id="submit_button" class="btn btn-info"><?php echo get_phrase('send_SMS'); ?></button>
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