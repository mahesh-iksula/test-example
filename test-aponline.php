<?php
ini_set('display_errors','On');
try {
$client = new SoapClient("http://125.16.9.138:8090/CheckSumService/VerifyChekSum.asmx?op=VerifyCheckSum&wsdl");
$params = new stdClass();
$params->strParameter = "Aoe6m47MJTZPoLGHgVjumyYoJteoBg9t8TYMCaOPHqBqg2j1JeUBiyMVzFsUSjQYLI2/RKkebryKwC7BYuU83CD0K/sgbHM8nBLncnwvecYITh0K/e6tjt5YS8H3nAi+1rIwQPBTyOAN2KpYjQTTNw+CPL6DJV9iZV3iBQFi05VYH9B4g5x7pFToUvR/c2cD";
$result = $client->VerifyCheckSum($params)->VerifyCheckSumResult;
// var_dump($result);
	if(!empty($result)){
		echo "result hai bc <br>";
		print_r($result);
	}
	else{
		echo "result nahi hai bahen....";
	}
}
catch(SoapFault $fault){
	trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
		
}
?>
