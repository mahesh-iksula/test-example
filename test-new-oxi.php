<?php

$oxigen_agent_id = 8765456789;
$auth_key = "BbdO995X304IbbdG";

$tmp_str = $oxigen_agent_id.$auth_key;

$enc_str = md5($tmp_str);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$bbd_enc_url = "http://middleware-dev.bigbazaardirect.com/partner-oxigen?id1=".generateRandomString().$oxigen_agent_id."&id2=".$enc_str;
// $bbd_enc_url = "partner-oxigen.php?id1=".generateRandomString().$oxigen_agent_id."&id2=".$enc_str;

?>
<br><br>
<a href="<?php echo $bbd_enc_url; ?>">Shop at Big Bazzar</a>