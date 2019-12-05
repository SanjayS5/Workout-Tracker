<?php
//$conn = new mysqli("localhost", "myuser", "mypass", "newdb");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Workout Tracker</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" integrity="sha256-piqEf7Ap7CMps8krDQsSOTZgF+MU/0MPyPW2enj5I40=" crossorigin="anonymous" />
</head>
<body>

  <div class="">
      <?php include 'phpComponents/exercise_list.php';?>
  </div>
  <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
