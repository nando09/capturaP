<?php

	// $local		=	'Acertados.php';
	// $modo		=	'r';
	// $arquivo	=	fopen($local, $modo);
	// // $zero		=	0;
	// // $num		=	$_POST['num'];

	// // mb_convert_encoding($arquivo, "UTF-8");
	// while(!feof($arquivo)) {
	// 	$query = fgets($arquivo);
	// 	ftruncate($arquivo, 0);
	// 	break;
	// }

	$local		=	 file('AcertadosPat.csv');
	$query = '';

	foreach($local as $k=>$linha) {
		$query = $linha;

		//	echo $query;
		//	unset($local[$k]);
		break;
	}

	$utf = mb_detect_encoding($query);

	// echo "<pre>";
	// print_r($utf);
	// echo "</pre>";

	// if ($utf != 'UTF-8') {
		$query = utf8_encode($query);
	// }

	// echo "<pre>";
	// print_r($utf);
	// echo "</pre>";

	// file_put_contents('AcertadosPat.csv', $local);
	echo json_encode($query);

