<?php

$data["name"] = "data";
$data["val"] = 1;

print("===var_dump\n");
var_dump($data);

print("===serialize\n");

print(serialize($data) . "\n");

print("===serialize(serialize)\n");
print(serialize(serialize($data)) . "\n");


print("===unserialize(serialize)\n");
$tmp = serialize($data);
var_dump(unserialize($tmp));

print("===mb_convert_kana(serialize)\n");
print(mb_convert_kana(serialize($data),"") . "\n");

?>
