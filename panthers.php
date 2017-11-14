<html>
<head><title>Carolina Panthers RB Stats</title>
</head>
<body>
<?php
  //define the initial array
  $receivers = array(
    array("McCaffrey", 433),
    array("Funchess", 535),
    array("Dickson", 382),
    array("Shepard", 173),
    array("Samuel",	115),
    array("Stewart", 44),
    array("Whittaker", 34),
    array("Olsen", 28),
    array("Manhertz",	11),
    array("Clay", 5),
    array("Artis-Payne", 2)
  );
  echo "<h1>Carolina Panthers Top Receivers</h1>";
  echo "<table>";
  for ($row=0; $row<count($receivers); $row++) {
    $yardage = $receivers[$row][1];
    $name = $receivers[$row][0];
    $maxYardage = 99;
    if ($yardage > $maxYardage) {
        echo "<tr>";
        echo "<td>". $name. "</td><td>".$yardage."</td>";
        echo "</tr>";
    }
  };
  echo "</table>";
?>
</body>
</html>
