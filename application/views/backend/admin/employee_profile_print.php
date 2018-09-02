<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div dir="ltr" id="print">

    <style type="text/css">
        td {
            padding: 10px;
        }
        .emp-table td {
            width: 25%;
            display: table-cell;
            border: 1px solid #000;
            text-transform: capitalize;
        }
        .emp-table td:nth-of-type(even){
            background: #999;
            font-weight: bold;
        }
        .table-row  { display: table-row; border: 1px solid #000;}      
    </style>
    <center>
        <img src="<?php echo base_url(); ?>assets/images/header_e.jpg" style="width: 80%" ><hr>
       <!-- <h1>Employee Card</h1>
        <br><br><br> -->       
    </center>
    <table align="center" style="width:80%; border-collapse:collapse;border: 1px solid transparent; margin-top: 10px;">
        <tbody>
            <tr>
                <td style="text-align:left;width:70%;">                    
                    :<span><?php echo get_phrase('date');?></span>
                </td>
                <td style="text-align:left;width:30%;">
                    <?php echo $employee->Id_no; ?>:<span><?php echo get_phrase('functional_number');?></span>    
                </td>
            </tr>
        </tbody>
    </table>        
    <?php #var_dump($employee->en_name); ?>
    
    <table class="emp-table" align="center" style="width:80%; border-collapse:collapse; border: 1px solid #ccc; margin-top: 10px;text-align: right;">
        <tbody>
            <tr class="table-row">
                <td><?php echo $employee->en_name; ?></td>
                <td><?php echo get_phrase('name_in_english');?></td>
                <td><?php echo $employee->ar_name; ?></td>
                <td><?php echo get_phrase('name_in_arabic');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->dob; ?></td>
                <td><?php echo get_phrase('date_of_birth');?></td>
                <td><?php echo $employee->nationality; ?></td>
                <td><?php echo get_phrase('nationality');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->qualification; ?></td>
                <td><?php echo get_phrase('qualification');?></td>
                <td><?php echo $employee->joining_year; ?></td>
                <td><?php echo get_phrase('joining_year');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->eid_no; ?></td>
                <td><?php echo get_phrase('id_no');?></td>
                <td><?php echo $employee->job_title; ?></td>
                <td><?php echo get_phrase('job_title');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->pexpiry_date; ?></td>
                <td><?php echo get_phrase('passport_expiry_date');?></td>
                <td><?php echo $employee->passport_no; ?></td>
                <td><?php echo get_phrase('passport_number');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->guarantor; ?></td>
                <td><?php echo get_phrase('guarantor');?></td>
                <td><?php echo $employee->rexpiry_date; ?></td>
                <td><?php echo get_phrase('residency_expiry_date');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->transport_id; ?></td>
                <td><?php echo get_phrase('transportation');?></td>
                <td><?php echo $employee->address; ?></td>
                <td><?php echo get_phrase('address');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->tel1; ?></td>
                <td><?php echo get_phrase('phone_2');?></td>
                <td><?php echo $employee->tel; ?></td>
                <td><?php echo get_phrase('phone_1');?></td>
            </tr>
            <tr class="table-row">
                <td><?php echo $employee->nearest_person_no; ?></td>
                <td><?php echo get_phrase('nearest_person_no');?></td>                
                <td><?php echo $employee->social_status; ?></td>
                <td><?php echo get_phrase('social_status');?></td>
            </tr>
        </tbody>
    </table>
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