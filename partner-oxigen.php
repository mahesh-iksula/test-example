<?php

print_r($_GET);
$parameters = $_GET;

$auth_key = "bbd¾a9.¢Jª|-}¬Ì˜^";

if(isset($parameters['id1']) && isset($parameters['id2'])){
	$req_agent_id = substr($parameters['id1'], 10); //first 10 digit are random number, so skip it.
	
	$req_hash_val = $parameters['id2'];

	$cal_enc_str = $req_agent_id.$auth_key;
	$cal_hash_val = md5($cal_enc_str);

	if($req_hash_val == $cal_hash_val){
		echo "<br> not tempered";
	}
	else{
		echo "<br> values are tempered ";	
	}
}


?>