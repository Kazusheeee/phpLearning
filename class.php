<?php
#クラスの書き方
#class クラス{
    #var $変数;
    #...必要なだけ記述...

    #function 関数 ( 引数...){
        #...実行する処理
    #}
    #...必要なだけ記述... 
#}
#プロパティ: クラスの中に用意する変数
#メソッド：クラスの中に用意する関数
class Hello {
    var $name = "no-name";

    function say(){
        echo "Hello, " . $this->name . "!\n";
    }
}

$hello1 = new Hello();
$hello1 ->name = "Taro";
$hello2 = new Hello();
$hello2 ->name = "hanako";
$hello2 ->say();