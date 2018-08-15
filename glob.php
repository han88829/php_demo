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

demo();

?>