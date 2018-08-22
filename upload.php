<?php

if ($_FILES['file']['error'] > 0) {
    switch ($_FILES['file']['error']) {	//错误码不为0，即文件上传过程中出现了错误
        case '1':
            echo '文件过大';
            break;
        case '2':
            echo '文件超出指定大小';
            break;
        case '3':
            echo '只有部分文件被上传';
            break;
        case '4':
            echo '文件没有被上传';
            break;
        case '6':
            echo '找不到指定文件夹';
            break;
        case '7':
            echo '文件写入失败';
            break;
        default:
            echo "上传出错<br/>";
    }
} else {
    //错误码为0，即上传成功，可以进行后续处理，处理流程见下文
    var_dump($_FILES);
    $name = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "assets/$name");
}

?>