<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>POST</title>
  </head>
  <body>
<form action="site.php" method="post">
  Password:<input type="password" name="password"><br>
  <input type="submit">
</form>


<?php
$password = $_POST ["password"];

echo "$password";
 ?>


  </body>
</html>
