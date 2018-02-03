<?php
  $elench_press = $_GET['elench_press'] ?? null;
  $clean_power = $_GET['clean_power'] ?? null;
  $clean_squat = $_GET['clean_squat'] ?? null;
  $clean_jerk = $_GET['clean_jerk'] ?? null;
  $press_push = $_GET['press_push'] ?? null;
  $press_shoulder = $_GET['press_shoulder'] ?? null;

	// Atualizar os valores no banco de dados (caso não seja null)
  // TODO
  echo $elench_press . "\n";
  echo $clean_power . "\n";
  echo $clean_squat . "\n";
  echo $clean_jerk . "\n";
  echo $press_push . "\n";
  echo $press_shoulder . "\n";
?>