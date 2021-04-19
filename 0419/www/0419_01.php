<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User_Input</title>
  </head>
  <body>
    <?php

     ?>
    <form action ="0419_01.php" method="get">
      Name: <input type ="text" name="username">
      <br>
      Age:<input type="number" name="age">
      <input type="submit">
    </form>
    <br>
  My name is <?php echo$_GET["username"]  ?>
  <br>
  My age is <?php echo$_GET["age"] ?>
  </body>
</html>
