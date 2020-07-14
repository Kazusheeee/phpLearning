<?php
$total = 0;
$data = [98, 76, 54, 32, 19, 87, 65, 43, 21];
$n = count($data);
#for($i = 0; $n; $i++){
    #$total += $data[$i];
#}
foreach($data as $item){
    $total += $item;
}
$ave = $total / $n;
echo "合計:" . $total . "、平均:" . $ave;