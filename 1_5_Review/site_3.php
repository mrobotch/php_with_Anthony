<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>strings</title>
  </head>

  <body>
    <?php
    $phrase = "mrobotch design";
    echo strtoupper($phrase),"<br>";
    echo strtolower($phrase),"<br>";
    echo strlen("hello")+strlen("world"),"<br>";
    echo strlen("mrobotch")-strlen("design"),"<br>";
    echo strlen("mrobotch")*strlen("design"),"<br>";
    echo strlen("mrobotch")/strlen("design"),"<br>";

 ?>

 <?php
  $string = "Hello my name is Mikiko<br>";
  echo $string;
  echo str_replace("Mikiko","Anthony",$string);

 ?>


  </body>
