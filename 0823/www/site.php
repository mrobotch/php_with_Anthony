<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>checkbox</title>
  </head>
  <body>
<form action="site.php" method="post">
  Appes:<input type="checkbox" name="fruits[]" value="apples"><br>
  Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
  Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
<input type="submit">
</form>

<?php
  $fruits = $_POST["fruits"];
  echo $fruits[1];
 ?>
  </body>
</html>
