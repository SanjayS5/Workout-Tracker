

<!-- Add new sets and reps -->
<?php include 'phpComponents/add_log.php'; ?>
<?php
$result = $conn->query("SELECT name as workout, sets, reps from exercises, workout_data where exercises.id = exercises_id and exercises.id = $id;");
?>


<table id="history_table">
  <th>Sets</th>
  <th>Reps</th>

  <?php
  foreach ($result as $row) {
    ?>
    <tr>
      <td><?php echo $row['sets'] ?></td>
      <td><?php echo $row['reps'] ?></td>
    </tr>
    <?php
  }
  ?>
</table>

<form action="log.php?mode=edit&id=<?php echo $id ?>&name=<?php echo $exercise ?>" method="post">
  <button type="submit" name="btn">Edit Sets & Reps</button>
</form>

<div class="add_data">

  <h3>Add Sets & Reps</h3>

  <form class="add-exercise-details" action="log.php" method="post">
    Sets: <input type="number" name="newsets" value="">
    Reps: <input type="number" name="newreps" value="">
    <input type="hidden" value="<?php echo $exercise ?>" name="name" />
    <input type="hidden" name="id" value="<?php echo $id ?> ">
    <input type="submit" value="Add" />
  </form>


</div>
