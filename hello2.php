<?php
$number = 1234;
if ($number % 2 == 0){
    $msg = '偶数';
} else {
    $msg = '奇数';
}
echo $number . 'は、' . $msg . ' です。';