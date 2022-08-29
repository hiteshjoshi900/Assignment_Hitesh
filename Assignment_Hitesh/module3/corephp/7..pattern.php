<!-- Write a program for this pattern -->

<!-- *****
*
*
*
***** -->

<?php

echo "<br><br><br>";

for ($i=0; $i <=8; $i++) 
{ 
 	echo " * ";
 	if ($i == 4) 
 	{
 		for ($l=0; $l <= 3; $l++) 
 		{ 
 			echo "<br> * ";
 		}
 	}
}
?>
