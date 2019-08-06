<?php
require_once 'config.php';
function create(){

}

echo "<br>==========================================================<br>";
echo "===================== VALIDASI INVOICE ====================<br>";
echo "==========================================================<br>";

/*
## VALIDASI INVOICE BRI
$sql_cekinv = mysqli_query($db, 'SELECT * FROM tb_invoice WHERE status = 3 && gateway = 1');
if ($sql_cekinv->num_rows != 0) {
  while ($inv = $sql_cekinv->fetch_assoc()) {
    $inv_date = $inv['time'];
    $inv_nominal = $inv['nominal'];
    $inv_paket = $inv['paket'];
    $inv_lokasi = $inv['lokasi'];
    $inv_domain = $inv['domain'];
    $inv_email = $inv['user_email'];
    $cp_user = str_replace('.', '', $inv_domain);
    $codestr = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $codechar = "!@#$%&*()?-+=_";
    $rand_str = "";
    $rand_char = "";
    for ($i=0; $i < 8; $i++) {
      $rand = rand(0, strlen($codestr)-1);
      $rand_str .= $codestr{$rand};
    }
    for ($x=0; $x < 2; $x++) {
      $rand = rand(0, strlen($codechar)-1);
      $rand_char .= $codechar{$rand};
    }
    $cp_pwd = $rand_str.$rand_char;
    //echo "
    //Username : $cp_user<br>
    //Password : $cp_pwd<br>
    //Domain : $inv_domain<br>
    //Paket : $inv_paket<br>
    //Server : $inv_lokasi<br>-----------------<br>
    //";

    // start check
    $curl = curl_init();
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);
		curl_setopt($curl, CURLOPT_URL, 'https://app.moota.co/api/v1/bank/'.$val_idbri.'/mutation/search/'.$inv_nominal);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_HTTPHEADER, [
		    'Accept: application/json',
		    'Authorization: Bearer '.$val_apikey
		]);
		$response = json_decode(curl_exec($curl));
    if (count($response->mutation, 0) != 0) {
      $n = 1;
      foreach ($response->mutation as $data) {
        $n++;
				$pay_sent_at = date('d-m-Y', strtotime($data->date)); // tgl mutasi (pembayaran)
				$inv_created = date('d-m-Y', strtotime($inv_date)); // tgl invoice dibuat
				$validasi = $data->mutation_id; //id mutasi
        if (strtotime($pay_sent_at) >= strtotime($inv_created) || strtotime($pay_sent_at) - strtotime($inv_created) == 86400){
					$sql_cekvalid = mysqli_query($db, "SELECT * FROM tb_invoice WHERE valid_by = '".$validasi."'");
					if ($data->type == "CR" && $sql_cekvalid->num_rows == 0){
            // invoice tervalidasi
            $sqL_validasi = mysqli_query($db, 'UPDATE tb_invoice SET status = 5 WHERE nominal = "'.$inv_nominal.'" && status = "3"');
            if ($db->query($sqL_validasi) === TRUE) {
              // CREATE cPanel
              create();
              // end of create cPanel
            }
            echo $n." Invoice BRI ".$inv_nominal ." validated! at $pay_sent_at by $validasi<br>";
          }else {
            // invoice tdk tervalidasi karena sudah digunakan untuk invoice lain
            echo $n." Invoice BRI ".$inv_nominal ." NOT validated!<br>";
          }
        }else{
          echo $n." Mutasi BRI ".$inv_nominal ." tidak memenuhi syarat!<br>";
        }
      }
    }else {
      // invoice belum dibayar
      echo "Pembayaran BRI ".$inv_nominal ." NOT FOUND!<br>";
    }
    //end progress
  }
}
*/

## VALIDASI INVOICE BANK
$sql_cekinv = mysqli_query($db, 'SELECT * FROM tb_invoice WHERE status = 3 && gateway = 2 || gateway = 1');
if ($sql_cekinv->num_rows != 0) {
  while ($inv = $sql_cekinv->fetch_assoc()) {
    $inv_gateway = $inv['gateway'];
    $inv_date = $inv['time'];
    $inv_nominal = $inv['nominal'];
    $inv_paket = $inv['paket'];
    $inv_lokasi = $inv['lokasi'];
    $inv_domain = $inv['domain'];
    $inv_email = $inv['user_email'];
    $inv_cycle = $inv['cycle'];
    $cp_user = str_replace('.', '', $inv_domain);
    $codestr = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $codechar = "!@#$%*()?-+=_";
    $rand_str = "";
    $rand_char = "";
    for ($i=0; $i < 8; $i++) {
      $rand = rand(0, strlen($codestr)-1);
      $rand_str .= $codestr{$rand};
    }
    for ($x=0; $x < 2; $x++) {
      $rand = rand(0, strlen($codechar)-1);
      $rand_char .= $codechar{$rand};
    }
    $cp_pwd = $rand_str.$rand_char;
    if ($inv_gateway == '1') {
      $idbank = $val_idbri;
    }else if ($inv_gateway == '2') {
      $idbank = $val_idbca;
    }

    if ($inv_cycle == 'm') {
      $exp = date('d-m-Y', (time()+(30*24*60*60)));
    }else if ($inv_cycle == 'y') {
      $exp = date('d-m-Y', (time()+(365*24*60*60)));
    }


    // start check
    $curl = curl_init();
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);
		curl_setopt($curl, CURLOPT_URL, 'https://app.moota.co/api/v1/bank/'.$idbank.'/mutation/search/'.$inv_nominal);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_HTTPHEADER, [
		    'Accept: application/json',
		    'Authorization: Bearer '.$val_apikey
		]);
		$response = json_decode(curl_exec($curl));
    if (count($response->mutation, 0) != 0) {
      $n = 1;
      foreach ($response->mutation as $data) {
        $n++;
				$pay_sent_at = date('d-m-Y', strtotime($data->date)); // tgl mutasi (pembayaran)
				$inv_created = date('d-m-Y', strtotime($inv_date)); // tgl invoice dibuat
				$validasi = $data->mutation_id; //id mutasi
        if (strtotime($pay_sent_at) >= strtotime($inv_created) || strtotime($pay_sent_at) - strtotime($inv_created) == 86400){
					$sql_cekvalid = mysqli_query($db, "SELECT * FROM tb_invoice WHERE valid_by = '".$validasi."'");
					if ($data->type == "CR" && $sql_cekvalid->num_rows == 0){
            // invoice tervalidasi
            $sqL_validasi = 'UPDATE tb_invoice SET status = 5, valid_at = "'.$timenow.'", valid_by = "'.$validasi.'" WHERE nominal = "'.$inv_nominal.'" && status = "3"';
            if ($db->query($sqL_validasi) === TRUE) {
              // CREATE cPanel
              echo $n." Invoice ".$inv_nominal ." validated! at $pay_sent_at by $validasi<br>";
              $sql_insertcp = "INSERT INTO tb_cpanel(cp_id, cp_server, cp_domain, cp_user, cp_pkt, cp_ctime, cp_exp, cp_status, cp_by)
                              VALUES(NULL, '$inv_lokasi', '$inv_domain', '$cp_user', '$inv_paket', '$datenow', '$exp', '5', '$inv_email')";
              $db->query($sql_insertcp);
              if ($inv_lokasi == "SG") {
                // if Server SG
                $query = "https://sg.flashhost.me:2087/json-api/createacct?api.version=1&username=".$cp_user."&domain=".$inv_domain."&plan=".$inv_paket."&password=".$cp_pwd."&contactemail=".$inv_email;
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                $header[0] = "Authorization: whm $user_SG:$token_SG";
                curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
                curl_setopt($curl, CURLOPT_URL, $query);
                $result = curl_exec($curl);
                $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                if ($http_status != 200) {
                    echo "[!] Error: " . $http_status . " returned\n";
                } else {
                    $json = json_decode($result);
                    $metadata = $json->metadata;
                    /*
                    echo "[+] Current cPanel users on the system:\n";
                    foreach ($json->{'data'}-del1.'<br>'.$del2>{'acct'} as $userdetails) {
                        echo "\t" . $userdetails->{'user'} . "\n";
                    }*/
                    //print_r($json);
                    //print_r($hasil);
                    echo "<br><br>";
                    if ($metadata->result == 1){
                      $data = $json->data;
                      $rawresult = $metadata->output->raw;
                      $del1 = strpos($rawresult, '+===================================+');
                      $del2 = strrpos($rawresult, '| Feature List: default');
                      $infolen = $del2 - $del1;
                      $info = substr($rawresult, $del1, $infolen);
                      $info = str_replace('|', '<br>', $info);
                      echo $info;
                    }else{
                      echo $metadata->reason; //error reason
                      // error list
                      // (XID ct5qpd) The domain “ngal1.com” already exists in the Apache configuration.
                      // (XID 5wsj8e) This system already has an account named “gtxoo”. at /usr/local/cpanel/Whostmgr/Accounts/Create.pm line 601.
                    }
                }
                curl_close($curl);
              }else if ($inv_lokasi == "US") {
                // if Server US
                $query = "https://us.flashhost.me:2087/json-api/createacct?api.version=1&username=".$cp_user."&domain=".$inv_domain."&plan=".$inv_paket."&password=".$cp_pwd."&contactemail=".$inv_email;
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
                    /*
                    echo "[+] Current cPanel users on the system:\n";
                    foreach ($json->{'data'}-del1.'<br>'.$del2>{'acct'} as $userdetails) {
                        echo "\t" . $userdetails->{'user'} . "\n";
                    }*/
                    //print_r($json);
                    //print_r($hasil);
                    echo "<br><br>";
                    if ($metadata->result == 1){
                      $data = $json->data;
                      $rawresult = $metadata->output->raw;
                      $del1 = strpos($rawresult, '+===================================+');
                      $del2 = strrpos($rawresult, '| Feature List: default');
                      $infolen = $del2 - $del1;
                      $info = substr($rawresult, $del1, $infolen);
                      $info = str_replace('|', '<br>', $info);
                      echo $info;
                    }else{
                      echo $metadata->reason; //error reason
                      // error list
                      // (XID ct5qpd) The domain “ngal1.com” already exists in the Apache configuration.
                      // (XID 5wsj8e) This system already has an account named “gtxoo”. at /usr/local/cpanel/Whostmgr/Accounts/Create.pm line 601.
                    }
                }
                curl_close($curl);
              }else if ($inv_lokasi == "UK") {
                // if Server UK
                $query = "https://uk.flashhost.me:2087/json-api/createacct?api.version=1&username=".$cp_user."&domain=".$inv_domain."&plan=".$inv_paket."&password=".$cp_pwd."&contactemail=".$inv_email;
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                $header[0] = "Authorization: whm $user_UK:$token_UK";
                curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
                curl_setopt($curl, CURLOPT_URL, $query);
                $result = curl_exec($curl);
                $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                if ($http_status != 200) {
                    echo "[!] Error: " . $http_status . " returned\n";
                }else {
                    $json = json_decode($result);
                    $metadata = $json->metadata;
                    /*
                    echo "[+] Current cPanel users on the system:\n";
                    foreach ($json->{'data'}-del1.'<br>'.$del2>{'acct'} as $userdetails) {
                        echo "\t" . $userdetails->{'user'} . "\n";
                    }*/
                    //print_r($json);
                    //print_r($hasil);
                    echo "<br><br>";
                    if ($metadata->result == 1){
                      $data = $json->data;
                      $rawresult = $metadata->output->raw;
                      $del1 = strpos($rawresult, '+===================================+');
                      $del2 = strrpos($rawresult, '| Feature List: default');
                      $infolen = $del2 - $del1;
                      $info = substr($rawresult, $del1, $infolen);
                      $info = str_replace('|', '<br>', $info);
                      echo $info;
                    }else{
                      echo $metadata->reason; //error reason
                      // error list
                      // (XID ct5qpd) The domain “ngal1.com” already exists in the Apache configuration.
                      // (XID 5wsj8e) This system already has an account named “gtxoo”. at /usr/local/cpanel/Whostmgr/Accounts/Create.pm line 601.
                    }
                }
                curl_close($curl);
              }
              // end of create cPanel
            }
          }else {
            // invoice tdk tervalidasi karena sudah digunakan untuk invoice lain
            echo $n." Invoice ".$inv_nominal ." NOT validated!<br>";
          }
        }else{
          echo $n." Mutasi ".$inv_nominal ." tidak memenuhi syarat!<br>";
        }
      }
    }else {
      // invoice belum dibayar
      echo "Pembayaran ".$inv_nominal ." NOT FOUND!<br>";
    }
    //end progress
  }
}
echo "==========================================================<br>";

echo "<br>==========================================================<br>";
echo "===================== CHECK EXPIRED INVOICE ====================<br>";
echo "==========================================================<br>";
$sql_getwaiting = mysqli_query($db, 'SELECT exp FROM tb_invoice WHERE status = 3');
if ($sql_getwaiting->num_rows != 0) {
	while ($waiting = $sql_getwaiting->fetch_assoc()) {
		$inv_exp = $waiting['exp'];
		if (strtotime($inv_exp) <= strtotime($timenow)) {
			$sql_exp = "UPDATE tb_invoice SET status = '0' WHERE exp = '".$inv_exp."'";
			if($db->query($sql_exp) === TRUE){
				echo "Expired..<br>";
			}
		}
	}
}
echo "==========================================================<br>";
?>
