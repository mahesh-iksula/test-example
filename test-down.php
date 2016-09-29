<?php
       /*ini_set("default_socket_timeout","20");
       set_time_limit(20);
       $f=fopen("http://cooperpharma.iksulabeta.com/","r");
       $r=fread($f,1000);
       fclose($f);
       if(strlen($r)>1) {
       echo("<span class='online' style='background-color: green;'>Online</span>");
       }
       else {
       echo("<span class='offline' style='background-color: red;'>Offline</span>");
       }*/

?>
<?php
function Visit($url){
       $agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
       $ch=curl_init();
       curl_setopt ($ch, CURLOPT_URL,$url );
       curl_setopt($ch, CURLOPT_USERAGENT, $agent);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt ($ch,CURLOPT_VERBOSE,false);
       curl_setopt($ch, CURLOPT_TIMEOUT, 20);
       curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
       curl_setopt($ch,CURLOPT_SSLVERSION,3);
       curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
       $page=curl_exec($ch);
       //echo curl_error($ch);
       $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
       curl_close($ch);
       if($httpcode>=200 && $httpcode<300) return true;
       else return false;
}
if (Visit("http://cooperpharma.iksulabeta.com/"))
       echo "Website OK"."n";
else
       echo "Website DOWN";
?>