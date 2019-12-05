<?php
$conn = new mysqli("localhost", "myuser", "mypass", "newdb");


 if(isset($_REQUEST['to_delete'])) {
  $delete = $_REQUEST['to_delete'];

  // TODO: LOOP OVER AND DELETE EACH FROM ARRAY
  $query = $conn->prepare("DELETE FROM exercises WHERE id = ?;");
  $query2 = $conn->prepare("DELETE FROM workout_data WHERE exercises_id = ?;");
  foreach ($delete as $key) {

      $query->bind_param("i", $key);
      $query->execute();
      $result = $query->get_result();

      $query2->bind_param("i", $key);
      $query2->execute();
      $result2 = $query2->get_result();

  }
} ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Remove Exercise</title>
  <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>

<div class="container">


  <h1>Edit Exercises</h1>
  <hr>

  <form action="../index.php" method="post">
    <input type="submit" name="" value="Back">
  </form>

  <?php $result = $conn->query("SELECT * FROM exercises;"); ?>



  <?php


  ?>
<div>

  <form action="remove_exercise.php" method="get">
    <div class="editable-checkbox-area">
  <ul>
    <?php
    foreach ($result as $row) {
      ?>
      <li class="editable-list">
        <?php echo $row['name']?>
        <input class="editable-checkbox" type="checkbox" name="to_delete[]" value="<?php echo $row['id'] ?>">
        <hr>
      </li>
      <?php
    }
    ?>
  </ul>
</div>
  <input class="submit-input" type="submit" name="btn" value="Delete Selected">
  </form>
  </div>

</div>
</body>
</html>
