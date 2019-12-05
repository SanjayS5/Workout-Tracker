
<?php $conn = new mysqli("localhost", "myuser", "mypass", "newdb"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log</title>
    <link rel="stylesheet" href="css/normalize.css">
  </head>
  <body>

    <?php include 'phpComponents/log_history.php';?>

  </body>
</html>
