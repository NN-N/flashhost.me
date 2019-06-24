<?php
private function CpanelRequest($query,$ip=false) { 
          if($ip){
            $query = 'https://206.189.196.154:2087'.$query;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $header[0] = "Authorization: Basic " . base64_encode($this->server['user']. ":" . $this->server['passwd']) . "\n\r";
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curl, CURLOPT_URL, $query);
            $result = curl_exec($curl);
            if ($result == false) {
                error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");
            }
            curl_close($curl);
            $result = json_decode($result,1);

            return $result;
        } else {
            return false;
        }
    }
    ?>
