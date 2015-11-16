<?php
	//echo "Hello world:  ";
	//echo time();
	
	$a = $_GET['a'];
	$b = $_GET['b'];
	function add($param1, $param2){
		return $param1 + $param2;
	}
	
	for($i = 0; $i < 10; $i++){
		echo $i."<br>";
	}
	
	
	echo add($a,$b);

?>