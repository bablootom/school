<?php
// $edit_data		=	$this->db->get_where('employee' , array('emp_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
	// $links_json = $row['social_links'];
	// $links = json_decode($links_json);
?>
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<!-- <div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_employee');?>
            	</div> -->
            </div>
			<div class="panel-body">
                    <?php echo form_open(site_url('admin/employee/do_update/'.$row['emp_id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                                <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

                                <div class="col-sm-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                            <img src="<?php echo $this->crud_model->get_image_url('employee' , $row['emp_id']);?>" alt="...">
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
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('functional_number');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="Id_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['Id_no'];?>" autofocus required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name_in_arabic');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="ar_name" value="<?php echo $row['ar_name'];?>" data-validate="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name_in_english');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="en_name" value="<?php echo $row['en_name'];?>" data-validate="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('social_status');?></label>
                        
                        <div class="col-sm-5">
                            <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                ))->row()->social_status;

                                if($status=="Married"){ ?>
                                    <select name="social_status" class="form-control" required>
                                        <option value="" disabled><?php echo get_phrase('select');?></option>
                                        <option value="Married" selected>متزوج</option>
                                        <option value="Unmarried">أعزب</option>
                                        <option value="Absolute">مطلق</option>
                                    </select>

                                <?php }
                                elseif ($status=="Unmarried") { ?>
                                    <select name="social_status" class="form-control" required>
                                        <option value="" disabled><?php echo get_phrase('select');?></option>
                                        <option value="Married">متزوج</option>
                                        <option value="Unmarried" selected>أعزب</option>
                                        <option value="Absolute">مطلق</option>
                                    </select>
                                <?php }
                                elseif ($status=="Absolute") { ?>
                                    <select name="social_status" class="form-control" required>
                                        <option value="" disabled><?php echo get_phrase('select');?></option>
                                        <option value="Married">متزوج</option>
                                        <option value="Unmarried">أعزب</option>
                                        <option value="Absolute" selected>مطلق</option>
                                    </select>
                                <?php }

                                 ?>
                                    
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nationality');?></label>
                        <div class="col-sm-5">
                        <select class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('nationality');?>" required>
                                <option value="<?php echo $this->db->get_where('employee' , array('emp_id' => $row['emp_id']))->row()->nationality; ?>"><?php echo $this->db->get_where('employee' , array('emp_id' => $row['emp_id']))->row()->nationality; ?></option>
                                <option value="Afghanistan">Afghanistan</option> 
                                <option value="Albania">Albania</option> 
                                <option value="Algeria">Algeria</option> 
                                <option value="American Samoa">American Samoa</option> 
                                <option value="Andorra">Andorra</option> 
                                <option value="Angola">Angola</option> 
                                <option value="Anguilla">Anguilla</option> 
                                <option value="Antarctica">Antarctica</option> 
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                <option value="Argentina">Argentina</option> 
                                <option value="Armenia">Armenia</option> 
                                <option value="Aruba">Aruba</option> 
                                <option value="Australia">Australia</option> 
                                <option value="Austria">Austria</option> 
                                <option value="Azerbaijan">Azerbaijan</option> 
                                <option value="Bahamas">Bahamas</option> 
                                <option value="Bahrain">Bahrain</option> 
                                <option value="Bangladesh">Bangladesh</option> 
                                <option value="Barbados">Barbados</option> 
                                <option value="Belarus">Belarus</option> 
                                <option value="Belgium">Belgium</option> 
                                <option value="Belize">Belize</option> 
                                <option value="Benin">Benin</option> 
                                <option value="Bermuda">Bermuda</option> 
                                <option value="Bhutan">Bhutan</option> 
                                <option value="Bolivia">Bolivia</option> 
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                <option value="Botswana">Botswana</option> 
                                <option value="Bouvet Island">Bouvet Island</option> 
                                <option value="Brazil">Brazil</option> 
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                <option value="Bulgaria">Bulgaria</option> 
                                <option value="Burkina Faso">Burkina Faso</option> 
                                <option value="Burundi">Burundi</option> 
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option> 
                                <option value="Canada">Canada</option> 
                                <option value="Cape Verde">Cape Verde</option> 
                                <option value="Cayman Islands">Cayman Islands</option> 
                                <option value="Central African Republic">Central African Republic</option> 
                                <option value="Chad">Chad</option> 
                                <option value="Chile">Chile</option> 
                                <option value="China">China</option> 
                                <option value="Christmas Island">Christmas Island</option> 
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                <option value="Colombia">Colombia</option> 
                                <option value="Comoros">Comoros</option> 
                                <option value="Congo">Congo</option> 
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                <option value="Cook Islands">Cook Islands</option> 
                                <option value="Costa Rica">Costa Rica</option> 
                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                <option value="Croatia">Croatia</option> 
                                <option value="Cuba">Cuba</option> 
                                <option value="Cyprus">Cyprus</option> 
                                <option value="Czech Republic">Czech Republic</option> 
                                <option value="Denmark">Denmark</option> 
                                <option value="Djibouti">Djibouti</option> 
                                <option value="Dominica">Dominica</option> 
                                <option value="Dominican Republic">Dominican Republic</option> 
                                <option value="Ecuador">Ecuador</option> 
                                <option value="Egypt">Egypt</option> 
                                <option value="El Salvador">El Salvador</option> 
                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                <option value="Eritrea">Eritrea</option> 
                                <option value="Estonia">Estonia</option> 
                                <option value="Ethiopia">Ethiopia</option> 
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                <option value="Faroe Islands">Faroe Islands</option> 
                                <option value="Fiji">Fiji</option> 
                                <option value="Finland">Finland</option> 
                                <option value="France">France</option> 
                                <option value="French Guiana">French Guiana</option> 
                                <option value="French Polynesia">French Polynesia</option> 
                                <option value="French Southern Territories">French Southern Territories</option> 
                                <option value="Gabon">Gabon</option> 
                                <option value="Gambia">Gambia</option> 
                                <option value="Georgia">Georgia</option> 
                                <option value="Germany">Germany</option> 
                                <option value="Ghana">Ghana</option> 
                                <option value="Gibraltar">Gibraltar</option> 
                                <option value="Greece">Greece</option> 
                                <option value="Greenland">Greenland</option> 
                                <option value="Grenada">Grenada</option> 
                                <option value="Guadeloupe">Guadeloupe</option> 
                                <option value="Guam">Guam</option> 
                                <option value="Guatemala">Guatemala</option> 
                                <option value="Guinea">Guinea</option> 
                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                <option value="Guyana">Guyana</option> 
                                <option value="Haiti">Haiti</option> 
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                <option value="Honduras">Honduras</option> 
                                <option value="Hong Kong">Hong Kong</option> 
                                <option value="Hungary">Hungary</option> 
                                <option value="Iceland">Iceland</option> 
                                <option value="India">India</option> 
                                <option value="Indonesia">Indonesia</option> 
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                <option value="Iraq">Iraq</option> 
                                <option value="Ireland">Ireland</option> 
                                <option value="Israel">Israel</option> 
                                <option value="Italy">Italy</option> 
                                <option value="Jamaica">Jamaica</option> 
                                <option value="Japan">Japan</option> 
                                <option value="Jordan">Jordan</option> 
                                <option value="Kazakhstan">Kazakhstan</option> 
                                <option value="Kenya">Kenya</option> 
                                <option value="Kiribati">Kiribati</option> 
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                <option value="Kuwait">Kuwait</option> 
                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                <option value="Latvia">Latvia</option> 
                                <option value="Lebanon">Lebanon</option> 
                                <option value="Lesotho">Lesotho</option> 
                                <option value="Liberia">Liberia</option> 
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                <option value="Liechtenstein">Liechtenstein</option> 
                                <option value="Lithuania">Lithuania</option> 
                                <option value="Luxembourg">Luxembourg</option> 
                                <option value="Macao">Macao</option> 
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                <option value="Madagascar">Madagascar</option> 
                                <option value="Malawi">Malawi</option> 
                                <option value="Malaysia">Malaysia</option> 
                                <option value="Maldives">Maldives</option> 
                                <option value="Mali">Mali</option> 
                                <option value="Malta">Malta</option> 
                                <option value="Marshall Islands">Marshall Islands</option> 
                                <option value="Martinique">Martinique</option> 
                                <option value="Mauritania">Mauritania</option> 
                                <option value="Mauritius">Mauritius</option> 
                                <option value="Mayotte">Mayotte</option> 
                                <option value="Mexico">Mexico</option> 
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                <option value="Monaco">Monaco</option> 
                                <option value="Mongolia">Mongolia</option> 
                                <option value="Montserrat">Montserrat</option> 
                                <option value="Morocco">Morocco</option> 
                                <option value="Mozambique">Mozambique</option> 
                                <option value="Myanmar">Myanmar</option> 
                                <option value="Namibia">Namibia</option> 
                                <option value="Nauru">Nauru</option> 
                                <option value="Nepal">Nepal</option> 
                                <option value="Netherlands">Netherlands</option> 
                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                <option value="New Caledonia">New Caledonia</option> 
                                <option value="New Zealand">New Zealand</option> 
                                <option value="Nicaragua">Nicaragua</option> 
                                <option value="Niger">Niger</option> 
                                <option value="Nigeria">Nigeria</option> 
                                <option value="Niue">Niue</option> 
                                <option value="Norfolk Island">Norfolk Island</option> 
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                <option value="Norway">Norway</option> 
                                <option value="Oman">Oman</option> 
                                <option value="Pakistan">Pakistan</option> 
                                <option value="Palau">Palau</option> 
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                <option value="Panama">Panama</option> 
                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                <option value="Paraguay">Paraguay</option> 
                                <option value="Peru">Peru</option> 
                                <option value="Philippines">Philippines</option> 
                                <option value="Pitcairn">Pitcairn</option> 
                                <option value="Poland">Poland</option> 
                                <option value="Portugal">Portugal</option> 
                                <option value="Puerto Rico">Puerto Rico</option> 
                                <option value="Qatar">Qatar</option> 
                                <option value="Reunion">Reunion</option> 
                                <option value="Romania">Romania</option> 
                                <option value="Russian Federation">Russian Federation</option> 
                                <option value="Rwanda">Rwanda</option> 
                                <option value="Saint Helena">Saint Helena</option> 
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                <option value="Saint Lucia">Saint Lucia</option> 
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                <option value="Samoa">Samoa</option> 
                                <option value="San Marino">San Marino</option> 
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                <option value="Senegal">Senegal</option> 
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                <option value="Seychelles">Seychelles</option> 
                                <option value="Sierra Leone">Sierra Leone</option> 
                                <option value="Singapore">Singapore</option> 
                                <option value="Slovakia">Slovakia</option> 
                                <option value="Slovenia">Slovenia</option> 
                                <option value="Solomon Islands">Solomon Islands</option> 
                                <option value="Somalia">Somalia</option> 
                                <option value="South Africa">South Africa</option> 
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                <option value="Spain">Spain</option> 
                                <option value="Sri Lanka">Sri Lanka</option> 
                                <option value="Sudan">Sudan</option> 
                                <option value="Suriname">Suriname</option> 
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                <option value="Swaziland">Swaziland</option> 
                                <option value="Sweden">Sweden</option> 
                                <option value="Switzerland">Switzerland</option> 
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                <option value="Tajikistan">Tajikistan</option> 
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                <option value="Thailand">Thailand</option> 
                                <option value="Timor-leste">Timor-leste</option> 
                                <option value="Togo">Togo</option> 
                                <option value="Tokelau">Tokelau</option> 
                                <option value="Tonga">Tonga</option> 
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                <option value="Tunisia">Tunisia</option> 
                                <option value="Turkey">Turkey</option> 
                                <option value="Turkmenistan">Turkmenistan</option> 
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                <option value="Tuvalu">Tuvalu</option> 
                                <option value="Uganda">Uganda</option> 
                                <option value="Ukraine">Ukraine</option> 
                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="United States">United States</option> 
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                <option value="Uruguay">Uruguay</option> 
                                <option value="Uzbekistan">Uzbekistan</option> 
                                <option value="Vanuatu">Vanuatu</option> 
                                <option value="Venezuela">Venezuela</option> 
                                <option value="Viet Nam">Viet Nam</option> 
                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                <option value="Western Sahara">Western Sahara</option> 
                                <option value="Yemen">Yemen</option> 
                                <option value="Zambia">Zambia</option> 
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>                               
                        </div>
                    </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('date_of_birth');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" placeholder="mm/dd/yyyy" name="dob" value="<?php echo $row['dob'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>

                                <div class="col-sm-5">
                                    <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                    ))->row()->gender;

                                    if($status=="male"){ ?>
                                        <select name="gender" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('gender');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="male" selected><?php echo get_phrase('male');?></option>
                                            <option value="female"><?php echo get_phrase('female');?></option>
                                        </select>

                                    <?php }
                                    elseif ($status=="female") { ?>
                                        <select name="gender" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('gender');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="male" ><?php echo get_phrase('male');?></option>
                                            <option value="female" selected><?php echo get_phrase('female');?></option>
                                        </select>
                                    <?php }

                                     ?>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('qualification');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="qualification" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['qualification'];?>" autofocus required>
                                </div>
                            </div>


                            <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('amount_of_conservation');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="amount_of_conservation" value="<?php echo $row['amount_of_conservation'];?>">
                                </div>

                                
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('department_authorization');?></label>

                                <div class="col-sm-5">
                                    <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                    ))->row()->department_authorization;

                                    if($status=="معتمد"){ ?>
                                        <select name="department_authorization" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="معتمد" selected>معتمد</option>
                                            <option value="غير معتمد">غير معتمد</option>
                                            <option value="مختبر">مختبر</option>
                                            <option value="غير مختبر">غير مختبر</option>
                                        </select>

                                    <?php }
                                    elseif ($status=="غير معتمد") { ?>
                                        <select name="department_authorization" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="معتمد">معتمد</option>
                                            <option value="غير معتمد" selected>غير معتمد</option>
                                            <option value="مختبر">مختبر</option>
                                            <option value="غير مختبر">غير مختبر</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="مختبر") { ?>
                                        <select name="department_authorization" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="معتمد">معتمد</option>
                                            <option value="غير معتمد">غير معتمد</option>
                                            <option value="مختبر" selected>مختبر</option>
                                            <option value="غير مختبر">غير مختبر</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="غير مختبر") { ?>
                                        <select name="department_authorization" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="معتمد">معتمد</option>
                                            <option value="غير معتمد">غير معتمد</option>
                                            <option value="مختبر">مختبر</option>
                                            <option value="غير مختبر" selected>غير مختبر</option>
                                        </select>
                                    <?php }

                                     ?>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('job_title');?></label>
                                <div class="col-sm-5">
                                    <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                    ))->row()->job_title;
                                    if($status=="إداري"){ ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="إداري" selected>إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>

                                    <?php }
                                    elseif ($status=="مدرس مساعد") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد" selected>مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="عامل نظافة") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة" selected>عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="مدرس مناهج") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج" selected>مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="سائق") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق" selected>سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="حارس") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس" selected>حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="محفظ") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ" selected> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="موظف إستقبال") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال" selected>موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="سكرتيرة") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة" selected> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="مشرف فني") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني" selected>مشرف فني</option>
                                            <option value="عامل">عامل</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="عامل") { ?>
                                        <select name="job_title" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                           <option value="إداري">إداري</option>
                                            <option value="مدرس مساعد">مدرس مساعد</option>
                                            <option value="عامل نظافة">عامل نظافة</option>
                                            <option value="مدرس مناهج">مدرس مناهج</option>
                                            <option value="سائق">سائق</option>
                                            <option value="حارس">حارس</option>
                                            <option value="محفظ"> محفظ</option>
                                            <option value="موظف إستقبال">موظف إستقبال</option>
                                            <option value=" سكرتيرة"> سكرتيرة</option>
                                            <option value="مشرف فني">مشرف فني</option>
                                            <option value="عامل" selected>عامل</option>
                                        </select>
                                    <?php }

                                     ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" data-validate="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('joining_year');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="joining_year" value="<?php echo $row['joining_year'];?>" data-start-view="2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('living');?></label>

                                <div class="col-sm-5">
                                    <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                    ))->row()->living;

                                    if($status=="ابوظبی"){ ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی" selected>ابوظبی</option>
                                            <option value="دبي">دبي</option>
                                            <option value="الشارقة">الشارقة</option>
                                            <option value="عجمان">عجمان</option>
                                            <option value="رأس الخیمه">رأس الخیمه</option>
                                            <option value="الفجيرة">الفجيرة</option>                                
                                            <option value="ام ال کویین">ام ال کویین</option>
                                        </select>

                                    <?php }
                                    elseif ($status=="دبي") { ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی">ابوظبی</option>
                                            <option value="دبي" selected>دبي</option>
                                            <option value="الشارقة">الشارقة</option>
                                            <option value="عجمان">عجمان</option>
                                            <option value="رأس الخیمه">رأس الخیمه</option>
                                            <option value="الفجيرة">الفجيرة</option>                                
                                            <option value="ام ال کویین">ام ال کویین</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="الشارقة") { ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی">ابوظبی</option>
                                            <option value="دبي">دبي</option>
                                            <option value="الشارقة" selected>الشارقة</option>
                                            <option value="عجمان">عجمان</option>
                                            <option value="رأس الخیمه">رأس الخیمه</option>
                                            <option value="الفجيرة">الفجيرة</option>                                
                                            <option value="ام ال کویین">ام ال کویین</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="عجمان") { ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی">ابوظبی</option>
                                            <option value="دبي">دبي</option>
                                            <option value="الشارقة">الشارقة</option>
                                            <option value="عجمان" selected>عجمان</option>
                                            <option value="رأس الخیمه">رأس الخیمه</option>
                                            <option value="الفجيرة">الفجيرة</option>                                
                                            <option value="ام ال کویین">ام ال کویین</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="رأس الخیمه") { ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی">ابوظبی</option>
                                            <option value="دبي">دبي</option>
                                            <option value="الشارقة">الشارقة</option>
                                            <option value="عجمان">عجمان</option>
                                            <option value="رأس الخیمه" selected>رأس الخیمه</option>
                                            <option value="الفجيرة">الفجيرة</option>                                
                                            <option value="ام ال کویین">ام ال کویین</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="الفجيرة") { ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی">ابوظبی</option>
                                            <option value="دبي">دبي</option>
                                            <option value="الشارقة">الشارقة</option>
                                            <option value="عجمان">عجمان</option>
                                            <option value="رأس الخیمه">رأس الخیمه</option>
                                            <option value="الفجيرة" selected>الفجيرة</option>                                
                                            <option value="ام ال کویین">ام ال کویین</option>
                                        </select>
                                    <?php }
                                    elseif ($status=="ام ال کویین") { ?>
                                        <select name="living" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="ابوظبی">ابوظبی</option>
                                            <option value="دبي">دبي</option>
                                            <option value="الشارقة">الشارقة</option>
                                            <option value="عجمان">عجمان</option>
                                            <option value="رأس الخیمه">رأس الخیمه</option>
                                            <option value="الفجيرة">الفجيرة</option>                                
                                            <option value="ام ال کویین" selected>ام ال کویین</option>
                                        </select>
                                    <?php }

                                     ?>
                                </div>

                                
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('passport_number');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="passport_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['passport_no'];?>" autofocus required>
                                </div>

                                
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('passport_expiry_date');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="pexpiry_date" value="<?php echo $row['pexpiry_date'];?>" data-start-view="2">
                                </div>

                                
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('residency_number');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="residency_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['residency_no'];?>" autofocus required>
                                </div>

                                
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('residency_expiry_date');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rexpiry_date" value="<?php echo $row['rexpiry_date'];?>" data-start-view="2" placeholder="yyyy-mm-dd">
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nearest_person_no');?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nearest_person_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['nearest_person_no'];?>" autofocus required>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('guarantor');?></label>
                                <div class="col-sm-5">
                                    <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                    ))->row()->guarantor;

                                    if($status=="المركز"){ ?>
                                        <select name="guarantor" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('guarantor');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="المركز" selected>المركز</option>
                                            <option value="ذويه">ذويه</option>
                                        </select>

                                    <?php }
                                    elseif ($status=="ذويه") { ?>
                                        <select name="guarantor" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('guarantor');?>" required>
                                            <option value="" disabled><?php echo get_phrase('select');?></option>
                                            <option value="المركز" >المركز</option>
                                            <option value="ذويه" selected>ذويه</option>
                                        </select>
                                    <?php }

                                     ?>                  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('id_no');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="eid_no" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['eid_no'];?>" autofocus required>
                                </div>

                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone_1');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tel" placeholder="05xxxxxxxx" maxlength="10" value="<?php echo $row['tel'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone_2');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tel1" placeholder="05xxxxxxxx" maxlength="10" value="<?php echo $row['tel1'];?>"/>
                                </div>
                            </div>

                            <?php
                                $sql2='SELECT `transport_id`,`route_name` FROM `transport`';
                                $query2 = $this->db->query($sql2);
                                $transport_id =  $this->db->get_where('employee' , array('emp_id' => $row['emp_id']))->row()->transport_id;
                                $route_name =  $this->db->get_where('transport' , array('transport_id' => $transport_id))->result_array();
                                foreach ($route_name as $row2) {
                                    $route_name = $row2['route_name'];
                                }
                                
                            ?>
                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('transportation');?></label>
                                <div class="col-sm-5">
                                    <select name="transport_id" class="form-control" id="transport_id">
                                        <option value="" selected disabled><?php echo $route_name;?></option>
                                        <?php
                                        $transport_details = $query2->result();                                
                                        foreach($query2->result_array() as $row2):
                                            ?>
                                            <option value="<?php echo $row2['transport_id'];?>">
                                            <?php echo $row2['route_name'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('note');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="note" value="<?php echo $row['note'];?>" >
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('branch');?></label>

                            <div class="col-sm-5">
                            <?php $status = $this->db->get_where('employee' , array(
                                    'emp_id' => $row['emp_id']
                                ))->row()->branch;

                                if($status=="1"){ ?>
                                    <select name="branch" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('branch');?>" required>
                                        <option value="" disabled><?php echo get_phrase('select');?></option>
                                        <option value="1" selected><?php echo get_phrase('boys');?></option>
                                        <option value="2"><?php echo get_phrase('girls');?></option>
                                    </select>

                                <?php }
                                elseif ($status=="2") { ?>
                                    <select name="branch" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('branch');?>" required>
                                        <option value="" disabled><?php echo get_phrase('select');?></option>
                                        <option value="1" ><?php echo get_phrase('boys');?></option>
                                        <option value="2" selected><?php echo get_phrase('girls');?></option>
                                    </select>
                                <?php }

                                 ?>
                                    
                            </div>
                        </div>


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
