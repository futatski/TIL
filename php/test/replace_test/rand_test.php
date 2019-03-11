<?php


	for ($i = 0;$i < 20000;$i++) {
		$body = "";
		$body .= sprintf( '%08d.%08d', mt_rand(0, 0xffffffff), mt_rand(0, 0xffffffff)); 
		echo $body . "\n";

	}


?>
