<?php


$org = array();

$org[0] = "1111";
$org[1] = "2222";

$data1[0]["option"] = $org;
$data2[0]["option"] = $org;

echo "============================================================\n";
echo "before\n";

compare($data1, $data2);

echo "============================================================\n";
$data2[0]["option"][1] = "3333";

echo "after\n";
compare($data1, $data2);


echo "============================================================\n";
echo "array() test\n";
$data2[0]["option"] = array();
compare($data1, $data2);

function compare($data1, $data2) {
	var_dump($data1);
	var_dump($data2);

	if($data1[0]["option"] == $data2[0]["option"]) {
	       	printf("match\n");
	}
	else {
	        printf("un match\n");
	}
}

?>
