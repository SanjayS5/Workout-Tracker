<?php
$conn = new mysqli("localhost", "myuser", "mypass", "newdb");

// Received from the form in log_history.php
if(isset($_REQUEST['sets'], $_REQUEST['reps'], $_REQUEST['identifier'], $_REQUEST['id'], $_REQUEST['name'])) {
  $sets = $_REQUEST['sets'];
  $reps = $_REQUEST['reps'];
  $identifier = $_REQUEST['identifier'];
  $name = $_REQUEST['name'];
  $id = $_REQUEST['id'];
}


if ($sets && $reps && $identifier) {
  $query = $conn->prepare("UPDATE workout_data set sets = ?, reps = ? WHERE id = ?;");
  $query->bind_param("iii", $sets, $reps, $identifier);
  $query->execute();
  $insertresult = $query->get_result();
}

header("Location: /workouttracker/log.php?id=$id&name=$name");
?>
