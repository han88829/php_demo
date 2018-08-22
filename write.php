<?php
// a 每次写入都向末尾增加数据   x 清空所有的添加新的
$fp = fopen('message.txt', 'a');
// 设置时间
$time = time();

// 获取前端传递数据
$username = trim($_POST['username']);
$content = trim($_POST['content']);

// 将数据存储到txt文件
$string = "$username&#$content&#$time&^";

fwrite($fp, $string);
fclose($fp);

header('location:index.php');
?>