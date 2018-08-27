<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>设置cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="" method="POST">
            用户名：<input type="text" name="username" />
			密  码：<input type="text" name="password" />
			<input type="submit" value="登录">	
    </form>
</body>
</html>


<?php 

session_start();

// 第一次登陆操作
if ($_POST['username'] != null && $_POST['password'] != null) {
    $userName = $_POST['username'];
    $_SESSION['username'] = $userName;
    header('location: welcome.php');
}

?>