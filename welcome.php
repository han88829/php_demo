<?php
session_start();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://www.phpxy.com', 1);

?>