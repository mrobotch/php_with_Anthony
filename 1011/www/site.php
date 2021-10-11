<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>associative_arrays</title>
  </head>
  <body>
    <form action="site.php" method="post">
      Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
    </form>

    <?php
      $fruits = array("Apple"=>"Red","Orange"=>"Orange","Pairs"=>"Green");
      echo $fruite[$_POST["fruits"]];
     ?>
  </body>
</html>
