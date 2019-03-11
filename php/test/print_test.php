<?php

date_default_timezone_set('Asia/Tokyo');
$format = 'Y-m-d H:i:s';
$date = DateTime::createFromFormat($format, '2000-01-01 00:00:00');
echo $date->format('Y') . "\n";

// トラッキングコードを追加

$trackingCode = "";

$trackingCode .= '<img src="http://www.google-analytics.com/collect?v=1';

$trackingCode .= '&tid=UA-xxxxxxxx-1';

$trackingCode .= '&cid=' . sprintf( '%04x%04x.%04x%04x', mt_rand(1, 0xffff), mt_rand(1, 0xffff), mt_rand(1, 0xffff), mt_rand(1, 0xffff));

$trackingCode .= '&t=event&ec=email';

$trackingCode .= '&ea=open';

$trackingCode .= '&el=' .date("Ymd");

$trackingCode .= '" />';

$mailBody .= $trackingCode;
echo $trackingCode;

echo serialize(array());


?>
