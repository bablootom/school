			<?php if($lang == 'en') : ?>
                <?php echo form_open(site_url('admin/student/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data', 'target' => '_blank'));?>
                	<input type="hidden" name="lang" value="<?php echo $lang?>">
                	<div class="form-group">						
						<div class="col-sm-8">
							<select name="student-status" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('Student_Status_required');?>" autofocus required>
								<option disabled value="" selected hidden><?php echo get_phrase('select');?></option>
								<option value="old">Old Student</option>
								<option value="new">New Student</option>
							</select>
						</div>
						<label for="field-0" class="col-sm-3 control-label">Student Status</label>
					</div>
					<div class="hidden">
						<?php $today = date("d/m/Y"); ?>
						<input type="hidden" name="date-of-admission" value="<?php echo $today ?>">
					</div>

					<!-- <div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('Name_required');?>" value="" autofocus required>
						</div>

						<label for="field-1" class="col-sm-3 control-label">Name</label>
					</div> -->


<div class="form-group">
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="ar_name" data-validate="required" data-message-required="<?php echo get_phrase('name_is_required');?>" value="" required>
						</div>

						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name_in_arabic');?></label>
					</div>

					<div class="form-group">
						
						<div class="col-sm-8">
							<input type="text" class="form-control" name="en_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>

						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name_in_english');?></label>
					</div>



					<div class="form-group">
						<div class="col-sm-8">
							<select class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('nationality_required');?>" required>
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
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nationality');?></label>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="building_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('section_required');?>" onchange="return get_gender_sections(this.value)" required>
                              <option value="" selected disabled hidden><?php echo get_phrase('select');?></option>
                              <option value="1"><?php echo get_phrase('boys');?></option>
                              <option value="2"><?php echo get_phrase('girls');?></option>
                          </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
					</div>
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">ولي الامر</label>

						<div class="col-sm-8">
							<select name="parent_id" class="form-control select2" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php
								$parents = $this->db->get('parent')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['parent_id'];?>">
										<?php echo $row['name'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('parent');?></label>
					</div> -->

					<div class="form-group">
						<div class="col-sm-8">
							<select name="grade" class="form-control" data-validate="required" id="class_id"
								data-message-required="<?php echo get_phrase('grade_required');?>"
									onchange="return get_class_sections(this.value)" required>
                              <option value="" selected disabled><?php echo get_phrase('select section first');?></option>
                              <?php
                              // $class='SELECT `class_id`,`name`,`name_numeric`,`teacher_id`,`class_capacity`,(SELECT COUNT(`class_id`) as count FROM enroll WHERE enroll.class_id=class.class_id) as count FROM `class` WHERE 1';
                              //  $classnames = $this->db->query($class);
	                              
	                              
	                             //  	foreach($classnames->result_array() as $class):

									?>
<!-- 										<option value="<?php echo $class['class_id'];?>" <?php if($class['class_capacity']-$class['count']<=0)
                              		{
                              			#echo "disabled";
                              		}?>> -->
                              			<?php #echo $class['name'].'('.$class['count'].'/'.$class['class_capacity'].')&#x200E';?></option>
                                <?php
								#endforeach;
							  ?>
                          </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('level');?></label>
					</div>

					<!-- <div class="form-group">
		                    <div class="col-sm-8">
		                        <select name="section_id" class="form-control" id="section_selector_holder">
		                            <option value=""><?php echo get_phrase('select_class_first');?></option>

			                    </select>
			                </div>
			            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('division');?></label>
					</div> -->

					<div class="form-group">
		                    <div class="col-sm-8">
		                        <select name="section_id" class="form-control" id="section_id">
		                            <option value=""><?php echo get_phrase('select_class_first');?></option>
<option value="1">A</option>
<option value="2">B</option>
<option value="3">C</option>
<option value="4">D</option>
<option value="5">E</option>
<option value="6">F</option>
<option value="7">G</option>
<option value="8">H</option>
<option value="9">I</option>
<option value="10">J</option>

			                    </select>
			                </div>
			            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('division');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
                                                        <?php 
                                                              $newid = $this->db->count_all_results('student'); 
                                                              $newid = $newid+1;
							      $stud_id = 'BBRCS' . $newid; 
                                                        ?>
							<input type="text" class="form-control" name="student-code" value="<?php echo strtoupper($stud_id) ?>" data-validate="required" id="student_code" data-message-required="<?php echo get_phrase('value_required');?>" readonly>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('id_no');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<select name="sex" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('gender_required');?>" required>
                              <option value="" selected disabled hidden><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('male');?></option>
                              <option value="female"><?php echo get_phrase('female');?></option>
                          </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<input id="birthday" type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2" placeholder="mm/dd/yyyy">

						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="age" value="" data-validate="required" id="age"
								data-message-required="<?php echo get_phrase('value_required');?>" readonly>
						</div>

						<label for="field-2" class="col-sm-3 control-label" ><?php echo get_phrase('Age');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<!-- <input type="text" class="form-control" name="birthday" value=""> -->
							<select name="joining_year" class="form-control">
								<?php for ($i=10; $i < 41 ; $i++) { ?>
									<option value="<?php echo '20'.$i; ?>"><?php echo '20'.$i; ?></option>
								<?php } ?>
	                        </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Join Year');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="address" value="" >
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone" placeholder="05xxxxxxxx" maxlength="10" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('mobile_no_1');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone2" value="" placeholder="05xxxxxxxx" maxlength="10">
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('mobile_no_2');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<!-- <input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php #echo get_phrase('value_required');?>" value=""> -->
							<input type="text" class="form-control" name="email" value="">
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
					</div>

					<!-- <div class="form-group">
    <div class="col-sm-8">
        <input type="password" class="form-control" name="password" value="" >
    </div>

    <label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('password');?></label>
</div> -->

					<div class="form-group">
						<div class="col-sm-8">
							<select name="status" class="form-control">
                              <option value="1">Orphan</option>
                              <option value="0">Not Orphan</option>
	                        </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Status');?></label>
					</div>
				
					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="notes" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Notes');?></label>
					</div>

					<?php 
                       $sql='SELECT `transport_id`,`route_name`,`driver_name`,`bus_driver_number`,`bus_number`,`description`,`route_fare`,`number_of_passengers`,(SELECT COUNT(`transport_id`) as count FROM student WHERE student.transport_id=transport.transport_id) as count FROM `transport`';
                       $query = $this->db->query($sql);
					?>
					<div class="form-group">
						<div class="col-sm-8">

							<select id="transport_id" name="transport_id" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
	                              <?php
	                              	$transport_details = $query->result();	                              
	                              	foreach($query->result_array() as $row):
	                              ?>
                              		<option value="<?php echo $row['transport_id'];?>" <?php if($row['number_of_passengers']-$row['count']<=0)
                              		{
                              			echo "disabled";
                              		}?>>
                              			<!-- <?php #echo $row['route_name'].'('.$row['count'].'/'.$row['number_of_passengers'].')&#x200E'.'/'.$row['driver_name'].'/'.$row['bus_driver_number'].'/'.$row['bus_number'];?></option> -->
                              			<?php echo $row['route_name'] ?></option>
                          			<?php endforeach;?>
                          	</select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('transport_route');?></label>
					</div>
						
					<div class="form-group route-details hidden">
							<div class="col-sm-8">
								<input type="text" id="bus-driver-name" class="form-control" name="bus-driver" value="" placeholder="" readonly>							
							</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'Bus Driver' ?></label>
					</div>

					<div class="form-group route-details hidden">
							<div class="col-sm-8">
								<input type="text" id="bus-no" class="form-control" name="bus-no" value="" placeholder="" readonly>								
							</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'Bus Number' ?></label>
					</div>

					<div class="form-group route-details hidden">
							<div class="col-sm-8">
								<input type="text" id="bus-driver-no" class="form-control" name="bus-driver-no" value="" placeholder="" readonly>							
							</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'Bus Driver Number' ?></label>
					</div>	
					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="visastatus" value="">
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('visa_status');?></label>
					</div>

					<div class="form-group">						
						<div class="col-sm-8">
							<input type="text" class="form-control datepicker" name="visaexpiry" value="" data-start-view="2" placeholder="mm/dd/yyyy">
						</div>
						<label for="field-2" class="col-sm-3 control-label" ><?php echo get_phrase('visa_expiry');?></label>
					</div>



					<div class="form-group">
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="pcsp" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Copy of Passport');?></label>
					</div>
			
					<div class="form-group">
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="visa" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Copy of Residence');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="emid" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('copy_of_id');?></label>
					</div>
					
					<div class="form-group">
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
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
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Photo');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<div class="checkbox">
							  <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="" onchange="enablesubmit(this,'submitbutton')">I Accept all Terms And Conditions</label>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Terms And Condition');?></label>
					</div>

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
							<button type="submit" class="btn btn-info" disabled="" id="submitbutton"><?php echo get_phrase('add_student');?></button>
							<input type="submit" name="print_button" class="btn btn-info" value="Print">
						</div>
					</div>
                <?php echo form_close();?>
               <!--  </form> -->
        	<?php else : ?>
                <?php echo form_open(site_url('admin/student/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data', 'target' =>'_blank'));?>
                	<input type="hidden" name="lang" value="<?php echo $lang?>">
                	<div class="form-group">
						<label for="field-0" class="col-sm-3 control-label">نوع الطالب</label>
						<div class="col-sm-8">
							<select name="student-status" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('Student_Status_required');?>" autofocus required>
								<option disabled value="" selected hidden><?php echo get_phrase('أختر');?></option>
								<option value="old">طالب قديم</option>
								<option value="new">طالب جديد</option>
							</select>
						</div>
					</div>
					<div class="hidden">
						<?php $today = date("d/m/Y"); ?>
						<input type="hidden" name="date-of-admission" value="<?php echo $today ?>">
					</div>

					<!-- <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">الاسم</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('Name_required');?>" value="" autofocus required>
						</div>

					</div> -->

<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">الاسم باللغة العربية</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="ar_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>

						
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">الاسم باللغة الإنجليزية</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="en_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>

						
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">الجنسية</label>

						<div class="col-sm-8">
							<!-- <input type="text" class="form-control" name="nationality" data-validate="required" data-message-required="<?php #echo get_phrase('value_required');?>" value="" autofocus required> -->
							<select class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('nationality_required');?>" required>
								<option value=""><?php echo get_phrase('أختر');?></option>
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
						<label for="field-2" class="col-sm-3 control-label"> الجزء</label>

						<div class="col-sm-8">
							<select name="building_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('section_required');?>" onchange="return get_gender_sections(this.value)" required>
                              <option value="" selected disabled hidden><?php echo get_phrase('أختر');?></option>
                              <option value="1"><?php echo get_phrase('boys');?></option>
                              <option value="2"><?php echo get_phrase('girls');?></option>
                          </select>
						</div>

					</div>
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">ولي الامر</label>

						<div class="col-sm-8">
							<select name="parent_id" class="form-control select2" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php
								$parents = $this->db->get('parent')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['parent_id'];?>">
										<?php echo $row['name'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('parent');?></label>
					</div> -->

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الفصل</label>

						<div class="col-sm-8">
							<select name="grade" class="form-control" data-validate="required" id="class_id"
								data-message-required="<?php echo get_phrase('grade_required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select_section_first');?></option>
                          </select>
						</div>
					</div>

				<!--	<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">القسم </label>
		                    <div class="col-sm-8">
		                        <select name="section_id" class="form-control" id="section_selector_holder" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="return get_class_sections(this.value)">
		                            <option value=""><?php echo get_phrase('select_class_first');?></option>

			                    </select>
			                </div>
					</div> -->

<div class="form-group">
<label for="field-2" class="col-sm-3 control-label">القسم </label>
		                    <div class="col-sm-8">
		                        <select name="section_id" class="form-control" id="section_id">
		                            <option value=""><?php echo get_phrase('select_class_first');?></option>
<option value="1">A</option>
<option value="2">B</option>
<option value="3">C</option>
<option value="4">D</option>
<option value="5">E</option>
<option value="6">F</option>
<option value="7">G</option>
<option value="8">H</option>
<option value="9">I</option>
<option value="10">J</option>

			                    </select>
			                </div>
			            
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">رقم الملف</label>

						<div class="col-sm-8">
							<?php 
                                                              $newid = $this->db->count_all_results('student'); 
                                                              $newid = $newid+1;
							      $stud_id = 'BBRCS' . $newid; 
                                                        ?>
							<input type="text" class="form-control" name="student-code" value="<?php echo strtoupper($stud_id) ?>" data-validate="required" id="student_code" data-message-required="<?php echo get_phrase('value_required');?>" readonly>
						</div>

					</div>


                                        <div class="form-group">
<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('جنس');?></label>
						<div class="col-sm-8">
							<select name="sex" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
                              <option value="" selected disabled hidden><?php echo get_phrase('أختر');?></option>
                              <option value="male"><?php echo get_phrase('الذكور');?></option>
                              <option value="female"><?php echo get_phrase('الإناث');?></option>
                          </select>
						</div>
						
					</div>


					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">تاريخ الميلاد</label>

						<div class="col-sm-8">
							<input type="text" class="form-control datepicker" id="birthday" name="birthday" value="" data-start-view="2" placeholder="mm/dd/yyyy">
						</div>

					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">العمر </label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="age" value="" data-validate="required" id="age"
								data-message-required="<?php echo get_phrase('value_required');?>" readonly>
						</div>

					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">سنة الالتحاق </label>

						<div class="col-sm-8">
							<!-- <input type="text" class="form-control" name="birthday" value=""> -->
							<select name="joining_year" class="form-control">
								<?php for ($i=10; $i < 41 ; $i++) { ?>
									<option value="<?php echo '20'.$i; ?>"><?php echo '20'.$i; ?></option>
								<?php } ?>
	                        </select>

						</div>

					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">العنوان</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="address" value="" >
						</div>

					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الهاتف 1</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone" placeholder="05xxxxxxxx" maxlength="10" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>

					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الهاتف 2</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="phone2" value="" placeholder="05xxxxxxxx" maxlength="10">
						</div>

					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">البريد الالكتروني </label>
						<div class="col-sm-8">
							<!-- <input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php #echo get_phrase('value_required');?>" value=""> -->
							<input type="text" class="form-control" name="email" value="">
						</div>
					</div>

					<!-- <div class="form-group">
    <div class="col-sm-8">
        <input type="password" class="form-control" name="password" value="" >
    </div>

    <label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('password');?></label>
</div> -->

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">يتيم</label>

						<div class="col-sm-8">
							<select name="status" class="form-control">
                              <option value="1">يتيم</option>
                              <option value="0">لا يتيم</option>
	                        </select>
						</div>

					</div>
				
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الملاحظات</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" name="notes" value="" >
						</div>

					</div>

					<?php 
                       $sql='SELECT `transport_id`,`route_name`,`driver_name`,`bus_driver_number`,`bus_number`,`description`,`route_fare`,`number_of_passengers`,(SELECT COUNT(`transport_id`) as count FROM student WHERE student.transport_id=transport.transport_id) as count FROM `transport`';
                       $query = $this->db->query($sql);

					?>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">خط المواصلات </label>

						<div class="col-sm-8">

							<select id="transport_id" name="transport_id" class="form-control">
                              <option value=""><?php echo get_phrase('أختر');?></option>
	                              <?php
	                              	$transport_details = $query->result();	                              
	                              	foreach($query->result_array() as $row):
	                              ?>
                              		<option value="<?php echo $row['transport_id'];?>" <?php if($row['number_of_passengers']-$row['count']<=0)
                              		{
                              			echo "disabled";
                              		}?>>
                              			<!-- <?php #echo $row['route_name'].'('.$row['count'].'/'.$row['number_of_passengers'].')&#x200E'.'/'.$row['driver_name'].'/'.$row['bus_driver_number'].'/'.$row['bus_number'];?></option> -->
                              			<?php echo $row['route_name'] ?></option>
                          			<?php endforeach;?>
                          	</select>
						</div>
					</div>
						
					<div class="form-group route-details hidden">
						<label for="field-3" class="col-sm-3 control-label">سائق الحافلة</label>
							<div class="col-sm-8">
								<input type="text" id="bus-driver-name" class="form-control" name="bus-driver" value="" placeholder="" readonly>							
							</div>
					</div>

					<div class="form-group route-details hidden">
						<label for="field-3" class="col-sm-3 control-label">رقم الباص</label>
							<div class="col-sm-8">
								<input type="text" id="bus-no" class="form-control" name="bus-no" value="" placeholder="" readonly>								
							</div>
					</div>

					<div class="form-group route-details hidden">
						<label for="field-3" class="col-sm-3 control-label">عدد سائق الحافلة</label>
							<div class="col-sm-8">
								<input type="text" id="bus-driver-no" class="form-control" name="bus-driver-no" value="" placeholder="" readonly>							
							</div>
					</div>	

					<div class="form-group">
						
                                                  <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('حالة التأشيرة');?></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="visastatus" value="" >
						</div>
                                         </div>

					<div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('تَأشيرة تاريخ الإنتهاء');?></label>					
						<div class="col-sm-8">
							<input type="text" class="form-control datepicker" name="visaexpiry" value="" data-start-view="2" placeholder="mm/dd/yyyy">
						</div>
						
					</div>


						
					
					<div class="form-group">
						

						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">أختر</span>
										<span class="fileinput-exists">يَتَغَيَّر</span>
										<input type="file" name="pcsp" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">يَحْذُف</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('صورة عن جواز سفر الطالب وولي الأمر');?></label>
					</div>
			
					<div class="form-group">


						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">أختر</span>
										<span class="fileinput-exists">يَتَغَيَّر</span>
										<input type="file" name="visa" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">يَحْذُف</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('صورة من الإقامة سارية المفعول للطالب وولي الأمر');?></label>						
					</div>

					<div class="form-group">

						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">أختر</span>
										<span class="fileinput-exists">يَتَغَيَّر</span>
										<input type="file" name="emid" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">يَحْذُف</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('صورة من الهوية سارية المفعول للطالب');?></label>

					</div>
					
					<div class="form-group">
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">أختر</span>
										<span class="fileinput-exists">يَتَغَيَّر</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">يَحْذُف</a>
								</div>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('2 صور شخصية');?></label>
					</div>

					<div class="form-group">
						<div class="col-sm-8">
							<div class="checkbox">
							  <label><input type="checkbox" value="" onchange="enablesubmit(this,'submitbutton')">I Accept all Terms And Conditions</label>
							</div>
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Terms And Condition');?></label>						
					</div>

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
							<button type="submit" class="btn btn-info" disabled="" id="submitbutton"><?php echo get_phrase('add_student');?></button>
							<input type="submit" name="print_button" class="btn btn-info" value="Print">
						</div>
					</div>
                <?php echo form_close();?>
            <?php endif; ?> 