<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User_Input</title>
  </head>
  <body>
<form action="user_input.php" method="get">
  Name: <input type="text" name="name">
  <br>
  Age: <input type="number" name="age">
  <input type="submit">
</form>

<br>
<p>Your name is <?php echo $_GET ["name"]?></p>
<p style="margin-bottom:2rem">Your age is <?php echo $_GET ["age"] ?></p>


<form action="user_input.php" method="get">
  <input type="number" name="num1">
  <br>
  <input type="number" name="num2">
  <input type="submit">
  <br>
<p>Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?></p>


</form>



  </body>
</html>
