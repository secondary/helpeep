<?php
include ("inc/dbconnect.php");

?>

<html>
  <head>

  </head>
  <body>
    <form method="post" name="form-register1" action="posted.php">
      Input EmailTo Associate As UserId:
      <input type="text" name="emailinput"></input>
      <br>
      Input Characters For Password:
      <input type="password" name="passinput"></input>
      <br>
      <br>
      Input Description Service to Provide?
      <br>
      <textarea rows=20 cols=50 name="textarea1"></textarea>
      <br>
      <input type="submit" name="submit" value="Create"></input>
    </form>
  </body>
</html>
