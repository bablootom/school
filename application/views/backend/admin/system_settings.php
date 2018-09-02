<hr />

    <div class="row">
    <?php echo form_open(site_url('admin/system_settings/do_update') ,
      array('class' => 'form-horizontal form-groups-bordered','target'=>'_top'));?>
        <div class="col-md-6">

            <div class="panel panel-primary" >

                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo get_phrase('system_settings');?>
                    </div>
                </div>

                <div class="panel-body">

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_name');?></label>
                      <div class="col-sm-9">
                          <input type="text" required="true" class="form-control" name="system_name"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_title');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_title"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_title'))->row()->description;?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="address"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'address'))->row()->description;?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'phone'))->row()->description;?>" required>
                      </div>
                  </div>

                  <!-- <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('paypal_email');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="paypal_email"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'paypal_email'))->row()->description;?>">
                      </div>
                  </div> -->

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('currency');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="currency"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'currency'))->row()->description;?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_email"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_email'))->row()->description;?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('running_session');?></label>
                      <div class="col-sm-9">
                          <select name="running_year" class="form-control selectboxit">
                          <?php $running_year = $this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;?>
                          <option value="" disabled="true"><?php echo get_phrase('select_running_session');?></option>
                          <?php for($i = 0; $i < 10; $i++):?>
                              <option value="<?php echo (2016+$i);?>-<?php echo (2016+$i+1);?>"
                                <?php if($running_year == (2016+$i).'-'.(2016+$i+1)) echo 'selected';?>>
                                  <?php echo (2016+$i);?>-<?php echo (2016+$i+1);?>
                              </option>
                          <?php endfor;?>
                          </select>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('language');?></label>
                      <div class="col-sm-9">
                          <select name="language" class="form-control selectboxit">
                                <?php
									$fields = $this->db->list_fields('language');
									foreach ($fields as $field)
									{
										if ($field == 'phrase_id' || $field == 'phrase')continue;

										$current_default_language	=	$this->db->get_where('settings' , array('type'=>'language'))->row()->description;
										?>
                                		<option value="<?php echo $field;?>"
                                        	<?php if ($current_default_language == $field)echo 'selected';?>> <?php echo $field;?> </option>
                                        <?php
									}
									?>
                           </select>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('text_align');?></label>
                      <div class="col-sm-9">
                          <select name="text_align" class="form-control selectboxit">
                          	  <?php $text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;?>
                              <option value="left-to-right" <?php if ($text_align == 'left-to-right')echo 'selected';?>> left-to-right</option>
                              <option value="right-to-left" <?php if ($text_align == 'right-to-left')echo 'selected';?>> right-to-left</option>
                          </select>
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('purchase_code');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="purchase_code"
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'purchase_code'))->row()->description;?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('save');?></button>
                    </div>
                  </div>
                    <?php echo form_close();?>

                </div>

            </div>

			<div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('update_product');?>
                </div>
            </div>


            <div class="panel-body form-horizontal form-groups-bordered">
                <?php echo form_open(site_url('updater/update') , array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('file'); ?></label>

                        <div class="col-sm-5">

                            <input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i><?php echo get_phrase('browse'); ?>" />

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <input type="submit" class="btn btn-info" value="<?php echo get_phrase('install_update'); ?>" />
                        </div>
                    </div>

                <?php echo form_close(); ?>
            </div>

        </div>

        </div>

            <?php echo form_open(site_url('admin/system_settings/upload_logo') , array(
            'class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>

              <div class="col-md-6">
                <div class="panel panel-primary" >

                  <div class="panel-heading">
                      <div class="panel-title">
                          <?php echo get_phrase('upload_logo');?>
                      </div>
                  </div>

                  <div class="panel-body">


                      <div class="form-group">
                          <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

                          <div class="col-sm-9">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                      <img src="<?php echo base_url();?>uploads/logo.png" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                  <div>
                                      <span class="btn btn-white btn-file">
                                          <span class="fileinput-new"><?php echo get_phrase('select');?></span>
                                          <span class="fileinput-exists"><?php echo get_phrase('change');?></span>
                                          <input type="file" name="userfile" accept="image/*" required="required">
                                      </span>
                                      <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput"><?php echo get_phrase('remove');?></a>
                                  </div>
                              </div>
                          </div>
                      </div>


                    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-info"><?php echo get_phrase('upload');?></button>
                      </div>
                    </div>

                  </div>

              </div>
              </div>

            <?php echo form_close();?>


        </div>

    </div>
