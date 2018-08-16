<?php

// $data = $_REQUEST['hongniu'];

// echo "你提交的名字是 $data";

// var_dump($GLOBALS);

function demo()
{
    # code...
    static $a = 0;

    echo $a;
    $a++;
    if ($a < 10) {
        demo();
    }


}

// demo();

// $arr = array('杨幂', '范冰冰');

// array_unshift($arr, '高圆圆', '章子怡');

// // echo $arr;

// var_dump($arr);

// array_walk($arr, function ($item, $key) {
//     echo $item . $key;
// });

// print_r($arr);

// //定义一下时区常量，以后你可以放到配置文件里
// define('TIME_ZONE', 'Asia/shanghai');

// //执行函数
// date_default_timezone_set(TIME_ZONE);

// echo date('Y-m-d H:i:s');
// echo "<br>";
// $time_start = microtime(true);
// $num = 0;
// for ($i = 0; $i < 100000; $i++) {
//     $num++;
// };

// $time_end = (microtime(true) - $time_start) * 1000;

// echo "这个脚本执行的时间为 $time_end ms\n";


// 字符串处理函数
// $str = 'hello php !!!!!!';
// $string = 'hello PHP !!!!!!';
// $data = str_replace('hello', 'noHello', $str);
// echo $data . '- 字符串 <br/>';
// echo md5($data) . '- md5 <br/>';
// echo mb_strlen($data) . '-字符串长度 <br/>';


// 数组
$shu = [1, 1.5, true, '天王盖地虎，小鸡炖蘑菇'];

echo '<pre>';
var_dump(sort($shu));
echo '</pre>';

echo count($shu) . '-数组的长度<br/>';

foreach ($shu as $key => $value) {
    echo "数组的$key : $value <br/>";
};

$arr = [[1, 2, 3], [3, 3, 3], [5, 2], [0, 2]];
// 自定义排序
uasort($arr, function ($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
});
echo $arr;
?>