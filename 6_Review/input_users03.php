<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>input_users03</title>
  </head>
  <body>
<form action="input_users03.php" method="post">
  <div>
    <label for="say" class="label_col">What greeting do you want to say?</label>
    <input type="text" name ="say" placeholder ="Hi">
  </div>
  <div>
    <label for="to" class="label_col">Who do you want to say it to?</label>
    <input name="to" id="to">
  </div>
  <div>
    <button>Send my greetings</button>
  </div>

</form>
<p>What greeting do you want to say?<br>
I would like to say <?php echo$_POST["say"] ?>.
</p>
<p>I would like to say it to  <?php echo$_POST["to"] ?>.
</p>


  </body>
</html>
