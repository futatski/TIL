<?php

$data = array();  

$data +=  array(1=>'なし');
$data +=  array(2=>'2');
$data +=  array(20=>'テスト');

var_dump($data);

unset($data[20]);

var_dump($data);

$data2 = array(20=>'テスト') +  $data;
var_dump($data2);

?>
