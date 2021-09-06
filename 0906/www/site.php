<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>associative_arrays</title>
  </head>
  <body>
<form action="site.php" method="post">
  <input type="text" name="student">
<input type="submit">
</form>

<?php
/* $grades["Mikiko"] = "F";
$grades["Jodi"] = "B-"; */
$grades = array("Anthony"=>"A+","Jodi"=>"B-","Mikiko"=>"C+");
echo $grades[$_POST["student"]];


 ?>
  </body>
</html>
