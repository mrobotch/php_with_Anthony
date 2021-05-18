<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Madlib_Reivise</title>
  </head>
  <body>
    <h1>Madlib</h1>
<form action="site.php" method="get" class="mb20">
  <p class="mad"><span>Color:</span><input type="text" name="color" class="frame"></p>
  <p class="mad"><span>Plural Noun:</span><input type="hidden" name="pluralNoun" class="frame"></p>
  <p class="mad"><span>Phone Number:</span><input type="tel" name="PhoneNumber" class="frame"></p>
<input type="submit">
</form>
<details>
<?php
$color = "$_GET[color]";
$pluralNoun ="$_GET[pluralNoun]";
$PhoneNumber ="$_GET[PhoneNumber]";

echo "Roses are $color,<br>";
echo "$pluralNoun are blue,<br>";
echo "I have $PhoneNumber.";

 ?>
</details>
  </body>
</html>
