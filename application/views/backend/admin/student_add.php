<div class="row">
	<div class="col-md-8">
		<div class="panel panel-primary" data-collapsed="0">
        	<div>
            	<div>
            		<img width="100%" src="<?php echo base_url(); ?>assets/images/header.png">
            		<!-- <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?> -->
            	</div>
            </div><hr>
			<div class="panel-body">

                <?php echo form_open(site_url('admin/student/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('id_no');?></label>
						<div class="col-sm-5">
                        	<?php
                        		$this->db->select('*');
								$this->db->from('student');
								//$this->db->where($your_conditions);
								$num_results = $this->db->count_all_results(); 
								$query = $this->db->query('select student_id from student');
								foreach ($query->result() as $row)
					            {
					            	$rowno =  $row->student_id;
					            }
					            $rowno = $rowno+1;
            					//echo $rowno;
					            // $query->result();
					            // $row = $query->row();
					            // if (isset($row))
					            // {
					            //         $data['tname'] = $row->student_id;
					            // }
					            // echo $data['tname'];
					            // echo "test";
					            // if($data['tname'] == ''){
					            // 	$data['tname'] = 1;
					            // }
					            // else{
					            //  	$data['tname'] = $data['tname']+1;
					            //  }
					            // echo "hell";
					            // echo $data['tname'];
								// $newid = $this->db->count_all_results('student'); 
								// $newid = $newid+1;
							    $stud_id = 'BBRCS' . $rowno; 
                            ?>
							<input type="text" class="form-control" name="student_code" value="<?php echo strtoupper($stud_id) ?>" data-validate="required" id="student_code" data-message-required="<?php echo get_phrase('value_required');?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label for="field-0" class="col-sm-3 control-label"><?php echo get_phrase('student_status');?></label>	
						<div class="col-sm-5">
							<select name="student-status" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('student_status');?>" autofocus required>
								<option disabled value="" selected hidden><?php echo get_phrase('select');?></option>
								<option value="old"><?php echo get_phrase('old_student');?></option>
								<option value="new"><?php echo get_phrase('new_student');?></option>
							</select>
						</div>						
					</div>
					
					<div class="hidden">
						<?php $today = date("d/m/Y"); ?>
						<input type="hidden" name="date-of-admission" value="<?php echo $today ?>">
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name_in_arabic');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="ar_name" data-validate="required" data-message-required="<?php echo get_phrase('name_in_arabic');?>" value="" autofocus required>
						</div>

						
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name_in_english');?></label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="en_name" data-validate="required" data-message-required="<?php echo get_phrase('name_in_english');?>" value="" autofocus required>
						</div>
					</div>
                           
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nationality');?></label>
						<div class="col-sm-5">
						<select class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('nationality');?>" required>
								<option value=""><?php echo get_phrase('select');?></option>
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
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('date_of_birth');?></label>
						<div class="col-sm-5">
							<input id="birthday" type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2" placeholder="mm/dd/yyyy" data-validate="required" data-message-required="<?php echo get_phrase('date_of_birth');?>" required>

						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label" ><?php echo get_phrase('age');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="age" value="" id="age" readonly>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('joining_year');?></label>
						<div class="col-sm-5">
							<!-- <input type="text" class="form-control" name="birthday" value=""> -->
							<select name="joining_year" class="form-control">
								<?php for ($i=10; $i < 41 ; $i++) { ?>
									<option value="<?php echo '20'.$i; ?>"><?php echo '20'.$i; ?></option>
								<?php } ?>
	                        </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('branch');?></label>
						<div class="col-sm-5">
							<select name="building_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('branch');?>" onchange="return get_gender_sections(this.value)" required>
                              <option value="" selected disabled hidden><?php echo get_phrase('select');?></option>
                              <option value="1"><?php echo get_phrase('boys');?></option>
                              <option value="2"><?php echo get_phrase('girls');?></option>
                          </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('level');?></label>
						<div class="col-sm-5">
							<select name="grade" class="form-control" data-validate="required" id="class_id"
								data-message-required="<?php echo get_phrase('level');?>"
									onchange="return get_class_sections(this.value)" required>
                              <option value="" selected disabled><?php echo get_phrase('select_branch_first');?></option>
                              
                          </select>

						</div>
					</div>

					<div class="form-group">
			            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('division');?></label>
	                    <div class="col-sm-5">
	                        <select name="section_id" class="form-control" id="section_selector_holder" data-validate="required" 
								data-message-required="<?php echo get_phrase('division');?>" required>
	                            <option value="" selected disabled><?php echo get_phrase('select_level_first');?></option>

		                    </select>
		                </div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone_1');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" placeholder="05xxxxxxxx" maxlength="10" data-validate="required" data-message-required="<?php echo get_phrase('phone_1');?>" value="" autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone_2');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone2" value="" placeholder="05xxxxxxxx" maxlength="10">
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('emirate');?></label>
						<div class="col-sm-5">
							<select name="emirate" class="form-control">
								<option value="" selected disabled hidden><?php echo get_phrase('select');?></option>
                            	<option value="dubai"><?php echo get_phrase('dubai');?></option> 
                             	<option value="sharjah"><?php echo get_phrase('sharjah');?></option>
                             	<option value="ajman"><?php echo get_phrase('ajman');?></option>
	                        </select>
						</div>
					</div> -->

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('emirate');?></label>
						<div class="col-sm-5">
							<select name="emirate" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('emirate');?>" onchange="return get_transportation_sections(this.value)" required>
                              	<option value="" selected disabled hidden><?php echo get_phrase('select');?></option>
                              	<option value="1"><?php echo get_phrase('dubai');?></option> 
                             	<option value="2"><?php echo get_phrase('sharjah');?></option>
                             	<option value="3"><?php echo get_phrase('ajman');?></option>
                          </select>
						</div>
					</div>

					
					<div class="form-group">
			            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('transportation');?></label>
	                    <div class="col-sm-5">
	                        <select name="transport_id" class="form-control" id="transport_id">
	                            <option value="" selected disabled><?php echo get_phrase('select_emirate_first');?></option>

		                    </select>
		                </div>
					</div>
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('area');?></label>
						<div class="col-sm-5">
							<select name="area" class="form-control">
								<option value="" selected disabled hidden><?php //echo get_phrase('select');?></option>
                            	<option value="dubai_areas"><?php //echo get_phrase('dubai_areas');?></option> 
                             	<option value="sharjah_areas"><?php //echo get_phrase('sharjah_areas');?></option>
                             	<option value="ajman_areas"><?php //echo get_phrase('ajman_areas');?></option>
                             	<option value="special_transportation"><?php //echo get_phrase('special_transportation');?></option>
                             	<option value="other_bus"><?php //echo get_phrase('other_bus');?></option>
	                        </select>
						</div>
					</div> -->

					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('address');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div>
					</div> -->


					<?php 
                       /*$sql='SELECT `transport_id`,`route_name`,`driver_name`,`bus_driver_number`,`bus_number`,`description`,`route_fare`,`number_of_passengers`,(SELECT COUNT(`transport_id`) as count FROM student WHERE student.transport_id=transport.transport_id) as count FROM `transport`';
                       $query = $this->db->query($sql);*/
					?>
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('transportation');?></label>
						<div class="col-sm-5">
							<select id="transport_id" name="transport_id" class="form-control">
                              <option value=""><?php //echo get_phrase('select');?></option>
	                              <?php
	                              	//$transport_details = $query->result();	                              
	                              //	foreach($query->result_array() as $row):
	                              ?>
                              		<option value="<?php //echo $row['transport_id'];?>" <?php //if($row['number_of_passengers']-$row['count']<=0)
                              		{
                              			//echo "disabled";
                              		}?>> -->
                              			<!-- <?php #echo $row['route_name'].'('.$row['count'].'/'.$row['number_of_passengers'].')&#x200E'.'/'.$row['driver_name'].'/'.$row['bus_driver_number'].'/'.$row['bus_number'];?></option> -->
                              			<?php //echo $row['route_name'] ?><!-- </option> -->
                          			<?php //endforeach;?>
                          	<!-- </select>
						</div>
					</div> -->
						
					<div class="form-group route-details hidden">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('bus_number') ?></label>
							<div class="col-sm-5">
								<input type="text" id="bus-no" class="form-control" name="bus-no" value="" placeholder="" readonly>								
							</div>
					</div>
						
					<div class="form-group route-details hidden">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('bus_driver_name') ?></label>
							<div class="col-sm-5">
								<input type="text" id="bus-driver-name" class="form-control" name="bus-driver" value="" placeholder="" readonly>							
							</div>
					</div>

					<div class="form-group route-details hidden">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('bus_driver_number') ?></label>
							<div class="col-sm-5">
								<input type="text" id="bus-driver-no" class="form-control" name="bus-driver-no" value="" placeholder="" readonly>							
							</div>
					</div>	

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('visa_status');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="visastatus" value="">
						</div>
					</div>

					<div class="form-group">						
						<label for="field-2" class="col-sm-3 control-label" ><?php echo get_phrase('visa_expiry_date');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="visaexpiry" value="" data-start-view="2" placeholder="mm/dd/yyyy">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('orphan');?></label>
						<div class="col-sm-5">
							<select name="status" class="form-control">
                              <option value="1"><?php echo get_phrase('orphan');?></option> 
                              <option value="0"><?php echo get_phrase('not_orphan');?></option>
	                        </select>
						</div>
					</div>
				
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('note');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="note" value="" >
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('copy_of_passport');?></label>
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new"><?php echo get_phrase('select');?></span>
										<span class="fileinput-exists"><?php echo get_phrase('change');?></span>
										<input type="file" name="pcsp" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput"><?php echo get_phrase('remove');?></a>
								</div>
							</div>
						</div>
					</div>
			
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('copy_of_residence');?></label>
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new"><?php echo get_phrase('select');?></span>
										<span class="fileinput-exists"><?php echo get_phrase('change');?></span>
										<input type="file" name="visa" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput"><?php echo get_phrase('remove');?></a>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('copy_of_id');?></label>
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new"><?php echo get_phrase('select');?></span>
										<span class="fileinput-exists"><?php echo get_phrase('change');?></span>
										<input type="file" name="emid" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput"><?php echo get_phrase('remove');?></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new"><?php echo get_phrase('select');?></span>
										<span class="fileinput-exists"><?php echo get_phrase('change');?></span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput"><?php echo get_phrase('remove');?></a>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">						
						<label for="field-2" class="col-sm-3 control-label" ><?php echo get_phrase('terms_and_condition');?></label>
						<div class="col-sm-5">
							<input type="checkbox" value="" onchange="enablesubmit(this,'submitbutton')">
						</div>
					</div>

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info" disabled="" id="submitbutton"><?php echo get_phrase('add_student');?></button>
							<input type="submit" name="print_button" class="btn btn-info" formtarget ="_blank" value="<?php echo get_phrase('print');?>">
						</div>
					</div>
					
                <?php echo form_close();?>
            </div>
        </div>
    </div>
   

</div>
<?php 
   $sql='SELECT `transport_id`,`route_name`,`driver_name`,`bus_driver_number`,`bus_number`,`description`,`route_fare`,`number_of_passengers`,(SELECT COUNT(`transport_id`) as count FROM student WHERE student.transport_id=transport.transport_id) as count FROM `transport`';
   $query = $this->db->query($sql);
   $transport_details = $query->result();	 
?>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script> -->
<script type="text/javascript">


	function enablesubmit(checkbox,btn1)
	{
    	//$("#addstudent").removeClass("disabled");
    	var button = document.getElementById(btn1);

	    if (checkbox.checked === true) {
	        button.disabled = "";
	    } else {
	        button.disabled = "disabled";
	    }
	}

	$(document).on('change','#birthday',function(){
		$("[name='birthday']").val();
		//alert($("[name='birthday']").val());
		dob = new Date($("[name='birthday']").val());
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		//alert(age);
		$('#age').val(age)
	});
	// function calculateage()
	// {
	// 	$("[name='birthday']").val();
	// 	//alert($("[name='birthday']").val());
	// 	dob = new Date($("[name='birthday']").val());
	// 	var today = new Date();
	// 	var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
	// 	//alert(age);
	// 	$('#age').val(age);
	// }

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo site_url('admin/get_class_section/');?>' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

    function get_gender_sections(bldg_id){
      	$.ajax({
            url: '<?php echo site_url('admin/get_gender_section/');?>' + bldg_id ,
            success: function(response)
            {
                jQuery('#class_id').html(response);
            }
        });  	
    }

    function get_transportation_sections(class_id) {

    	$.ajax({
            url: '<?php echo site_url('admin/get_transportation_section/');?>' + class_id ,
            success: function(response)
            {
                jQuery('#transport_id').html(response);
            }
        });

    }

// 	$('#datepickeryear').datepicker({
//     format: "yyyy",
//     weekStart: 1,
//     orientation: "bottom",
//     language: "{{ app.request.locale }}",
//     keyboardNavigation: false,
//     viewMode: "years",
//     minViewMode: "years"
// });	
	$(document).on('change','#transport_id',function(){
		let transportDetails = <?php echo json_encode($transport_details); ?>;
		let routeFields = $('.route-details');
		let busdriverName = $('#bus-driver-name');
		let busdriverNo = $('#bus-driver-no');
		let busNo = $('#bus-no');			
		let routeId = $(this).val();
		let selectedRoute = transportDetails.filter(function(route){
			return route.transport_id === routeId;
		});
		routeFields.removeClass('hidden');		
		busdriverName.val(selectedRoute[0].driver_name);
		busdriverNo.val(selectedRoute[0].bus_driver_number);
		busNo.val(selectedRoute[0].bus_number);
	});
	const admissionForms = {
		ar: $('#arabicForm'),
		en: $('#englishForm'),
		active: null
	}
	const terms = {
		ar: $('#arTerms'),
		en: $('#enTerms'),
		active: null
	}
	$('#formSelect').change(function(){
		let selLang = $(this).val();
		if(admissionForms.active !== selLang){
			admissionForms[selLang].load('get_form_partial/'+selLang,function( response, status, xhr) {
			  if ( status == "success" ) {
			   	admissionForms.active = selLang;
			   	terms.active = selLang;
			   	admissionForms[selLang].removeClass('hidden');
				//terms[selLang].removeClass('hidden');
				if(selLang == 'en'){
			   	 admissionForms['ar'].addClass('hidden').empty();
			   	 //terms['ar'].addClass('hidden').empty();
				} else{
					admissionForms['en'].addClass('hidden').empty(); 
					//terms['en'].addClass('hidden').empty()
				}
			  } else {
			  	var msg = "<h3>Sorry but there was an error. Could't load the form.</h3>";
			    $('#error').append(msg);
			  }
			});	
		}	
	});

</script>
