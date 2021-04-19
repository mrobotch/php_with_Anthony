<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>STRINGS</title>
  </head>
  <body>
    <h1>Hello</h1>
    <?php
    $english = "Hello";
    $japanese = "こんにちは";
    $var = "abcde";
    $var_length = strlen($var);
    $var_length_plus = $var_length + 3;
    $var_padded = str_pad($var, $var_length_plus, "! ");
    $var_repeated = str_repeat($var_padded, 5);
    $var_with_breaks = wordwrap($var_repeated, $var_length, "<br>");

    $var_with_breaks_evaluation = wordwrap(str_repeat($var_padded, 5), strlen($var), "<br>");
    $var_with_breaks_evaluation = wordwrap(str_repeat(str_pad($var, $var_length_plus, "! "),5), strlen($var), "<br>");
    $var_with_breaks_evaluation = wordwrap(str_repeat(str_pad($var, strlen($var) + 3, "! "),5), strlen($var), "<br>");
    $var_evaluated = wordwrap(str_repeat("abcde ",10),"!<br>");

     echo "variable:$var <br>";
     echo "variable length:$var_length <br>";
     echo "varuable padded with a space:$var_padded<br>";
     echo "variable padded and repeated 10 times: $var_repeated<br>";
     echo "variable repeated and surrouded by wordwrap:$var_with_breaks <br><br>";
     echo "fully typed evaluation:$var_with_breaks_evaluation";
     echo $var_evaluated;
     ?>


  </body>
</html>
