<?php

/*$client = new SoapClient("http://103.241.146.226:72/VendorLeadInfoSPC.svc?wsdl");
// $client->__setLocation("http://103.241.146.226:72/VendorLeadInfoSPC.svc/basic");
$session = $client->login("iksula", "5230");
$response = $client->MethodName(array( "Start Date " => "07/22/2015", "End Date" => "07/22/2015", "Username" => "iksula", "Password" => "5230"));

*/
?>
<?php
header('Content-Type: text/plain');

echo "WCF Test\r\n\r\n";

$client = new SoapClient('http://103.241.146.226:72/VendorLeadInfoSPC.svc?wsdl');

$retval = $client->VendorLeadInfoSPCClient();

// echo "2.5 + 3.5 = " . $retval->AddResult;
?>