<?php

$content = get('http://www.xmtnews.com/events');

preg_match('/<section class="ov">(.*?)<div class="hr-10"><\/div>/mis', $content, $match);

//将正则匹配到的内容赋值给$area
$area = $match[1];

preg_match_all('/<h3><a href="(.*?)" title=".*?" class="headers" target="_blank">(.*?)<\/a><\/h3>/', $area, $find);


var_dump($find);

function get($url)
{
    // 初使化curl
    $ch = curl_init();

    //请求的url，由形参传入
    curl_setopt($ch, CURLOPT_URL, $url);

    //将得到的数据返回
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //不处理头信息
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //连接超过10秒超时
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    //执行curl
    $output = curl_exec($ch);

    //关闭资源
    curl_close($ch);

    //返回内容
    return $output;
};

function post($url, $data) {
    
    //初使化init方法
	$ch = curl_init();

    //指定URL
	curl_setopt($ch, CURLOPT_URL, $url);

    //设定请求后返回结果
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	//声明使用POST方式来进行发送
	curl_setopt($ch, CURLOPT_POST, 1);

	//发送什么数据呢
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    
	//忽略证书
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    //忽略header头信息
	curl_setopt($ch, CURLOPT_HEADER, 0);

    //设置超时时间
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    //发送请求
	$output = curl_exec($ch);

    //关闭curl
	curl_close($ch);

    //返回数据
	return $output;
}



?>