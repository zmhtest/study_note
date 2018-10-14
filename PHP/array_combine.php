<?php 

	$arr = ['os','webserver','db','language'];

	$arr2 = ['linux','apache','mysql','php'];

	$res = array_combine($arr, $arr2);

	print_r($res);


 ?>