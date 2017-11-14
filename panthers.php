<html>
<head><title>Carolina Panthers RB Stats</title>
</head>
<body>
<?php
  //define the initial array
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
  echo "<h1>Carolina Panthers Top Receivers</h1>";
  echo "<table>";
  for ($row=0; $row<count($receivers); $row++) {
    $yardage = $receivers[$row][1];
    $name = $receivers[$row][0];
    if ($yardage > 99) {
        echo "<tr>";
        echo "<td>". $name. "</td><td>".$yardage."</td>";
        echo "</tr>";
    }
  };
  echo "</table>";
?>
</body>
</html>
