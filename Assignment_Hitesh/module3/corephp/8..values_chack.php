<?php

$a='1';
$b=&$a;
$b="2$b";

echo "<br><br> A = ".$a;
echo "<br> B = ".$b;

?>