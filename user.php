<?php

$data = [
    'username' => $_REQUEST['username'],
    'password' => trim($_REQUEST['password']),
    'repassword' => trim($_REQUEST['repassword']),
];

if ($data['password'] != $data['repassword']) {
    echo '两次输入的密码不一致';
    return;
};

// 删除重复密码
unset($data['repassword']);
$data['password'] = md5($data['password']);
$data['time'] = time();
// 获取用户注册ip
$data['ip'] = ip2long($_SERVER['REMOTE_ADDR']);

// 连接数据库
$conn = mysql_connect('localhost', 'root', 'root');

// 捕获连接错误
if (mysql_error($conn)) {
    echo mysql_error($conn);
    exit;
};

mysql_select_db($conn, 'test');
mysql_set_charset($conn, 'utf8');

$sql = "insert into user(username,password,time,ip) values('" . $data['username'] . "," . $data['password'] . "," . $data['time'] . "," . $data['ip'] . "')";

$result = mysql_query($conn, $sql);

if ($result) {
    echo '注册成功';
} else {
    echo '注册失败';

}

echo '当前用户插入的ID为' . mysqli_insert_id($conn);


?>