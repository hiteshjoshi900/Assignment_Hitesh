
<!--  Write PHP program for find ,,Thursdat'' in week using swite Funtion -->

<!DOCTYPE html>
<html>
<head>
	<title>Find Week days</title>
</head>
<body bgcolor="powderyello">
	<center>
		<form method="POST">
			<br><br>
			Enter Year Bettween 1901 to 2016  :
			<input type="number" name="lyear"><br><br>
			<input type="submit" name="submit" value="Check leap Year or not"><br><br>
		</form>
	</center>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
	$lyear=$_POST['lyear'];
	echo "<center><b><br>";
	if ($lyear >= 1901 && $lyear <=2016) 
	{
		if ($lyear%4 == 0 and $lyear%100 !=  0 or $lyear%400 == 0) 
		{
			echo "<h1> $lyear is Leap Year </h1>";
		}
		else
		{
			echo "<h1> $lyear is Not Leap Year </h1>";
		}	
	}
	else 
	{
		echo "<h2> Enter Year Bettween 1901 to 2016 only </h2>";
	}

	echo "</center></b>";
	
}
?>
