<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>calculation</title>
  </head>
  <body>
    <form action="0420_01.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <input type="submit">
    </form>

    Answer: <?php echo $_GET["num1"] - $_GET["num2"] ?>


  </body>
</html>
