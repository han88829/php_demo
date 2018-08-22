<?php 
//   phpinfo();
// $name = '我是php，';
// $age  = "$name 年龄\"21";

// 浮点数
// $num = 123.8273;
// echo $num;
// $number = 0.8813;
// var_dump($number);

// $isNaN = null;

// if(empty($isNaN))
// echo '我是false或者null';
// else 
// echo '为真';

// $one = 10;
// $two = false;
// $three = 0;
// $four = null;
// $data = array(
//     'num'=>123,
//     'arr'=>array(
//         'num'=>222,
//     ),
// );

// $result = isset($one , $two , $three , $four);
// // isset只检查是否有null，有一个就返回true
// //执行看看结果，是不是
// // unset 删除变量中的指定字段
// unset($data['num']);
// var_dump(gettype($data));


// $shu = 'biao';
// $biao = 'wo';
// $wo = 'test';
// $test = 'sina';
// $sina = 'zhongguo';
// $zhongguo = 'china';
// $china = '我爱你';
// //别运行，自己去推理一下代码。也写几个可变变量玩玩吧！
// echo $$$$$shu;

// $data  = $_REQUEST['data'];
// // echo $data;

// print_r(123);


// 循环
// $i = 0;
// echo '<table width="800" border="1" >';

// while ($i <= 50) {
//     if ($i % 10 == 0) {
//         if($i%20==0){
//             echo '<tr bgcolor="yellow" />';
//         }else{
//             echo '<tr bgcolor="block" />';
//         }
//     }

//     echo '<td>' . $i . '</td>';
//     $i++;
// }

// echo '</table>';

// goto 跳出循环
// for ($i = 0; $i < 100; $i++) {
//     echo "我是第 $i 行数据<br/>";
//     if ($i >= 50) {
//         goto end;
//     }
// }

// end :
//     echo '结束';

// function foo()
// {
//     echo '我是函数foo哟，调一下我才会执行定义函数bar的过程<br />';
//     function bar()
//     {
//         echo '在foo函数内部有个函数叫bar函数<br />';
//     }


// }


// foo();

// //现在可以调用bar()函数了，因为foo()函数的执行使得bar()函数变为已定义的函数

// bar();

// //再调一次foo()看看是不是会报错？
// foo();


// 写留言本
// 设置时区

date_default_timezone_set('PRC');

// 读取txt内容
$string = file_get_contents('message.txt');

if ($string) {
    $string = rtrim($string, '&^');

    // 切割成数组
    $arr = explode('&^', $string);

    foreach ($arr as $key => $value) {
        list($username, $content, $time) = explode('&#', $value);

        echo '用户名为<font color="gree">:' . $username . '</font>内容为<font color="red">:' . $content . '</font>时间为:' . date('Y-m-d H:i:s', $time);
        echo '<hr />';
    }
} else {
    echo '留言为空！';
}

?>

<h1>基于文件的留言本演示</h1>
<form action="write.php" method="post">
    用户名：<input type="text" name="username" /><br />

    留言内容：<textarea  name="content"></textarea><br />

    <input type="submit" value="提交" />

</form>

