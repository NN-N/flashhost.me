

<?

$exp = date('d-m-Y', (time()+(30*24*60*60)));
echo $exp;
/*
    $user = "root";
    $token = "KEJVV6IN5LKT99RRKTO4329Y3JX7LGG6";
    $username = "bvri31";
    $domain = "ngal51.com";
    $plan = "Gold";
    $pwd = "hits45%CVX";
    $email = "ngal11.tk@gmail.com";

    $query = "https://sg.flashhost.me:2087/json-api/createacct?api.version=1&username=".$username."&domain=".$domain."&plan=".$plan."&password=".$pwd."&contactemail=".$email;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);

    $header[0] = "Authorization: whm $user:$token";
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
        /*

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
    */
?>
