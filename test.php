<?php

$str = '1,2,3,4';

// $str = str_replace(',', '', $str);
// 通过正则把字符串转为数组
$arr = preg_split("/,/",$str);

print_r($arr);

?>