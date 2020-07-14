<?php
//引数
$min = $argv[1];
$max = $argv[2];
$total = 0;
for ( $i = $min; $i <= $max; $i++) {
    $total += $i;
}
print('Total(' . $min . '-' . $max . ') : ' . $total);