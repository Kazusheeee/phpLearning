<?php
print ('min number: ');
$min = (int) fgets(STDIN);
print('max number: ');
$max = (int)fgets(STDIN);

$total = 0;
for ($i = $min; $i <= $max; $i++) {
    $total += $i;
}
print('Total(' . $min . '-' . $max . '): ' . $total);