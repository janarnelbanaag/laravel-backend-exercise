<?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://tarkie.local/API/2.0/time-in',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
          "api_key": "eqgfudsafuo786967574u1itigqeyfyfhdalfuekajdfgud",
          "employee_id": "3596",
          "store_id": "2",
          "date_in": "2023-10-24",
          "time_in": "09:13:25",
          "battery_level": "100",
          "local_record_id": "951230131322162",
          "sync_batch_id": "8412031231655",
          "is_valid": "1",
          "address": "981 92STR Sta. Lucia",
          "country": "Philippines",
          "region": "NCR",
          "zipcode": "1630",
          "city": "Pasig",
          "longitude": "121.89891239101",
          "latitude": "14.9923423534201",
          "gps_date": "2023-10-24",
          "gps_time": "09:13:25"
      }'
      ));
      
      $curl_respo = curl_exec($curl);
      
      curl_close($curl);

    echo "<pre>" . print_r($curl_respo) . "<pre>";   
?>