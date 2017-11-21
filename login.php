<?php
session_start();

$username="foo";
$password="bar";



 ?>


  <html>
  <head>
    Logged out.
  </head>
  <body>
    <h1>Please login!</h1>
      <form action="login.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      </body>
  </html>
