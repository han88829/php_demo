

<?php

$_current_file = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, __FILE__);

define('__CUR_FILE__', $_current_file);

// echo __CUR_FILE__;

// 文件上锁
$fp = fopen('test.txt', 'r+');

if (flock($fp, LOCK_EX)) {
    fwrite($fp, '文件已经上锁，无法进行操作（除了我自己）');

    flock($fp, LOCK_UN);//解除锁定
} else {
    echo '文件上锁失败！';
}


?>