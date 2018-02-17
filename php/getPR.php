<?php
  require_once "database.php";
  session_start();

  $id = $_SESSION['id'];

  $burpee = (int) $_GET['burpee'] ?? null;
  $air_squat = (int) $_GET['air_squat'] ?? null;
  $front_squat = (int) $_GET['front_squat'] ?? null;
  $back_squat = (int) $_GET['back_squat'] ?? null;
  $overhead_squat = (int) $_GET['overhead_squat'] ?? null;
  $shoulder_press = (int) $_GET['shoulder_press'] ?? null;
  $push_press = (int) $_GET['push_press'] ?? null;
  $push_jerk = (int) $_GET['push_jerk'] ?? null;
  $deadlift = (int) $_GET['deadlift'] ?? null;
  $pull_up = (int) $_GET['pull_up'] ?? null;

  if (isset($id)) {
    $hoje = date('Y-m-d', strtotime('today'));
    //$hoje = date('Y-m-d', strtotime('-4 days'));

    $sql = "SELECT * From Dados, Usuario WHERE Usuario.id = Dados.usuario_id and Usuario.id = '$id' and Dados.dia = '$hoje'";
    $row = $conn->query($sql);
    $registro_existente = false;

    foreach ($conn->query($sql) as $row) {
      $id_today = $row['id'];
      $registro_existente = true;
    }

    var_dump($registro_existente);

    if (!$registro_existente) {
      // Ainda não existe registro referente a esse dia para esse usuário
      $sql = "INSERT INTO Dados (burpee, air_squat, front_squat, back_squat, overhead_squat, shoulder_press, push_press, push_jerk, deadlift, pull_up, dia, usuario_id) VALUES ('$burpee', '$air_squat', '$front_squat', '$back_squat', '$overhead_squat', '$shoulder_press', '$push_press', '$push_jerk', '$deadlift', '$pull_up', date('$hoje'), '$id')";
      $row = $conn->query($sql);
      if ($row) {
        echo "Inserido!";
      } else {
        var_dump($burpee);
        echo "Não foi possível inserir o registro.";
      }
    } else {
      // Já existe registro referente a esse dia para esse usuário, portanto, atualize os campos necessários
      if ($burpee != null) {
        $sql = "UPDATE Dados, Usuario SET burpee = '$burpee' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($air_squat != null) {
        $sql = "UPDATE Dados, Usuario SET air_squat = '$air_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($front_squat != null) {
        $sql = "UPDATE Dados, Usuario SET front_squat = '$front_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($back_squat != null) {
        $sql = "UPDATE Dados, Usuario SET back_squat = '$back_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($overhead_squat != null) {
        $sql = "UPDATE Dados, Usuario SET overhead_squat = '$overhead_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($shoulder_press != null) {
        $sql = "UPDATE Dados, Usuario SET shoulder_press = '$shoulder_press' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($push_press != null) {
        $sql = "UPDATE Dados, Usuario SET push_press = '$push_press' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($push_jerk != null) {
        $sql = "UPDATE Dados, Usuario SET push_jerk = '$push_jerk' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($deadlift != null) {
        $sql = "UPDATE Dados, Usuario SET deadlift = '$deadlift' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
      if ($pull_up != null) {
        $sql = "UPDATE Dados, Usuario SET pull_up = '$pull_up' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        echo "Atualizado!";
      }
    }
  } else {
    echo "Not Found.";
  }

  header('Location: ../personal-records.php');

  /*
  var_dump($registro_existente);

	// Atualizar os valores no banco de dados (caso não seja null)
  // TODO
  echo $burpee . "\t";
  echo $air_squat . "\t";
  echo $front_squat . "\t";
  echo $back_squat . "\t";
  echo $overhead_squat . "\t";
  echo $shoulder_press . "\t";
  echo $push_press . "\t";
  echo $push_jerk . "\t";
  echo $deadlift . "\t";
  echo $pull_up . "\t";*/
?>