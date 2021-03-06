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

#public	外部から参照できる
#private	変数、関数を宣言したクラス内のみ参照できる
#protected	変数、関数を宣言したクラスと継承されたクラスから参照できる
#何も宣言しない場合は public として扱われる

class Hello {
    var $name = "no-name";

    function say(){
        echo "Hello, " . $this->name . "!\n";
    }
}

#クラスを使うにはインスタンスの作成が必要
$hello1 = new Hello();
#プロパティに値を設定する
$hello1 ->name = "Taro";
#メソッドを呼び出す
$hello1 -> say();

$hello2 = new Hello();
$hello2 ->name = "hanako";
$hello2 ->say();