<?php
$season = "春";
switch($season){
    case "春":
    $msg = "3月・4月・5月";
    break;

    case "夏":
    $msg = "6月・7月・8月";
    break;

    case "秋":
    $msg = "9月・10月・11月";
    break;

    case "冬":
    $msg = "12月・1月・2月";
    break;

    default:
    $msg = "わからない";

}
echo $season . 'は、' . $msg . 'です。';