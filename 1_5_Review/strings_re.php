<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>strings</title>
  </head>

  <body>
    <?php
    $phrase = "mrobotch is the name of my company";
    echo ($phrase),"<br>";
    echo str_replace("mrobotch","mr_robotch",$phrase);
     ?>

    <?php
     $phrase = "This is the apartment which I used to live in.";
     echo ($phrase),"<br>";
     echo substr($phrase, 0, 36),"...";

    ?>
  </body>
