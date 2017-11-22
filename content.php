<?php session_start(); ?>
<html>
<head><title>Carolina Panthers RB Stats</title>
</head>
<body>

  <?php
  if ($_SESSION["session"] == "valid") { ?>
  <form action="thankyou.php" method="post">
    First name: <input type="text" name="f_name"><br>
    Last name:  <input type="text" name="l_name"><br>
    Position:   <select name="position">
      <option value="quarterback">Quarterback</option>
      <option value="running back">Running Back</option>
      <option value="offensive lineman">Offensive Line/option>
      <option value="wide receiver">Wide Receiver</option>
      <option value="tight end">Tight End</option>
    </select><br>
    Receiving yards: <input type="text" name="rec_yards"><br>
    Rushing yards: <input type="text" name="rush_yards"><br>
    <input type="submit" name="Submit" value="Submit player values"><br>
  </form>
<?php } else {
  ?>
  <h1>Invalid login</h1>
  <p>Please go to the <a href="login.php">login page</a>
  <?php } ?>
</body>
</html>
