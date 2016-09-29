<?php
ini_set('display_errors','On');
require_once 'nusoap.php';
try {
$client = new SoapClient("https://pbiwstest.payback.in/PBExternalServices/v1/soap?wsdl");
// $params = new stdClass();
$params = array('ForgotPasswordRequest' => array('Authentication' => array('Identification' => array('Alias' => '9401120106548201', 'AliasType' => 1), 'Security' => array('SecretType' => 0)), 'CommunicationChannel' => 1, 'SendMobileAndEmail' => 'YES'));


// $params->ForgotPasswordRequest['Authentication']['Identification']['Alias'] = "9401120106548201";
// $params->ForgotPasswordRequest['Authentication']['Identification']['AliasType'] = 1;

// $params->ForgotPasswordRequest->Authentication->Security->SecretType = 0;
// $params->ForgotPasswordRequest->Authentication->Security->Secret = 1024;

// $params->ForgotPasswordRequest->CommunicationChannel = 1;
// $params->ForgotPasswordRequest->SendMobileAndEmail = "YES";

$result = $client->ForgotPassword($params);
var_dump($result);
	// if(!empty($result)){
	// 	echo "result hai bc <br>";
	// 	print_r($result);
	// }
	// else{
	// 	echo "result nahi hai bahen....";
	// }
}
catch(SoapFault $fault){
	trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
		
}
?>
