<?php
ini_set('display_errors','On');
try {
$client = new SoapClient("http://updation.biz-solutionz.com/MOSService.asmx?WSDL");
$params = new stdClass();
$params->TransactionDate = date('d/m/Y');
$params->MerchantID = "BIG017BZR";
$params->TransactionID = "44531B9E76";
$params->Offerprice = 2;
$params->Publishedprice = 2;
$params->PNR = "760150241";
$result = $client->UpdateTransections($params)->UpdateTransectionsResult;
print_r($result);
}
catch(SoapFault $fault){
	trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
		
}
// if (true) {
//     trigger_error("Number cannot be larger than 10");
// }
// if (is_soap_fault($result)) {
//     trigger_error("SOAP Fault: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring})", E_USER_ERROR);
// }
// print_r($result);
?>
