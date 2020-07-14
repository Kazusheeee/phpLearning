<?php
$number = 100;
$total = 0;
$count = 1;
while($count <= $number){
    $total += $count;
    $count++;
}
echo $number . "までの合計は、$total です。";