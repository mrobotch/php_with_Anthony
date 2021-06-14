<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>array</title>
  </head>
  <body>
    <form action = “index.php” method = “GET”>
    <input type = “text” name =“comment/“><br/>
    <input type = “submit” value =“送信/“>
    </form>
<?php echo "$_GET" ?>

  </body>
</html>
