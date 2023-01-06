<?php


require __DIR__.'/src/database.php';
require __DIR__.'/src/get/get.php';

use Rest237\DATABASE;

$item = new DATABASE();



print_r(json_encode($item::$response_array));






	


?>