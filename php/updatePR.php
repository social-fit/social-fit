<?php
	require_once "database.php"; 

	$exer = array('burpee' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'air-squat' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'front-squat' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'back-squat' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'overhead-squat' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'shoulder-press' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'push-press' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'push-jerk' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0),'deadlift' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0), 'pull-up' => array(date('Y-m-d', strtotime('today')) => 0, date('Y-m-d', strtotime('-1 days')) => 0, date('Y-m-d', strtotime('-2 days')) => 0, date('Y-m-d', strtotime('-3 days')) => 0, date('Y-m-d', strtotime('-4 days')) => 0, date('Y-m-d', strtotime('-5 days')) => 0, date('Y-m-d', strtotime('-6 days')) => 0));
	$elench_press = array("27-01-2018" => 2, "28-01-2018" => 20, "29-01-2018" => 30, "30-01-2018" => 45, "31-01-2018" => 4, "01-02-2018" => 10, "02-02-2018" => 5);
	$id = (int) $_POST['id'];

	$sql = "SELECT * From Dados, Usuario WHERE Usuario.id = Dados.usuario_id and Usuario.id = '$id'";
	$row = $conn->query($sql);

	foreach ($conn->query($sql) as $row) {
		//echo strtotime('today') . "\t" . strtotime($row['dia']) . "\t";
		if (strtotime($row['dia']) >= strtotime('-7 days') && strtotime($row['dia']) <= strtotime('today')) {
			$exer['burpee'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['burpee'];
			$exer['air-squat'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['air_squat'];
			$exer['front-squat'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['front_squat'];
			$exer['back-squat'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['back_squat'];
			$exer['overhead-squat'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['overhead_squat'];
			$exer['shoulder-press'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['shoulder_press'];
			$exer['push-press'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['push_press'];
			$exer['push-jerk'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['push_jerk'];
			$exer['deadlift'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['deadlift'];
			$exer['pull-up'][date('Y-m-d', strtotime($row['dia']))] = (int) $row['pull_up'];
		}
	}

	//print_r($exer['burpee'][[date('Y-m-d', strtotime('today'))]]);
	echo json_encode($exer);
	//echo json_encode($_POST['1']);
	//echo json_encode($elench_press);
?>