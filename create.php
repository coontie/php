<html>
<head>
<body>
  <h1>New player added to the DB</h1>
  <a href="viewplayers.php">View</a>
  <a href="form_ex4.php">Create a new player</a>
<?php

  $connection = mysqli_connect("localhost", "f17d", "Pirates4Ever", "f17d");

  $sql = "select * from players";

  $player_set = mysqli_query($connection,$sql);

  while ($player = mysqli_fetch_assoc($player_set)) {
      echo $player['FirstName'];
      echo $player['LastName'];
      echo $player['Position'];
      echo $player['RecYards'];
      echo $player['RushYards'];
  }

  mysqli_free_result($player_set);

  mysqli_close($connection);

 ?>
</body>
</head>
</html>
