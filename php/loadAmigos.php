<?php
    require_once "database.php";

    $listaamigos = array();
    
    $id = (int) $_POST['id'];
    /* Obtem a lista de amigos do banco de dados */
    $sql = "SELECT Usuario.id, Usuario.nome From Usuario, Relacionamentos WHERE Usuario.id = Relacionamentos.friend_id and Relacionamentos.self_id = '$id'";
    $row = $conn->query($sql);

    foreach ($conn->query($sql) as $row) {
        $listaamigos[$row['id']] = $row['nome'];
    }

    echo json_encode($listaamigos);

?>