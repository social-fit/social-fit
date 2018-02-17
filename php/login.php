<?php
    require_once "database.php";
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $auth_success = false;

    $sql = 'SELECT * FROM Usuario';
    $row = $conn->query($sql);

    foreach ($conn->query($sql) as $row) {
        if ($row['email'] == $email && $senha == $row['senha']) {
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['senha'] = $row['senha'];
            $_SESSION['id'] = $row['id'];

            $auth_success = true;
            header('Location: ../index.php');
            break;
        }
    }

    if (!$auth_success) {
        header('Location: ../login.html');
    }
?>