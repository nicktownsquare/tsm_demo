<?php
    //header('Content-type: application/json');
    //echo file_get_contents('https://ads.townsquaredigital.com/projects/rfp-request/issues.json?key=b0a4591ad5ccef4fb4cceed89161cacac268f450&query_id=' . $_REQUEST['id']);
    
    header('Content-type: application/json');
    $url = 'https://ads.townsquaredigital.com/projects/rfp-request/issues.json?key=b0a4591ad5ccef4fb4cceed89161cacac268f450&query_id=' . $_REQUEST['id'];
	$c = curl_init();
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_URL, $url);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	$contents = curl_exec($c);
	curl_close($c);
	$object = json_decode($contents);
	echo json_encode($contents);
    
?>