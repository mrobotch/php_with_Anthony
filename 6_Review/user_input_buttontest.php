<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User_Input</title>
  </head>
  <body>

  <form action="user_input_buttontest.php" method="get">
    <p>Choose your monster's features:</p>
     <div>
       <input type="checkbox" id="scales" name="scales"
              checked>
       <label for="scales">Scales</label>
     </div>

     <div>
       <input type="checkbox" id="horns" name="horns">
       <label for="horns">Horns</label>
     </div>
     <div>
       <button type="submit">Submit</button>
     </div>
   </form>

  <p>Choose the method you submit:</p>
  <form>
  <div>
    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">E-mail</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">Phone</label>

    <input type="radio" id="contactChoice3"
     name="contact" value="mail">
    <label for="contactChoice3">Mail</label>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>

  </body>
</html>
