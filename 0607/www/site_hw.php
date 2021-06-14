<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>array</title>
  </head>
  <body>
    <h1>ARRAY</h1>
<p>
<?php
 $friends = array("Mikiko", "Jodi", "Danica", "Sumiko");
 $friends[4] = "Anthony <br>";
$friends[5] = "Peeter";
echo "$friends[5]<br>";
echo count($friends);

?>
</p>

  </body>
</html>
