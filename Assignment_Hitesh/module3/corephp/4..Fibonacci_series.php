<!-- Write a program in PHP to print Fibonacci series .. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34....  -->

<?php

$f1=0;
$f2=1;

echo "<br><br>Your Fibonacci Series : - ".$f1.",  ".$f2."  ";
for ($i=0; $i <=8 ; $i++) 
{ 
	$f = $f1 + $f2;
	echo ",  ".$f;
	$f1 = $f2;
	$f2 = $f;
}

?>