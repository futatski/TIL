<?php


$data = 'a:2:{s:11:"total_value";s:1:"0";s:6:"detail";a:4:{i:0;a:5:{s:2:"id";s:1:"0";s:4:"name";s:9:"テスト";s:11:"choice_name";s:10:"選択肢2";s:9:"choice_id";s:1:"1";s:5:"value";s:1:"0";}i:1;a:5:{s:2:"id";s:1:"1";s:4:"name";s:10:"テスト1";s:11:"choice_name";s:10:"選択肢2";s:9:"choice_id";s:1:"4";s:5:"value";s:1:"0";}i:2;a:4:{s:2:"id";s:1:"2";s:4:"name";s:10:"テスト2";s:11:"choice_name";s:0:"";s:9:"choice_id";s:0:"";}i:3;a:4:{s:2:"id";s:1:"3";s:4:"name";s:10:"テスト3";s:11:"choice_name";s:0:"";s:9:"choice_id";s:0:"";}}}';

var_dump(unserialize($data));


?>
