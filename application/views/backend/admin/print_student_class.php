<?php
    
?>


<div id="print">

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <style type="text/css">
        td {
            padding: 5px;
        }
    </style>

    <center>
        <img src="<?php echo base_url(); ?>assets/images/header_c.jpg" style="padding-right: 155px;"><br>
        
    </center>

    <table style="width:100%; border-collapse:collapse;border: 1px solid #ccc; margin-top: 10px;" border="1">
       <thead>
        <tr>
            <!-- <th  style="text-align: center;">Functional Number</th> -->
            <th  style="text-align: center;">Name</th>
            <!-- <th  style="text-align: center;">Date of Birth</th>
            <th  style="text-align: center;">Email</th>
            <th  style="text-align: center;">Joining Year</th>
            <th  style="text-align: center;">Residency Expiry</th> -->
            <th  style="text-align: center;">Phone</th>

        </tr>
    </thead>
    <tbody>
        <?php 
            //var_dump($_POST);
            $level = $_POST['select_level'];
            $querylevel = $this->db->query('select * from class where class_id='.$level.'');
            $querylevel->result();
            $rowlevel = $querylevel->row();
            if (isset($rowlevel))
            {
                    $levelname = $rowlevel->name;
            }
            $query = $this->db->query('select * from student where class_id='.$level.'');
            ?>
            <h3 style="font-weight: 100;">List of students in the level <?php echo $levelname; ?></h3>
            <?php
            foreach ($query->result() as $row)
            {
            ?>
            <tr>
                <!-- <td><?php echo $row->Id_no; ?></td> -->
                <td><?php echo $row->ar_name; ?></td>
                <!-- <td><?php echo $row->dob; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->joining_year; ?></td>
                <td><?php echo $row->rexpiry_date; ?></td>
                <td><?php echo $row->tel; ?></td> -->
                <td><?php echo $row->phone; ?></td>
            </tr>
            <?php
            }
        ?>
            
    </tbody>
   </table>

<br>
<form>
<input id="printpagebutton" type="button" value="Print" onclick="printpage()"/>
</form>
</div>


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