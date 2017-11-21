<?php
  $firstName = $_POST["f_name"];
  $lastName = $_POST["l_name"];
  $position = $_POST["position"];
  $receivingYards = $_POST["rec_yards"];
  $rushingYards = $_POST["rush_yards"];

 ?>

 <html>
 <head><title>Thank you!</title>
 </head>
<body>
  <h1>Thank you for entering the form!</h1>
  <p>I see you entered <?php echo $firstName. " ".$lastName."." ?>

    <p><?php echo $firstName . " generally plays as a " .$position ."."?></p>
    <p><?php echo "Thus far, he has " . $receivingYards . " receiving yards and ". $rushingYards . " rushing yards."?></p>


 </body>
 </html>
