<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"> -->

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-primary" data-collapsed="0">
        	<div>
            	<div>
            		<img width="100%" src="<?echo base_url(); ?>assets/images/header.png">
            		<!-- <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?> -->
            	</div>
            </div><hr>
			<div class="panel-body">

                <?php echo form_open(site_url('admin/student/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">الاسم</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>

						<label for="field-1" class="col-sm-3 control-label">Name</label>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">الجنسية</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>

						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nationality');?></label>

					</div>

					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">ولي الامر</label>

						<div class="col-sm-5">
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

						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" id="class_id"
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php
                              $class='SELECT `class_id`,`name`,`name_numeric`,`teacher_id`,`class_capacity`,(SELECT COUNT(`class_id`) as count FROM enroll WHERE enroll.class_id=class.class_id) as count FROM `class` WHERE 1';
                               $classnames = $this->db->query($class);
	                              
	                              
	                              	foreach($classnames->result_array() as $class):
								/*$classes = $this->db->get('class')->result_array();
								foreach($classes as $row):*/
									?>
										<option value="<?php echo $class['class_id'];?>" <?php if($class['class_capacity']-$class['count']<=0)
                              		{
                              			echo "disabled";
                              		}?>>
                              			<?php echo $class['name'].'('.$class['count'].'/'.$class['class_capacity'].')&#x200E';?></option>
                              			
                            	<!-- 	<option value="<?php echo $row['class_id'];?>">
											<?php echo $row['name'];?>
                                            </option> -->
                                <?php
								endforeach;
							  ?>
                          </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label">Class</label>

					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">القسم </label>
		                    <div class="col-sm-5">
		                        <select name="section_id" class="form-control" id="section_selector_holder">
		                            <option value=""><?php echo get_phrase('select_class_first');?></option>

			                    </select>
			                </div>
			            <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">رقم الملف</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="student_code" value="<?php echo substr(md5(uniqid(rand(), true)), 0, 7); ?>" data-validate="required" id="class_id"
								data-message-required="<?php echo get_phrase('value_required');?>">
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('id_no');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">تاريخ الميلاد</label>

						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2" onchange="calculateage()">
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">العمر </label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="student_code" value="" data-validate="required" id="age"
								data-message-required="<?php echo get_phrase('value_required');?>">
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Age');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">سنة الالتحاق </label>

						<div class="col-sm-5">
							<!-- <input type="text" class="form-control" name="birthday" value=""> -->
							<select name="birthday" class="form-control">
								<?php for ($i=10; $i < 41 ; $i++) { ?>
									<option value="<?php echo '20'.$i; ?>"><?php echo '20'.$i; ?></option>
								<?php } ?>
	                        </select>

						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Join Year');?></label>
					</div>
					
					


					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"> النوع </label>

						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('male');?></option>
                              <option value="female"><?php echo get_phrase('female');?></option>
                          </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">المستوى</label>

						<div class="col-sm-5">
							<select name="status" class="form-control">
		                      <option value="foundation">      التأسيسي    Foundation </option>
								<option value="first">	الأول       the first </option>
								<option value="second">	الثاني       The second </option>
								<option value="third">	الثالث     the third </option>
								<option value="fourth">	الرابع      the fourth </option>
								<option value="fift">	الخامس   Fifth </option>
								<option value="sixth">	السادس   VI </option>
								<option value="private">	الخاص     The private </option>
								<option value="graduates">	الخريجات   Graduates </option>
								<option value="maintain">	الحفاظ    Maintain </option>
	                        </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('grade');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">العنوان</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الهاتف 1</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('mobile_no_1');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الهاتف 2</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone2" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('mobile_no_2');?></label>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">البريد الالكتروني </label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="">
						</div>
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">باسوورد </label>

						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
					</div>


					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الحالة</label>

						<div class="col-sm-5">
							<select name="status" class="form-control">
                              <option value="orphan">Orphan</option>
                              <option value="notorphan">Not Orphan</option>
	                        </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Status');?></label>
					</div>
					
					
					
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">رقم الحافلة</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="notes" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Bus Number');?></label>
					</div>
					
					
						<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">اسم السائق</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="notes" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Drivers Name');?></label>
					</div>
					
					
						<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">رقم السائق</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="notes" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Drivers Number');?></label>
					</div> -->
					
					
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">الملاحظات</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="notes" value="" >
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Notes');?></label>
					</div>

					
 

<!-- 					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">درمتر </label>

						<div class="col-sm-5">
							<select name="dormitory_id" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
	                              <?php
	                              	$dormitories = $this->db->get('dormitory')->result_array();
	                              	foreach($dormitories as $row):
	                              ?>
                              		<option value="<?php echo $row['dormitory_id'];?>"><?php echo $row['name'];?></option>
                          		<?php endforeach;?>
                          </select>
						</div>

						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('dormitory');?></label>
					</div> -->

					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">روت </label>

						<div class="col-sm-5">

							<select name="transport_id" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
	                              <?php

	                               $sql='SELECT `transport_id`,`route_name`,`number_of_vehicle`,`description`,`route_fare`,`number_of_passengers`,(SELECT COUNT(`transport_id`) as count FROM student WHERE student.transport_id=transport.transport_id) as count FROM `transport`';
	                               $query = $this->db->query($sql);
	                              
	                              	foreach($query->result_array() as $row):
	                              ?>
                              		<option value="<?php echo $row['transport_id'];?>" <?php if($row['number_of_passengers']-$row['count']<=0)
                              		{
                              			echo "disabled";
                              		}?>>
                              			<?php echo $row['route_name'].'('.$row['count'].'/'.$row['number_of_passengers'].')&#x200E';?></option>
                          		<?php endforeach;?>
                          </select>
						</div>
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('transport_route');?></label>
					</div> -->
					 
		
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('صورة عن جواز سفر الطالب وولي الأمر');?></label>

						<div class="col-sm-5">
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
					</div>
			
						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('صورة من الإقامة سارية المفعول للطالب وولي الأمر');?></label>

						<div class="col-sm-5">
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
					</div>
					
					
					
							<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('صورة من الهوية سارية المفعول للطالب');?></label>

						<div class="col-sm-5">
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
					</div>
					
							<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('2 صور شخصية');?></label>

						<div class="col-sm-5">
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
					</div>
					
					

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('add_student');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
		<!-- <blockquote class="blockquote-blue">
			<p>
				<strong>Student Admission Notes</strong>
			</p>
			<p>
				Admitting new students will automatically create an enrollment to the selected class in the running session.
				Please check and recheck the informations you have inserted because once you admit new student, you won't be able
				to edit his/her class,roll,section without promoting to the next session.
			</p>
		</blockquote> -->

		<blockquote class="blockquote-blue">
			<p>
				<strong>أنا ولي أمر الطالب / الطالبة أقر وأتعهد بأن إتمام عملية التسجيل وتوقيعي عليه وتسليمي للأوراق المطلوبة هو إقرار مني وإلتزام بشروط المركز والتي تنص على :-</strong>
			</p>
			<p>
				<ul>
					<li>متابعة ابني / ابنتي من الناحية التربوية والأخلاقية والتعليمية</li>
				<li> متابعة ابني / ابنتي من الناحية التربوية والأخلاقية والتعليمية </li>
				<li> مراجعة الإدارة عندما يتم الاستدعاء ومتابعة الطالب طوال العام الدراسي. </li>
				<li> المحافظة على النظافة العامة للطالب ( النظافة الشخصية، نظافة الملابس، تقليم الأظافر ونظافة الشعرمن القمل ). </li>
				<li> المواظبة على قص الشعر بطول 2 سم للطلاب ويشترط أن تكون طريقة القص عادية وملائمة لطالب المدرسة. </li>
				<li> الالتزام بالزي الرسمي المقدم من المركز مع مراعاة ( إرتداء الحذاء الأسود، إرتداء الحجاب الأبيض للفتيات ). </li>
				<li> دفع غرامة مالية قيمتها 200 درهم في حال إلحاق الطالب لأي ضرر بممتلكات المركز. </li>
				<li> خلو ابني / ابنتي من الأمراض التي تعيق الدراسة مثل ( الصرع، التشنج، التوحد، الصعوبة في النطق...إلخ ). </li>

				<li> في حال إصابة ابني / ابنتي لا قدر الله بمرض معدي مثل الجدري يجب أن يغيب عن المركز فورًا حتى يسمح له الطبيب بالدوام وتكون مدة إجازة مرض الجدري
				   على الأقل 14 يوم. </li>

				<li> عدم إحضار الطالب لأي أجهزة مثل ( الهواتف النقالة، مشغلات الموسيقى، الألعاب، الولاعات، الكاميرات...إلخ ). </li>

				<li> لا يسمح بأخذ إجازة لفترة طويلة من المركز ، إلا للضرورة ويتم تعبئة إستمارة الإجازة وتحديد تاريخ العودة ويجب الإلتزام به، وفي حال عدم الإلتزام يفصل
				   الطالب تلقائيًا. </li>
				<li>الإدارة غير ملزمة بتأمين مقعد للطالب في الحافلة المدرسية إذا تم تغيير مكان السكن بعد التسجيل بالمركز. </li>

			</p>
		</blockquote>
	</div>

</div>

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script> -->
<script type="text/javascript">

	function calculateage()
	{
		$("[name='birthday']").val();
		//alert($("[name='birthday']").val());
		dob = new Date($("[name='birthday']").val());
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		//alert(age);
		$('#age').val(age);
	}

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo site_url('admin/get_class_section/');?>' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
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

</script>
