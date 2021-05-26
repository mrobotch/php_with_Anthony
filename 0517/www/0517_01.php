<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>calculation</title>
  </head>
  <body>
    <form action="0517_01.php" method="get">
      Color: <input type ="text" name="color"><br>
      Plural Noun: <input type="text" name="pluralNoun"><br>
      Celebrity: <input type="text" name="celebrity"><br>
      <input type="submit">
    </form>
<br><br>
  <?php
  $color = $_GET["color"];
  $pluralNoun ="$_GET[pluralNoun]";
  $celebrity ="$_GET[celebrity]";

  echo "Roses are $color,<br>";
  echo "$pluralNoun are blue,<br>";
  echo "I have $PhoneNumber.";

   ?>

  </body>
</html>
