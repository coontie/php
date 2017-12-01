<html>
<head>
<body>
  <h1>New player added to the DB</h1>
  <a href="viewplayers.php">View</a>
  <a href="form_ex4.php">Create a new player</a>
  <br>
<?php

$firstName = $_POST["f_name"];
$lastName = $_POST["l_name"];
$position = $_POST["position"];
$receivingYards = $_POST["rec_yards"];
$rushingYards = $_POST["rush_yards"];


  $connection = mysqli_connect("localhost", "f17d", "Pirates4Ever", "f17d");

  //$sql = "insert into players (FirstName, LastName, Position, RecYards, RushYards)

  $sql = "INSERT INTO players (FirstName, LastName, Position, RecYards, RushYards)
          VALUES ('$firstName', '$lastName', '$position', '$receivingYards', '$rushingYards');";
  echo $sql;

  mysqli_query($connection,$sql);

  mysqli_close($connection);

 ?>
</body>
</head>
</html>
