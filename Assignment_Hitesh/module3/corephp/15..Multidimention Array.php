<!-- Delare a Multi Dimenssiond array of floats called balances having Three rows and Five columns -->

<!DOCTYPE html>
<html>
<head>
	<title>Multi Daimention Array</title>
	<style>
	table, th, td 
	{
  		border:1px solid black;
  		width: 25%;
  		text-align: center;
	}
	</style>
</head>
<body>

</body>
</html>

<?php
	$mu_array = array (
  array("S-No","Subjects","Marks"),
  array(1,"Enligsh",60),
  array(2,"Gujrati",70),
  array(3,"Hindi",59),
  array(4,"Meths",75),
  array(5,"Sanstrit",79));

echo "<br><br><table><tr>";  
echo "<th>".$mu_array[0][0]."</th><th>".$mu_array[0][1]."</th><th>".$mu_array[0][2]."</tr>";
echo "<tr><td>".$mu_array[1][0]."</td><td>".$mu_array[1][1]."</td><td>".$mu_array[1][2]."</td></tr>";
echo "<tr><td>".$mu_array[2][0]."</td><td>".$mu_array[2][1]."</td><td>".$mu_array[2][2]."</td></tr>";
echo "<tr><td>".$mu_array[3][0]."</td><td>".$mu_array[3][1]."</td><td>".$mu_array[3][2]."</td></tr>";
echo "<tr><td>".$mu_array[4][0]."</td><td>".$mu_array[4][1]."</td><td>".$mu_array[4][2]."</td></tr>";
echo "<tr><td>".$mu_array[5][0]."</td><td>".$mu_array[5][1]."</td><td>".$mu_array[5][2]."</td></tr>";
echo "</table>";

?>