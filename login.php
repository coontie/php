<?php
session_start();

$_SESSION["status"] = "";
$username="foo";
$password="bar";

if (isset($_POST["username"])) {
  if ($_POST["username"] == $username && $_POST["password"] == $password) {
    $_SESSION["status"] = "valid";
  } else {
    $_SESSION["status"] = "";
    //echo "Wrong username or password!";
   }

}
 ?>

  <html>
  <head>
  </head>
  <body>
    <?php
      if ($_SESSION["status"] =="valid") {
        echo "<h1>Congratulations!</h1>";
        echo "<p>You can now view the content</p>";
        echo "<a href=\"content.php\">next page</a></p>";
      } else {
    ?>
    <h1>Please login!</h1>
      <form action="login.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Submit">
      </form>
    <?php } ?>
      </body>
  </html>
