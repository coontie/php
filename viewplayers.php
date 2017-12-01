<html>
<head>
<body>
  <h1>View all players</h1>
<?php
  
  function sql_to_html_table($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  "<table>" . $delim ;   
  $counter   = 0 ;
  // putting in lines
  while( $row = $sqlresult->fetch_assoc()  ){
    if ( $counter===0 ) {
      // table header
      $htmltable .=   "<tr>"  . $delim;
      foreach ($row as $key => $value ) {
          $htmltable .=   "<th>" . $key . "</th>"  . $delim ;
      }
      $htmltable .=   "</tr>"  . $delim ; 
      $counter = 22;
    } 
      // table body
      $htmltable .=   "<tr>"  . $delim ;
      foreach ($row as $key => $value ) {
          $htmltable .=   "<td>" . $value . "</td>"  . $delim ;
      }
      $htmltable .=   "</tr>"   . $delim ;
  }
  // closing table
  $htmltable .=   "</table>"   . $delim ; 
  // return
  return( $htmltable ) ; 
}

  
  $connection = mysqli_connect("localhost", "f17d", "Pirates4Ever", "f17d");

  $sql = "select * from players";

  $player_set = mysqli_query($connection,$sql);

  while ($player = mysqli_fetch_assoc($player_set)) {
      echo $player['FirstName'];
      echo $player['LastName'];
      echo $player['Position'];
      echo $player['RecYards'];
      echo $player['RushYards'];
      echo "<br>";
  }

  echo sql_to_html_table( $player_set, $delim="\n" ) ; 
  mysqli_free_result($player_set);

  mysqli_close($connection);

 ?>
</body>
</head>
</html>
