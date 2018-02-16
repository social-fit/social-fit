<?php
    require_once "database.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $auth_success = false;

    $sql = 'SELECT * FROM Usuario';
    $row = $conn->query($sql);

    foreach ($conn->query($sql) as $row) {
        if ($row['email'] == $email && $senha == $row['senha']) {
            echo "É você mesmo! =)";
            $auth_success = true;
            break;
        }
    }

    if (!$auth_success) {
        echo 'Não tente hackear! =(';
    }
?>