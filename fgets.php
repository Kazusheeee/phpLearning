<?php
print('your name:');
//fgets(STDIN)はpythonでいうinput('')に相当するもの
$nm = fgets(STDIN);
print('Hello, ' . trim($nm) . '!!');
//trim関数がなければ改行してしまう