<?php
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

function getKey($key, $default = "")
{
    return trim(isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default);
}

$menu= getKey("menu");
if (!empty($menu)) {
    $menuInfo = file_get_contents("https://way.jd.com/jisuapi/search?keyword=".$menu."&num=10&appkey=86d15a3db19f29dccae449f8426a8cb3");
    echo $menuInfo;
}