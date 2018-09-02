<hr />
<div class="row">
    <div class="col-md-12">

        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('teacher'); ?>
                </a>
            </li>
            <li>
                <a href="#list2" data-toggle="tab">
                    <i class="entypo-menu"></i>
                    <?php echo get_phrase('employee'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>


        <div class="tab-content">
            <!----TEACHER FORM STARTS---->
            <div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(site_url('admin/smsplatform/tonum') , array(
                      'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
                      'target' => '_top')); 

                      $query = $this->db->query("select ar_name,rexpiry_date from teacher order by rexpiry_date");

                        foreach ($query->result() as $row)
                        {
                            $nameis = $row->ar_name;
                            $date1 = $row->rexpiry_date;
                            $date2 = date("Y-m-d");
                            $query2 = "SELECT DATEDIFF ('$date1','$date2') AS dif";
                            $result = $this->db->query($query2);
                            if($result){
                                $res=$result->result_array();
                                $index=$res[0]["dif"];
                                if($index<30){
                                    ?>
                                    <div id="no-1" class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo $nameis; ?></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="visa_expiry_date" value="<?php echo $index; ?>" readonly>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                                       
                        }
                    
                        ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!----TEACHER FORM ENDS-->

            <!----EMPLOYEE FORM STARTS---->
            <div class="tab-pane box" id="list2" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(site_url('admin/smsplatform/tonum') , array(
                      'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
                      'target' => '_top')); 

                      $query = $this->db->query("select ar_name,rexpiry_date from employee order by rexpiry_date");
                      
                        foreach ($query->result() as $row)
                        {
                            $nameis = $row->ar_name;
                            $date1 = $row->rexpiry_date;
                            $date2 = date("Y-m-d");
                            $query2 = "SELECT DATEDIFF ('$date1','$date2') AS dif";
                            $result = $this->db->query($query2);
                            if($result){
                                $res=$result->result_array();
                                $index=$res[0]["dif"];
                                if($index<30){
                                    ?>
                                    <div id="no-1" class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo $nameis; ?></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="visa_expiry_date" value="<?php echo $index; ?>" readonly>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                                       
                        }
                    
                        ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!----EMPLOYEE FORM ENDS-->
        </div>
    </div>
</div>
</div>
