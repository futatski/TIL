<?php

var_dump(unserialize(NULL));

$data = array();

echo serialize($data);

var_dump(unserialize(serialize($data)));


?>
