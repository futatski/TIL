<?php

date_default_timezone_set('Asia/Tokyo');
$format = 'Y-m-d H:i:s';
$date = DateTime::createFromFormat($format, '2000-01-01 00:00:00');
echo $date->format('Y') . "\n";


?>
