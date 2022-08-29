<!-- How can you tell if a number is even or odd without using any Condition or loop.. -->

<!DOCTYPE html>
<html>
<head>
	<title>Even & Odd</title>
</head>
<body>
<center>
	<form method="POST">
		<br>
		Enter Any Number : <input type="number" name="no" placeholder="Enter No "><br><br>
						   <input type="submit" name="submit" value="Chack Even or Odd">
	</form>
</center>
</body>
</html>

<?php 
if (isset($_POST['submit'])) 
{
    $num = $_POST['no'];

    $arr = array("0" => "<br>This is EVEN Number<br>", "1" => "<br>This is ODD Number");
    echo "<center><b>".$arr[$num % 2]."</b></center";
}
?>