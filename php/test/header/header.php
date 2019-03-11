<?php

        while (@ob_end_flush());
        flush();
        ob_start();

	echo "test\n";


header('Location: http://www.example.com/');

	$data = ob_get_contents();
	ob_clean();

	var_dump($data);
?>
