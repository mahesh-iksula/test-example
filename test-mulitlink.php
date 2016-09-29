<?php
print_r($_POST);
?>
<form id ="form1" method="post" action="http://www.mbznssol.biz/">
        <input type="hidden" name="MerchantId" value="BIG017BZR" />
        <input type="hidden" name="OrderId" value="121454_1" />
        <input type="hidden" name="OfferPrice" value="1" />
        <input type="hidden" name="Date" value="10/10/2014" />
        <input type="hidden" name="Product" value="Domestic" />
        <input type="hidden" name="PublishedPrice" value="1" />
        <input type="hidden" name="Mode" value="LIVE" />
        <input type="hidden" name="ReturnURL" value="http://localhost/test/test-mulitlink.php" />
        <input type="hidden" name="CustomerName" value="Chirag" />
        <input type="hidden" name="Description" value="Description Goes Here" />
        <input type="hidden" name="TDS" value="10" />
        <input type="hidden" name="AgentLogin" value="ABC123" />
        <input type="Submit" name="Submit" value="Proceed to payment" />
    </form>

<?php
ini_set('display_errors','On');

$ch = curl_init();                    // initiate curl
$url = "http://www.mbznssol.biz/"; // where you want to post data
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, true);  // tell curl you want to post something
curl_setopt($ch, CURLOPT_POSTFIELDS, "MerchantId=BIG017BZR&OrderId=007&OfferPrice=500"); // define what you want to post
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec ($ch); // execute
//header("Location: http://www.mbznssol.biz/");
// $redirectURL = curl_getinfo($ch,CURLINFO_EFFECTIVE_URL );

// curl_close($ch);
// print_r($output);
?>