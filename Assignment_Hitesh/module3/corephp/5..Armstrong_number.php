
<!-- Write a Program to find whether a numer is Armstrong or not -->

<!DOCTYPE html>
<html>
<head>
	<title>Armstrong number</title>
</head>
<body>
	<center>
		<form method="POST">
			<br><br>
			Enter Numer : <input type="number" name="number" placeholder="Enter Numer">
			<input type="submit" name="submit" value="Chack No">
		</form>
	</center>
</body>
</html>

<?php 
if (isset($_POST['submit'])) 
{
	$no=$_POST['number'];	
	
    $sum = 0;
    $am = $no;
    while ($am != 0) 
    {
            $i = $am % 10;
            $sum = $sum + $i * $i * $i;
            $am = $am / 10;
    }

	echo "<center><b><br><br><h2>";
	if ($no == $sum)  
	{
		echo "This Number is Armstrong";
	} 
	else 
	{
		echo "This Number is NOT Armstrong";
	}
	echo "</h2></center></b>";
}
?>