<?php

  function send_message($message, $phones){
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://yoolasms.com/api/v1/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      "phone": "'.$phones.'",
      "message":"'.$message.'",
      "api_key": "P7y6jvHA5x82zYkCHrniD62fhelkE47R2gY0js97t9buvGHe807VmNmj3a1P7lC7"
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
  }

?>