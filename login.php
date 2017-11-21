<?php
session_start();

$username="foo";
$password="bar";

if (isset($_POST["username"])) {
  if ($_POST["username"] == $username && $_POST["password"] == $password) {
    $_SESSION["status"] = "valid";
  } else {
    $_SESSION["status"] = "";
    echo "Wrong username or password!";
  }

}


 ?>


  <html>
  <head>
    Initial page.
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
