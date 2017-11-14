<html>
<head><title>Carolina Panthers RB Stats</title>
</head>
<body>
<?php
  echo "Hello world!";
  $array = array("Tom", "Dick", "Harry");
  $receivers = array(
    array("McCaffrey", 406),
    array("Funchess", 443),
    array("Dickson", 349),
    array("Shepard", 133),
    array("Samuel",	70),
    array("Stewart", 44),
    array("Whittaker", 34),
    array("Olsen", 28),
    array("Manhertz",	11),
    array("Artis-Payne", 2)
  );

  for ($row=0; $row<count($receivers); $row++) {
    print $receivers[$row][0]
  }
?>
</body>
</html>
