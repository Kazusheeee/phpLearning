<?php
#function 関数名 ( 引数1, 引数2, ...){
    #...実行する処理
#}
function hello($name){
    return "Hello, {$name}!\n";
}

$a = hello("Taro");
$b = hello("Hanako");
$msg = "<<hello!>>\n" . $a . $b;
echo $msg;