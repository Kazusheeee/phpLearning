<?php
$data = [
    'taro' => 'taro@yamada',
    'hanako' => 'hanako@flower',
    'sachiko' => 'sachico@happy'   
];
$n = count($data);
$result = '';
#連想配列
#foreach( $配列 as $ キー => $値)
foreach($data as $key => $val){
    $result .= $key ." : " . $val . "\n";    
}
echo $result;