<!-- Write PHP Script Which decodes the following JSON String. -->

<?php

echo "<br><b><u>Decodes the JSON String</u></b><br><pre>";

// JSON string
  $strJSON = '[{"sumbject":"gujrati","gred":"A"},{"sumbject":"English","gred":"C"},{"sumbject":"Hindi","gred":"B"}]';

  // Convert JSON string to Array
  $jsonarray = json_decode($strJSON, true);
  print_r($jsonarray);        // Dump all data of the Array
  
?>