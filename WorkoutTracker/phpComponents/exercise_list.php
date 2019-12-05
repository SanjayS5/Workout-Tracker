<?php
$conn = new mysqli("localhost", "myuser", "mypass", "newdb");
?>
<div class="container">
  <h1>Exercises</h1>

  <hr>

  <?php
  if(isset($_REQUEST['name'])) {
    $exercise = $_REQUEST['name'];
  } else
  $exercise = 0;
  ?>

  <div class="edit-button-container">
    <form class="edit-exercise-form" action="phpComponents/remove_exercise.php" method="get">
      <input class="go-edit-exercises" type="submit" name="submit" value="Edit Exercise List">
    </form>
  </div>

    <div class="exercise-list-form">

    <?php include 'add_exercise.php';?>
    <?php $result = $conn->query("SELECT * FROM exercises;"); ?>

    <ul>
      <?php
      foreach ($result as $row) {
        ?>
        <li>
          <a href="log.php?id=<?php echo $row['id']?>&name=<?php echo $row['name']?>">
            <?php echo $row['name']?></a>
          </li>
          <?php
        }
        ?>
      </ul>

      <input type="button" name="btn" value="Add New" id="add-new-btn">

      <div class="toggle-add-form active">
        <form class="add-exercise-form" action="index.php" method="post">
          Add New Exercise: <input type="text" name="name" value="" id="add_exercise_textbox" placeholder="Enter exercise here">
          <input type="submit" value="Submit" />
        </form>
      </div>



    </div>
  </div>
