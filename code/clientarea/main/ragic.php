<?php
function sel($table,$fild){
    $url = "api=null&v=3";
    $ch = curl_init();
    $url = "https://ap11.ragic.com/websiteszoo/$table?$url&$fild";
    $headr = array();
    $headr[] = 'Content-length: 0';
    $headr[] = 'Content-type: application/json';
    $headr[] = 'Authorization: Basic WXh6M2x5RlovUUZyNEwyYkhwQmNkdDlObHZvc2RXTTN5aVBpZVpvRTN5V1lrcDVLQ2xoSlR2Um9xNHp6V3k4TDE3Q1c3MHdaeWJvPQ==';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch); 
    curl_close($ch);
    return $output;
}

function edit($id,$arr){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://ap11.ragic.com/websiteszoo/ragicforms6/20004/$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $arr,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Basic WXh6M2x5RlovUUZyNEwyYkhwQmNkdDlObHZvc2RXTTN5aVBpZVpvRTN5V1lrcDVLQ2xoSlR2Um9xNHp6V3k4TDE3Q1c3MHdaeWJvPQ==',
    ),
    ));
    $response = curl_exec($curl);

curl_close($curl);
}
?>