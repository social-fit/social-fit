<?php
	require_once "database.php"; 

	$dados_usuario = array('nome' => "", 'email' => "", 'datanasc' => "", 'pais' => "");
	//$elench_press = array("27-01-2018" => 2, "28-01-2018" => 20, "29-01-2018" => 30, "30-01-2018" => 45, "31-01-2018" => 4, "01-02-2018" => 10, "02-02-2018" => 5);
	$id = (int) $_POST['id'];

	$sql = "SELECT * From Usuario WHERE Usuario.id = '$id'";
	$row = $conn->query($sql);

	foreach ($conn->query($sql) as $row) {
        //echo strtotime('today') . "\t" . strtotime($row['dia']) . "\t";
        
        $dados_usuario['nome'] = $row['nome'];
        $dados_usuario['email'] = $row['email'];
        $dados_usuario['datanasc'] = date('d/m/Y', strtotime($row['datanasc']));
        $dados_usuario['pais'] = $row['pais'];

	}

	//print_r($exer['burpee'][[date('Y-m-d', strtotime('today'))]]);
	echo json_encode($dados_usuario);
	//echo json_encode($_POST['1']);
	//echo json_encode($elench_press);
?>