<?php
$auth_key = 1212;

$salt_str = md5($auth_key);

echo "salt string= ".$salt_str;
echo "<br>";
$oxigen_agent_id = 4875;

$tmp_string  = $oxigen_agent_id."_".$salt_str;
$str_crc = crc32($tmp_string);
echo "<br> enc crc :".$str_crc;
echo "<br>";
//$enc_string = $tmp_string."_".$str_crc;
$encoded = base64_encode($tmp_string);

echo "This is encoded string:  ". $encoded;

#####alter encoded str#######
$encoded_alter .= "1MDg3NV9hMDE2MTAyMjhmZTk5OGY1MTVhNzJkZDczMDI5NGQ4N18xNjU0MTYwOTc4"; 
echo "<br>change in encoded str: ".$encoded_alter;
//$decoded = base64_decode($encoded_alter);
#############################
echo "<br><br>";

$decoded = base64_decode($encoded);

$dec_arr = explode("_", $decoded);
echo "<pre>";
print_r($dec_arr);
echo "<br><br>";

//$dec_str1 = $dec_arr[0]."_".$dec_arr[1];
//$dec_str_crc = crc32($dec_str1);
//echo "<br> dec crc :".$str_crc;
echo "<br><br>";
echo "This is decoded string:  ". $decoded;
echo "<br><br>";
if (base64_decode($str, true) === false)
{
    echo 'Not a Base64-encoded string';
}


$bbd_enc_url = "http://middleware-dev.bigbazaardirect.com/partner-oxigen?Data=".$encoded;

// echo $bbd_enc_url;






?>
<br><br>
<a href="<?php echo $bbd_enc_url; ?>">Shop at Big Bazzar</a>