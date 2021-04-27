<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User_Input</title>
  </head>
  <body>
  My name is <?php echo$_GET["my_name"]; ?><br>
  My Age is <?php echo$_GET["my_age"]; ?><br>
  Friend's name is <?php echo$_GET["friend_name"]; ?><br>
  Friend's age is <?php echo$_GET["friend_age"]; ?><br>


<form action ="0419_01hw.php" method="get">
  My Name is <input type="text" name ="my_name"><br>
  My Age is <input type="number" name="my_age"><br>
  Friend's Name is <input type="text" name="friend_name"><br>
  Friend's Age is <input type="number" name="friend_age">
  <input type ="submit">
</form>

  </body>
</html>
