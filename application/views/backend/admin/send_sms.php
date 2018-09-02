<?php
	$user="amrecgroupllc";
	$password="69440994";
	$mobilenumbers="0523545050,0523795050";
	$message = "تحيات من مركز بلال";
	$senderid="SMSCountry";
	$messagetype="LNG";
	$DReports="Y";
	$url="http://www.smscountry.com/SMSCwebservice_Bulk.aspx";
	$message = urlencode($message);
	$ch = curl_init();
	if (!$ch){
		die("Couldn't initialize a cURL handle");
	}
	$ret = curl_setopt($ch, CURLOPT_URL,$url);
		   curl_setopt ($ch, CURLOPT_POST, 1);
		   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		   curl_setopt ($ch, CURLOPT_POSTFIELDS,
	"User=$user&passwd=$password&mobilenumber=$mobilenumbers&message=$message&sid=$senderid&mtype=$messagetype&DR=$DReports");
	$ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//If you are behind proxy then please uncomment below line and provide your proxy ip with port.
	// $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
	$curlresponse = curl_exec($ch); // execute
	if(curl_errno($ch))
		echo 'curl error : '. curl_error($ch);
	if (empty($ret)) {
			// some kind of an error happened
		die(curl_error($ch));
		curl_close($ch); // close cURL handler
	} else {
		$info = curl_getinfo($ch);
		curl_close($ch); // close cURL handler
		echo $curlresponse; //echo "Message Sent Succesfully" ;
	}
?>