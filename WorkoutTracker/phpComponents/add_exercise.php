<?php
  if ($exercise) {
    $query = $conn->prepare("INSERT INTO exercises(name) VALUES(?);");
    $query->bind_param("s", $exercise);
    $query->execute();
    $result = $query->get_result();
  }
?>
