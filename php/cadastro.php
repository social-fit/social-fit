<?php
    require_once "database.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $datanasc = $_POST['datanasc'];
    $pais = $_POST['pais'];

    echo $nome . "\t" . $email . "\t" . $senha . "\t" . $datanasc . "\t" . $pais . "\n";

    $sql = 'SELECT * FROM Usuario';
    $row = $conn->query($sql);    
?>