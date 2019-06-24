<?php
 
require_once 'files/config.php';

/* Suspend Account
$cp_user = 'gtxso';
$query = "https://us.webhits.ooo:2087/json-api/suspendacct?api.version=1&user=".$cp_user."&reason=Nonpayment";

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$header[0] = "Authorization: whm $user_US:$token_US";
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
curl_setopt($curl, CURLOPT_URL, $query);
$result = curl_exec($curl);
$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($http_status != 200) {
    echo "[!] Error: " . $http_status . " returned\n";
} else {
    $json = json_decode($result);
    $metadata = $json->metadata;

    echo "<br><br>";
    if ($metadata->result == 1){
      // TRUE
      echo $cp_user.'Suspended';
    }else{
      echo $metadata->reason; //error reason
      // FALSE
    }
}
*/

/* Remove Account
$cp_user = 'gtxso';
$query = "https://us.webhits.ooo:2087/json-api/removecct?api.version=1&user=".$cp_user;

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$header[0] = "Authorization: whm $user_US:$token_US";
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
curl_setopt($curl, CURLOPT_URL, $query);
$result = curl_exec($curl);
$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($http_status != 200) {
    echo "[!] Error: " . $http_status . " returned\n";
} else {
    $json = json_decode($result);
    $metadata = $json->metadata;

    echo "<br><br>";
    if ($metadata->result == 1){
      // TRUE
      echo $cp_user.'Suspended';
    }else{
      echo $metadata->reason; //error reason
      // FALSE
    }
}
*/
curl_close($curl);
?>
