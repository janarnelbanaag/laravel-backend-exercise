<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'http://localhost/curl/json.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $curl_respo = curl_exec($ch);
    
    curl_close($ch);

    $curl_respo = json_decode($curl_respo);

    echo "<pre>" . print_r($curl_respo) . "<pre>";   
?>