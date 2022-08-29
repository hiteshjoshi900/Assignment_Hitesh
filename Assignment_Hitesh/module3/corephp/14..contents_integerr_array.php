<!-- Use a for loop to total the contents of an integer array called numbers which has five elements. -->


<?php

	$Subject = array("PHP","JAVA","PYTHON","HTML","CSS");
	$numbers = array(1,2,3,4,5);

	$a=0;
	echo "<br> <b>Following are It Related Subjects </b><br>";

	for ($i=0; $i < 5; $i++) 
	{ 
		echo "<br> ".$numbers[$i]." ) ". $Subject[$i];
	}
	

?>