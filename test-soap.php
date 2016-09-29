<?php
/*$proxy = new SoapClient('http://hunew.iksulabeta.com/api/soap/?wsdl');
$sessionId = $proxy->login('anuj', 'iksula@123');

$filters = array(
    'sku' => array('like'=>'APWETSROCO634WHMD')
);

$products = $proxy->call($sessionId, 'product_stock.list', 'APWETSROCO634WHMD'); // Giving inventory count for simple product
echo "<pre>";
print_r($products);*/
ini_set('display_errors','On');
?>
<?php
$proxy = new SoapClient('http://www.alldaychemist.com/api/soap/?wsdl');
$sessionId = $proxy->login('iksulareports', 'brAM1lVvlHjkpwvR55Im');


$params = array(array(
            'filter' => array(
                array(
                    'key' => 'status',
                    'value' => 'pending'
                ),
                array(
                    'key' => 'created_at',
                    'value' => '2001-07-21',
                )
            ),
            
        ));

$result = $proxy->__call('salesOrderList', $params);

echo "<pre>";
print_r ($result);
exit;
foreach ($result as $value) {

	echo "Order id:- ".$value['increment_id'];
	echo "<br>";
	echo "Order Created date:- ". $value['created_at'];
	echo "<br>";
	echo "Order State:- ". $value['state'];
	echo "<br>";
	echo "Order Status:- ". $value['status'];
	echo "<br>";
	echo "Order Grand Total:- ". $value['grand_total'];
	echo "<br>";
	echo "<br>";

}
exit;
// print_r($products);
?>
<?php

$client = new SoapClient('http://www.alldaychemist.com/api/soap/?wsdl');

// If some stuff requires api authentification,
// then get a session token
$session = $client->login('iksulareports', 'brAM1lVvlHjkpwvR55Im');


// $filter_crt = array(array('key' => 'created_at', 'value' => array('key' => 'in', 'value' => '2015-04-06')));
// $filter_crt1 = array('key' => 'status', 'value' => 'awaiting_check_transfer');
$filters = array(
    'created_at' => array(
        'from' => '2015-04-06 00:00:00',
        'to' => '2015-05-06 00:00:00'
    )
);
// $complexFilter->complex_filter = array( array( 'key' => 'CREATED_AT', 'value' => array('key' => 'from', 'value' => '2015-04-07 00:00:00') ), array( 'key' => 'created_at', 'value' => array('key' => 'to', 'value' => '2015-05-06 12:02:02') ), );

$filter = array('filter' => array($filters));

$result = $client->salesOrderList($session, $complexFilter);

echo "<pre>";
// print_r ($result);
// echo "</pre>";
foreach ($result as $v) {
	print_r($v->increment_id);
}
?>