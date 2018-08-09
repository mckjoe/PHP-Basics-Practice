<?php
  $number = $_GET["number_input"];

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>PhP-ingPong</title>
  </head>
  <body>
      <div class="container">
        <ul>
          <?php
              for ($i = 0; $i <= $number; $i++) {
                  if ($i == 0) {
                    echo "<li>" . "0" ."</li>";
                  } elseif ($i % 3 == 0 && $i % 5 == 0) {
                    echo "<li>" . "PingPong" ."</li>";
                  } elseif ($i % 3 == 0) {
                    echo "<li>" . "Ping" ."</li>";
                  } elseif ($i % 5 == 0) {
                    echo "<li>" . "Pong" ."</li>";
                  } else {
                    echo "<li>" . $i ."</li>";
                  }
              }
          ?>
        </ul>
      </div>
  </body>
</html>
