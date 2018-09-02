<?php

$XML = "Functional Number,Name in Arabic,Name in English,Social Status,Nationality,DOB,Gender,Qualfication,Amount of Conservation,Department Authorization,Job Title,Email,Joining Year,Living,Passport Number,Passport Expiry Date,Residency Number,Residency Expiry Date,Nearest Contact Person,Guarantor,ID Number,Phone 1,Phone 2,Transportation,Address,Note,Branch\n";
$file ="report_". date("Y-m-d"). ".csv";

$query = $this->db->query('select * from teacher');
        foreach ($query->result() as $row){
            $social_status = $row->social_status;
            if($social_status=="Married"){
                $social_status = "متزوج";
            }
            elseif($social_status=="Unmarried"){
                $social_status = "أعزب";
            }
            elseif($social_status=="Absolute"){
                $social_status = "مطلق";
            }
            $gender = $row->gender;
            if($gender=="male"){
                $gender = "ذكر";
            }
            elseif($gender=="female"){
                $gender = "أنثى";
            }
            $XML.= $row->Id_no. ",";
            $XML.= $row->ar_name. ",";
            $XML.= $row->en_name. ",";
            $XML.= $social_status. ",";
            $XML.= $row->nationality. ",";
            $XML.= $row->dob. ",";
            $XML.= $gender. ",";
            $XML.= $row->qualification. ",";
            $XML.= $row->amount_of_conservation. ",";
            $XML.= $row->department_authorization. ",";
            $XML.= $row->job_title. ",";
            $XML.= $row->email. ",";
            $XML.= $row->joining_year. ",";
            $XML.= $row->living. ",";
            $XML.= $row->passport_no. ",";
            $XML.= $row->pexpiry_date. ",";
            $XML.= $row->residency_no. ",";
            $XML.= $row->rexpiry_date. ",";
            $XML.= $row->nearest_person_no. ",";
            $XML.= $row->guarantor. ",";
            $XML.= $row->eid_no. ",";
            $XML.= $row->tel. ",";
            $XML.= $row->tel1. ",";
            $XML.= $row->transport_id. ",";
            $XML.= $row->address. ",";
            $XML.= $row->note. ",";
            $XML.= $row->branch. "\n";
        }

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$file\"");
header("Content-Transfer-Encoding: binary");
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')){
    header('Cache-Control: public');
}
echo $XML;
exit;
?>