<?php
$number = 100;
$total = 0;
for($i = 1; $i <= $number; $i++){
    $total += $i;
}
echo $number . "までの合計は、" . $total .  "です。";