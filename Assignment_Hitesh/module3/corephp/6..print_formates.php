<!-- Write a program to print the below format

5 9
26 10
37 11
48 12
 -->


<?php

$a=5;
$b=9;
	echo "<br><br>";
	for ($i=0; $i < 4; $i++) 
	{ 
		echo $a." ".$b."<br>";
		if ($a == 5) 
		{
			$a=$a+21;
		}
		else
		{
			$a=$a+11;
		}
		
		$b++;
	}
?>
