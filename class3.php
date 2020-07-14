<?php
#コンストラクタを使ったクラスの書き方
#メリット：インスタンスを作るときに一緒にnameの値を引数として渡す

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

    public function __construct($name) {
        $this->name = $name;
    }

    function say() {
        echo "Hello, " . $this->name . "!\n";
    }
}

#継承
class Hello2 extends Hello {
    var $message = "Hello,";
    var $suffix = "!!";

    public function setMessage ($message, $suffix) {
        $this->message = $message;
        $this->suffix = $suffix;
    }

    function say() {
        echo $this->message . ", " . $this->name . $this->suffix . "\n";
    }
}

$hello1 = new Hello("Taro");
$hello1 -> say();

$hello2 = new Hello2("Hanako");
$hello2 ->setMessage("どうも", "さん！");
$hello2 ->say();