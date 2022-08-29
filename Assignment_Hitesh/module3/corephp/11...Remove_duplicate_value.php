<?php

	
	$color1 = array(0 => 'Red', 1 => 'Green', 2 => 'White', 3 => 'Black', 4 => 'Red'); 

	$no = array( 0 => 100, 1 => 200, 2 => 100, 3 => -10, 4 => -10, 5 => 0 ); 

	$color2 = array_keys(array_flip($color1)); 
	$dub_number = array_keys(array_flip($no)); 

	echo "<pre>";
	
	print_r($color2);
	print_r($dub_number);

?>