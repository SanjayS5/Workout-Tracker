<?php

// These variables are sent from exercise_list.php
if(isset($_REQUEST['id'], $_REQUEST['name'])) {
  $id = $_REQUEST['id'];
  $exercise = $_REQUEST['name'];
}

// Sent from the form in show_history.php
if (isset($_REQUEST['newsets'], $_REQUEST['newreps'])) {
  $newsets = $_REQUEST['newsets'];
  $newreps = $_REQUEST['newreps'];
} else {
  $newsets = 0;
  $newreps = 0;
}

if (isset($_REQUEST['mode'])) {
  $mode = $_REQUEST['mode'];
} else {
  $mode = null;
}
?>


<div class="container">
      <h1>Log</h1>
      <hr>

<form action="index.php" method="post">
  <input type="submit" name="" value="Back">
</form>

<h2>EXERCISE: <?php echo $exercise ?></h2>

<?php if ($mode == 'edit') {
  // include 'edit_history.php';
  $result = $conn->query("SELECT name as workout, sets, reps, exercises.id as please, workout_data.id as identifier from exercises, workout_data where exercises.id = exercises_id and exercises.id = $id;");
?>
<table >
  <th>Sets</th>
  <th>Reps</th>
  <th>Action</th>
<?php
$i = 1;
foreach ($result as $row) {
  ?>
  <tr>
    <td class="hidden"><form action="phpComponents/edit_history.php" id="form<?php echo $i?>">
      <input type="hidden" name="form_id" value="<?php echo $i?>" />
      <input type="hidden" name="identifier" value="<?php echo $row['identifier']?>" />
      <input type="hidden" name="id" value="<?php echo $row['please']?>" />
      <input type="hidden" name="name" value="<?php echo $row['workout']?>" />
    </form>
  </td>
        <td><input form="form<?php echo $i?>" type="text" name="sets" value="<?php echo $row['sets']?>" /></td>
        <td><input form="form<?php echo $i?>" type="text" name="reps" value="<?php echo $row['reps'] ?>" /></td>
        <td><input form="form<?php echo $i?>" type="submit" value="Submit" /></td>
  </tr>
  <?php
$i++;}
?>
</table>

</div>
<?php } else {
  include 'show_history.php';
}
  ?>
