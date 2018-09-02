<?php
	$class_name		 	= 	$this->db->get_where('class' , array('class_id' => $result['grade']))->row()->name;
    $div_name         =   $this->db->get_where('section' , array('section_id' => $result['section_id']))->row()->name;
    $running_year       =   $this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;
    //$Level              =   $this->db->get_where('class' , array('class_id' => $result['class_id']))->row()->name;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div dir="rtl" id="print">

	<style type="text/css">
        td {
            padding: 6px;
            font-size: 10px;
        }
        .header-table {
            width:80%; 
            border-collapse:collapse;
            border: 1px solid transparent; 
            margin-top: 10px;
        }
        .header-table td {
            width:  33.33%;
        }
        .stud-table {
            width:80%;
            border-collapse:collapse;
            border: none; 
            margin-top: 10px;            
        }
        .stud-table td {
            width: 70%;
            display: table-cell;
            /*border: 1px solid #000;*/
            text-transform: capitalize;
        }
        .stud-table tr td:first-of-type,
        .stud-table tr td:last-of-type {
            width: 15%;
        }
        .stud-table tr td:first-of-type {
            text-align: left;
        }
        .stud-table tr td:last-of-type {
            text-align: right;
        }
/*        .stud-table td:nth-of-type(even){
            background: #999;
            font-weight: bold;
        }*/
	</style>

	<center>
		<img src="<?php echo base_url(); ?>assets/images/header.png" style="width: 40%" ><hr>
		              
	</center>

    <table align="center" class="header-table" style="">
        <tbody>
            <tr>
                <td> طالب جديد &nbsp;&nbsp;<span style="width:20px;height:20px;border:1px solid #ccc;display:inline-block;"></span></td>
                <td> طالب قديم &nbsp;&nbsp; <span style="width:20px;height:20px;border:1px solid #ccc;display:inline-block;"></span></td>
                
                <td> التاريخ &nbsp;&nbsp; <span><?php echo $result['date-of-admission'];?></span></td>
            </tr>
        </tbody>
    </table>
    <table align="center" class="stud-table" style="width:80%; border-collapse:collapse;border: 1px solid #ccc; margin-top: 10px;text-align: center;" border="1">
        <tbody>
            <?php  //var_dump($result); ?>
            <tr>
                <td>هوية شخصية</td>
                <td><?php echo $result['student_code']; ?></td>
                <td>ID</td>
            </tr>
            <tr>
                <td>الاسم باللغة العربية</td>
                <td><?php echo $result['ar_name']; ?></td>
                <td>Name in Arabic</td>
            </tr>
            <tr>
                <td>الاسم باللغة الانجليزية</td>
                <td><?php echo $result['en_name']; ?></td>
                <td>Name in English</td>
            </tr>
            <tr>
                <td> الجنسية</td>
                <td><?php echo $result['nationality']; ?></td>
                <td>  Nationality </td>
            </tr>
            <tr>
                <td> تاريخ الميلاد   </td>
                <td><?php echo $result['birthday']; ?></td>
                <td>Date of Birth</td>
            </tr>
            <tr>
                <td>عُمْر</td>
                <td><?php echo $result['age']; ?></td>
                <td>Age</td>
            </tr>
            <tr>
                <td>سنة الإلتحاق</td>
                <td><?php echo $result['joining_year']; ?></td>
                <td>Joining Year</td>
            </tr>
            <tr>
                <td> المستوى  </td>
                <td><?php echo get_phrase($class_name); ?></td>
                <td>Level</td>
            </tr>
            <tr>
                <td>اشعبة</td>
                <td><?php echo $div_name; ?></td>
                <td>Division</td>
            </tr>
            <!-- <tr>
                <td>االمنطقة</td>
                <td><?php echo get_phrase($result['area']); ?></td>
                <td>Area</td>
            </tr>
            <tr>
                <td>العنوان   </td>
                <td><?php echo $result['address']; ?></td>
                <td>Address</td>
            </tr> -->
            <tr>
                <td> الهاتف 1</td>
                <td><?php echo $result['phone']; ?></td>
                <td>Mobile No.1</td>
            </tr>
            <tr>
                <td> الهاتف 2 </td>
                <td><?php echo $result['phone2']; ?></td>
                <td>Mobile No.2</td>
            </tr>
            <tr>
                <td> الحالة </td>
                <td><?php echo $result['status'] == 1 ? 'يتيم' : 'غير يتيم'; ?></td>
                <td>Status</td>
            </tr>
            <tr>
                <td>رقم الباص</td>
                <td><?php echo $result['bus-no']; ?></td>
                <td>Bus No</td>
            </tr>
            <tr>
                <td>البريد الالكتروني </td>
                 <td><?php echo $result['bus-driver']; ?></td>
                <td>Driver Name</td>
            </tr>
            <tr>
                <td> الملاحظات </td>
                <td><?php echo $result['bus-driver-no']; ?></td>
                <td>Driver No</td>
            </tr>
            <tr>
                <td> الملاحظات </td>
                <td><?php echo $result['note']; ?></td>
                <td>Notes</td>
            </tr>
        </tbody>
    </table>

<!-- 	<table align="center" class="stud-table">
        <tbody>
            <tr>
                <td> الاسم   </td>
                <td><?php echo $result['name']; ?></td>
                <td>Name</td>
            </tr>
            <tr>
                <td> الجنسية   </td>
                <td><?php echo $result['nationality']; ?></td>
                <td>Nationality</td>
            </tr>
            <tr>
                <td> الفصل   </td>
                <td><?php echo $class_name; ?></td>
                <td>Class Name</td>
            </tr>
            <tr>
                <td> تاريخ الميلاد   </td>
                <td><?php echo $result['birthday']; ?></td>
                <td>Birthdate</td>
            </tr>
            <tr>
                <td> النوع   </td>
                <td><?php echo $result['sex']; ?></td>
                <td>Gender</td>
            </tr>
            <tr>
                <td> الحالة   </td>
                <td><?php echo $result['status']; ?></td>
                <td>Status</td>
            </tr>
            <tr>
                <td> المستوى  </td>
                <td><?php echo $result['grade']; ?></td>
                <td>Grade</td>
            </tr>
            <tr>
                <td> العنوان   </td>
                <td><?php echo $result['address']; ?></td>
                <td>Address</td>
            </tr>
            <tr>
                <td> الهاتف 1  </td>
                <td><?php echo $result['phone']; ?></td>
                <td>Mobile No. 1</td>
            </tr>
            <tr>
                <td> الهاتف 2  </td>
                <td><?php echo $result['phone2']; ?></td>
                <td>Mobile No. 2</td>
            </tr>
            <tr>
                <td> البريد الالكتروني   </td>
                <td><?php echo $result['email']; ?></td>
                <td>Email</td>
            </tr>
            <tr>
                <td> الهاتف 2  </td>
                <td><?php echo $result['bus-no']; ?></td>
                <td>Bus Number</td>
            </tr>
            <tr>
                <td> البريد الالكتروني   </td>
                <td><?php echo $result['bus-driver']; ?></td>
                <td>Driver Name</td>
            </tr>
            <tr>
                <td> الملاحظات   </td>
                <td><?php echo $result['bus-driver-no']; ?></td>
                <td>Driver Number</td>
            </tr>            
            <tr>
                <td> الملاحظات   </td>
                <td><?php echo $result['notes']; ?></td>
                <td>Notes</td>
            </tr>
        </tbody>
   </table> -->
<br>
<br>
<table align="center" style="width:80%; border-collapse:collapse;border: 1px solid #ccc; margin-top: 10px;"">
    <tbody>
        <tr>
            <td style="width: 50%">
                <h3>الوثائق الرسمية المطلوبة</h3>
                <h3>Documents Required</h3>
            </td>
            <td style="width: 50%">
                 <span style="width:20px;height:20px;border:1px solid #ccc;display:inline-block;"></span><span> x صورة عن جواز سفر الطالب وولي الأمر </span>
                <br>
                <span style="width:20px;height:20px;border:1px solid #ccc;display:inline-block;"></span><span> x صورة من الإقامة سارية المفعول للطالب وولي الأمر </span> 
                <br>
                <span style="width:20px;height:20px;border:1px solid #ccc;display:inline-block;"></span><span> x صورة من الهوية سارية المفعول للطالب </span> 
                <br>
                 <span style="width:20px;height:20px;border:1px solid #ccc;display:inline-block;"></span><span> x  صور شخصية 2 </span>
            </td>
            
        </tr>
    </tbody>
</table>
<br>
<br>
<table align="center" style="width:80%; border-collapse:collapse;border: 1px solid transparent; margin-top: 10px;">
    <tbody>
        <tr>
           
            <td style="text-align:right">
                <span style="display:block;margin-top:10px">الإدارة</span>
                <span style="display:block;margin-top:10px">Administration</span>
                <div style="width:200px;height:60px;border-bottom:2px solid #ccc;margin: 0 0 0 auto;"></div>                             
            </td>
             <td style="text-align:left">
                <span style="display:block;margin-top:10px">توقيع ولي الأمر</span>
                <span style="display:block;margin-top:10px">Guardian</span>
                <div style="width:200px;height:60px;border-bottom:2px solid #ccc;margin: 0 auto 0 0;"></div>                
            </td>
        </tr>
    </tbody>
</table>

<hr style="color:transparent;border-color:transparent;background-color:transparent;page-break-after:always;">


    <div align="right" id="arTerms">
    <form>
<input id="printpagebutton" type="button" value="Print" onclick="printpage()"/>
</form> 
            <p>
                <h1>لوائح وقوانين المركز الخاصة بالطالب</h1>
                <h1>Regulations and laws of the Center for students</h1>
            </p>       
            <p>
                <strong>أنا ولي أمر الطالب / الطالبة أقر وأتعهد بأن إتمام عملية التسجيل وتوقيعي عليه وتسليمي للأوراق المطلوبة هو إقرار مني وإلتزام بشروط المركز والتي تنص على:-
</strong>
            </p>
            <p>
                <ul>
                    <li>متابعة ابني / ابنتي من الناحية التربوية والأخلاقية والتعليمية.</li>
                    <li>مراجعة الإدارة عندما يتم الاستدعاء ومتابعة الطالب طوال العام الدراسي.</li>
                    <li>المحافظة على النظافة العامة للطالب ( النظافة الشخصية، نظافة الملابس، تقليم الأظافر ونظافة الشعرمن القمل ).</li>
                    <li> المواظبة على قص الشعر بطول 2 سم للطلاب ويشترط أن تكون طريقة القص عادية وملائمة لطالب المدرسة.</li>
                    <li>الالتزام بالزي الرسمي المقدم من المركز مع مراعاة ( إرتداء الحذاء الأسود، إرتداء الحجاب الأبيض للفتيات ).</li>
                    <li>دفع غرامة مالية قيمتها 200 درهم في حال إلحاق الطالب لأي ضرر بممتلكات المركز.</li>
                    <li>خلو ابني / ابنتي من الأمراض التي تعيق الدراسة مثل ( الصرع، التشنج، التوحد، الصعوبة في النطق...إلخ ).</li>
                    <li> في حال إصابة ابني / ابنتي لا قدر الله بمرض معدي مثل الجدري يجب أن يغيب عن المركز فورًا حتى يسمح له الطبيب بالدوام وتكون مدة إجازة مرض الجدري
   على الأقل 14 يوم.</li>
                    <li> عدم إحضار الطالب لأي أجهزة مثل ( الهواتف النقالة، مشغلات الموسيقى، الألعاب، الولاعات، الكاميرات...إلخ ).</li>
                    <li> لا يسمح بأخذ إجازة لفترة طويلة من المركز ، إلا للضرورة ويتم تعبئة إستمارة الإجازة وتحديد تاريخ العودة ويجب الإلتزام به، وفي حال عدم الإلتزام يفصل
   الطالب تلقائيًا.</li>
                    <li> الإدارة غير ملزمة بتأمين مقعد للطالب في الحافلة المدرسية إذا تم تغيير مكان السكن بعد التسجيل بالمركز.</li>
                </ul>
            </p>
            <p>
                <strong><u>يفصل الطالب فصلاً نهائيًا من المركز في حال كانت هناك أحد الأسباب التالية:-</u></strong>        
            </p>
            <p>
                <ul>
                    <li>1. عدم التزام الطالب بالدوام من بداية العام الدراسي.</li>
                    <li>2.ممارسة سلوكيات وأخلاقيات غير سوية.</li>
                    <li>3. أكمل سنتين في المركز ولم نلاحظ أي تحسن في مستواه التعليمي وخصوصًا في مادة القرآن الكريم.</li>
                    <li>4. تكرار الشكاوي عليه من قبل المعلمين والإدارة وعدم اهتمام ولي الأمر وتواصله معنا لحل المشكلة.</li>
                    <li>5. تكرار المخالفات بعد استلام الإنذار والتوقيع على التعهد.</li>
                    <li>6. الغياب :</li>
                    <ul>
                        <li>تجاوز المدة المحددة للغياب ( 14 يوم في السنة الدراسية الواحدة ) بدون عذر طبي مصدق من وزارة الصحة.</li>
                        <li>الغياب لفترة طويلة بدون استمارة إجازة رسمية من الإدارة ( لأسباب مثل السفر ).</li>
                    </ul>
                </ul>
            </p>
            <p>
                <strong>ملاحظة هامة: توقيع ولي الأمر على إستمارة التسجيل هو إلتزامه بالقوانين واللوائح الخاصة بالمركز وعليه سوف يكون مسؤولاً عن تنفيذها.</strong>        
            </p>
    </div>     
  </div>


<!-- <script src="assets/js/jquery-1.11.0.min.js"></script> -->

<!-- <script type="text/javascript">

	$(document).ready(function()
	{
		var elem = $('#print');
		PrintElem(elem);
		Popup(data);

	});

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close();
        mywindow.focus();

        mywindow.print();
        mywindow.close();

        return true;
    }
</script> -->

<style>
u { 
    text-decoration: underline;
}
</style>

<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>