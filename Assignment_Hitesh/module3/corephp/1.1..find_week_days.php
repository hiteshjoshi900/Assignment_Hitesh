
<!--  Write PHP program for find ,,Thursdat'' in week using swite Funtion -->

<!DOCTYPE html>
<html>
<head>
	<title>Find Week days</title>
</head>
<body bgcolor="powdergreen">
	<center>
		<form method="POST">
			<br><br>
			Enter 1 To 7 Number
			<input type="number" name="days">
			<input type="submit" name="submit" value="Find Day">			
		</form>
	</center>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
	$day=$_POST['days'];
	echo "<center><b><br><br>";
	switch ($day) 
	{
		case '1': echo "<h1> Sunday </h1>";
			      break;

		case '2': echo "<h1> Monday </h1>";
			      break;

		case '3': echo "<h1> Tuesday </h1>";
			      break;

		case '4': echo "<h1> Wednesday </h1>";
	     	      break;

		case '5': echo "<h1> Thursday </h1>";
			      break;
		
		case '6': echo "<h1> Friday</h1>";
			      break;

		case '7': echo "<h1> Saturday</	h1>";
			      break;			      

		default:  echo "Please Enter 1 to 7 Number only";
				  break;
				   echo "</center></b>";
	}
}
?>
