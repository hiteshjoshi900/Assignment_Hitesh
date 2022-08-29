
<!-- How can you declare thje array (all type) in PHP? Explain  with example Covert a JSON String to array -->
<?php

	// There Are 3 types of arra in PHP
	// 1) Numeric Array
	// 2) Multidimention Array
	// 3) Associative Array



// 1) Numeric Array
echo "<br><br> 1) <b>Numeric Array</b>";

$mark = array(55,40,75,60,50);
$sub = array("Gujrati","English","Methamatic","scince","Sanskrit");

echo "<pre>";

print_r($mark);
print_r($sub);

// 2) Multidimention Array
echo "<br> 2) <b>Multidimention Array</b><br>";

$language = array("Backend" => array("PHP","JAVA","PYTHON",".NET"), "Frounted" => array("HTML","CSS","JAVASCRIPT","BOOSTRAP"));



print_r($language);
print_r($language["Backend"][2]);

// 3) Associative Array
echo "<br> 3) <b>Associative Array</b><br>";

$nm = array("a" => "Hitesh","b" => "Dhaval","c" => "Umang","d" => "Kartik");
print_r($nm);


 echo "<br><b><u>Covert a JSON String to array</u></b><br>";

// JSON string
  $strJSON = '[{"name":"Kartik Joshi","gender":"male"},{"name":"Hitesh","gender":"male"},{"name":"Radha","gender":"female"}]';

  // Convert JSON string to Array
  $jsonarray = json_decode($strJSON, true);
  print_r($jsonarray);        // Dump all data of the Array
  echo $jsonarray[0]["name"]; // Access Array data
?>