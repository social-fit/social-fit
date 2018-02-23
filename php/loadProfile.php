<?php
	require_once "database.php"; 

	$dados_usuario = array('nome' => "", 'email' => "", 'datanasc' => "", 'pais' => "");
	
	$id = (int) $_POST['id'];

	$sql = "SELECT * From Usuario WHERE Usuario.id = '$id'";
	$row = $conn->query($sql);

	foreach ($conn->query($sql) as $row) {
        //Obtem os dados do perfil do usuário
        
        $dados_usuario['nome'] = $row['nome'];
        $dados_usuario['email'] = $row['email'];
        $dados_usuario['datanasc'] = date('d/m/Y', strtotime($row['datanasc']));
        $dados_usuario['pais'] = $row['pais'];

	}

	
	echo json_encode($dados_usuario);
	
	
?>