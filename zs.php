<?php

/**
 * @author 懒人 <service@kuitao8.com>
 * @since 2.0
 */
header("Content-type:text/html; charset=utf-8");
function GetCurl($url){
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl,CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $resp = curl_exec($curl);
    curl_close($curl);
    return $resp;
}
$resp = GetCurl("http://www.kuitao8.com/api/joke");
$resp = json_decode($resp,true);
header('Content-type: application/json');
echo json_encode($resp);
?>