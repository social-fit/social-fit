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

    // Buscar algum registro referente ao dia de hoje, para esse usuário
    $sql = "SELECT * From Dados, Usuario WHERE Usuario.id = Dados.usuario_id and Usuario.id = '$id' and Dados.dia = '$hoje'";
    $row = $conn->query($sql);
    $registro_existente = false;

    foreach ($conn->query($sql) as $row) {
      $id_today = $row['id'];
      $registro_existente = true;
    }

    if (!$registro_existente) {
      // Ainda não existe registro referente ao dia de hoje, para esse usuário
      $sql = "INSERT INTO Dados (burpee, air_squat, front_squat, back_squat, overhead_squat, shoulder_press, push_press, push_jerk, deadlift, pull_up, dia, usuario_id) VALUES ('$burpee', '$air_squat', '$front_squat', '$back_squat', '$overhead_squat', '$shoulder_press', '$push_press', '$push_jerk', '$deadlift', '$pull_up', date('$hoje'), '$id')";
      $row = $conn->query($sql);
      if ($row) {
        echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      } else {
        var_dump($burpee);
        echo"<script> alert('Não foi possível atualizar os dados! Tente novamente...'); window.location.href='../personal-records.php'</script>";
      }
    } else {
      /* Já existe registro referente ao dia de hoje para esse usuário,
       portanto, atualize os campos que estão sendo solicitados */
      if ($burpee != null) {
        $sql = "UPDATE Dados, Usuario SET burpee = '$burpee' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($air_squat != null) {
        $sql = "UPDATE Dados, Usuario SET air_squat = '$air_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($front_squat != null) {
        $sql = "UPDATE Dados, Usuario SET front_squat = '$front_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($back_squat != null) {
        $sql = "UPDATE Dados, Usuario SET back_squat = '$back_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($overhead_squat != null) {
        $sql = "UPDATE Dados, Usuario SET overhead_squat = '$overhead_squat' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($shoulder_press != null) {
        $sql = "UPDATE Dados, Usuario SET shoulder_press = '$shoulder_press' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($push_press != null) {
        $sql = "UPDATE Dados, Usuario SET push_press = '$push_press' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($push_jerk != null) {
        $sql = "UPDATE Dados, Usuario SET push_jerk = '$push_jerk' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($deadlift != null) {
        $sql = "UPDATE Dados, Usuario SET deadlift = '$deadlift' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
      if ($pull_up != null) {
        $sql = "UPDATE Dados, Usuario SET pull_up = '$pull_up' WHERE Usuario.id = Dados.usuario_id and usuario_id = '$id_today' and dia = '$hoje'";
        $row = $conn->query($sql);
        //echo"<script> alert('Dados atualizados com sucesso!'); window.location.href='../personal-records.php'</script>";
      }
    }
  } else {
    echo "Not Found.";
  }

  // Redirecione para a página 
  header('Location: ../personal-records.php');
?>