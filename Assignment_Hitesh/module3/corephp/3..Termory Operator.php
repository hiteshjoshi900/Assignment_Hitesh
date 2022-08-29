<!-- Write a PHP Program to find the largest of three number using ternary Operator -->

<!DOCTYPE html>
<html>
<head>
	<title>Ternary operator</title>
</head>
<body bgcolor="yellow">
	<center>
		<form method="POST">
			<br>
			Enter First No : <input type="number" name="no1" placeholder="Enter First No"><br><br>
			Enter Second No  : <input type="number" name="no2" placeholder="Enter Second No"><br><br>
			Enter Third No  : <input type="number" name="no3" placeholder="Enter Third No"><br><br>
			<input type="submit" name="submit" value="Chack Largest"><br><br>
		</form>
	</center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $n1 = $_POST['no1']; 
    $n2 = $_POST['no2']; 
    $n3 = $_POST['no3']; 

    
    $maxno = ($n1 > $n2 && $n1 > $n3) ? $n1 : ($n2 > $n1 && $n2 > $n3 ? $n2 : $n3);
      
    echo "<center><b>Maxmimun nuber is : ".$maxno."</b></center>";
}
?>