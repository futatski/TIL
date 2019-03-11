<?php

// phpQueryの読み込み
require_once("phpQuery-onefile.php");
require_once("scrap.php");

if(count($argv) != 2) {
    echo "引数が不正です:" . $argv . ":\n";
    exit(-1);
}

//var_dump($argv);

$productCode = $argv[1];
date_default_timezone_set('Asia/Tokyo');

$classData = new convertMyproteinHtmlData($productCode);
echo date("YmdHi") . "," . $classData->execute($productCode) . "\n";


?>
