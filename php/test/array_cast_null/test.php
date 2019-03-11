<?php

#var_dump((array)null);
#var_dump((array)"");


foreach((array)null as $i => $y) {
	echo $i . " null\n";
}

foreach((array)"" as $i => $y) {
	echo $i . " \"\"\n";
}

?>
