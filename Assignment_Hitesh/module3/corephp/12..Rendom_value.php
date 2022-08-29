<!-- Get Random Value from array  -->

<?php

	echo "<br><b> Randome Value from array<br><br> ";	
	
	// Declare an associative array
	$arr = array( "a"=>"211211", "b"=>"312311", "c"=>"777777", "d"=>"020202" );
 
	// Use array_rand function to returns random key
	$key = array_rand($arr);
 
	echo $arr[$key]."</b>";
 

	
?>