

<?php
  if ($newsets && $newreps && $id) {
    $query = $conn->prepare("INSERT INTO workout_data(sets, reps, exercises_id) VALUES(?, ?, ?);");
    $query->bind_param("iii", $newsets, $newreps, $id);
    $query->execute();
    $insertresult = $query->get_result();
  }
?>
