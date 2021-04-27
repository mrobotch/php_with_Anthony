<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>calculation_hw</title>
  </head>
  <body>

<form action="0420_01hw.php" method="get">
  <input type="number" name="num1" class="text_frame">
  <input type="number" name="num2" class="text_frame">
  <input type="submit" class="submit_frame">
</form>
Answer: <?php echo $_GET["num1"] * $_GET["num2"] ?>
  </body>
</html>
