<!-- Write a PHP Program to Enter Makrs of Five subject, Chemistry, Biology,Mathematics and Computer
Calculate percentage and grade by if else. -->


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculate Per and Grade</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="powderblue">
	<center>
		<form method="POST">
			<br>
			Enter Physics mark : <input type="number" name="sub1" placeholder="Enter Mark"><br><br>
			Enter Chemistry mark : <input type="number" name="sub2" placeholder="Enter Mark"><br><br>
			Enter Biology mark : <input type="number" name="sub3" placeholder="Enter Mark"><br><br>
			Enter Mathematics mark : <input type="number" name="sub4" placeholder="Enter Mark"><br><br>
			Enter Computer mark : <input type="number" name="sub5" placeholder="Enter Mark"><br><br>
			<input type="submit" name="submit" value="Calculate Per & Grade"><br><br>
		</form>
	</center>
    
</body>
</html>

<?php 
if (isset($_POST['submit'])) 
{
    $s1 = $_POST['sub1'];
    $s2 = $_POST['sub2'];
    $s3 = $_POST['sub3'];
    $s4 = $_POST['sub4'];
    $s5 = $_POST['sub5'];

    $tot = ($s1 + $s2 + $s3 + $s4 + $s5);
    echo "<center><b>Total Five Subject Makrs is : " . $tot;

    $per=($tot / 5);
    echo "<br><br> Your Percentage : ".$per."%<br><br>";

    //Grade 

    if ($per>= 80) 
    {
    	echo "Your Grade is A";
    }
    else if ($per >= 70) 
    {
    	echo "Your Grade is B";
    }
    else if ($per >= 60) 
    {
    	echo "Your Grade is C";
    }
    else if ($per >= 50) 
    {
    	echo "Your Grade is D";
    }
    else
    {
    	echo "You Are Fail";
    }
    echo "</center></b>";
}
?>