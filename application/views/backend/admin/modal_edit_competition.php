<?php
$edit_data      =   $this->db->get_where('competition' , array('id' => $param2) )->result_array();
foreach ( $edit_data as $row):
    $links_json = $row['social_links'];
    $links = json_decode($links_json);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Edit Competition";?>
                </div>
            </div>
            <div class="panel-body">
                    <?php echo form_open(site_url('admin/competition/do_update/'.$row['id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                                

                          
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Name";?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Link";?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="link" value="<?php echo $row['link'];?>"/>
                                </div>
                            </div>
                        

                                                        

                                                   


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo "Edit Competition"?></button>
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
