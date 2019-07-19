<?php
	// Primeira Linha
	$nroProcesso			=		substr($_POST['nroProcesso'], 0, 19);
	$rpi					=		$_POST['rpi'];
	$dataRpi				=		$_POST['dataRpi'];
	$despacho				=		$_POST['despacho'];
	$img					=		$_POST['img'];
	$complemento			=		$_POST['complemento'];

	// Segunda Linha
	$prioridade				=		$_POST['prioridade'];
	$prioridadePais			=		$_POST['prioridadePais'];
	$prioridadeNumero		=		$_POST['prioridadeNumero'];
	$prioridadeData			=		$_POST['prioridadeData'];

	// Terceira Linha
	$nada1					=		$_POST['nada1'];
	$titular				=		$_POST['titular'];
	$titulo					=		$_POST['titulo'];
	$procurador				=		$_POST['procurador'];
	$numeroOriginal			=		$_POST['numeroOriginal'];
	$nada2					=		$_POST['nada2'];
	$nada3					=		$_POST['nada3'];
	$dataDeposito			=		$_POST['dataDeposito'];
	$WONumero				=		$_POST['WONumero'];
	$WOData					=		$_POST['WOData'];
	$faseNacional			=		$_POST['faseNacional'];
	$PCTNumero				=		$_POST['PCTNumero'];
	$PCTData				=		$_POST['PCTData'];
	$pedidoAnterior			=		$_POST['pedidoAnterior'];
	$resumo					=		$_POST['resumo'];
	$nomeDepositante		=		$_POST['nomeDepositante'];
	$nomeInventor			=		$_POST['nomeInventor'];
	$nada5					=		$_POST['nada5'];
	$classificacaoIPC		=		$_POST['classificacaoIPC'];
	$dataPublicacao			=		$_POST['dataPublicacao'];
	$dataConcessao			=		$_POST['dataConcessao'];

	$classificacaoIPC		=		str_replace(';', ';,', $classificacaoIPC);

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit();


	$rpis					=		explode("*&&&*", $rpi);
	$dataRpis				=		explode("*&&&*", $dataRpi);
	$despachos				=		explode("*&&&*", $despacho);
	$imgs					=		explode("*&&&*", $img);
	$complementos			=		explode("*&&&*", $complemento);


	foreach ($rpis as $key => $value) {
		$texto = $nroProcesso;
		$texto .= "|" . $value;
		$texto .= "|" . $dataRpis[$key];
		$texto .= "|" . $despachos[$key];
		$texto .= "|" . ($imgs[$key] == '-')? '|' : $imgs[$key];

		$texto .= "|" . $complementos[$key];

		gravar($texto);
	}

	$prioridade				=		'PRIORIDADE';
	$prioridadePais			=		explode("*&&&*", $prioridadePais);
	$prioridadeNumero		=		explode("*&&&*", $prioridadeNumero);
	$prioridadeData			=		explode("*&&&*", $prioridadeData);

	foreach ($prioridadePais as $key => $value) {
		$texto = $prioridade;
		$texto .= "|" . $nroProcesso;
		$texto .= "|" . $value;
		$texto .= "|" . $prioridadeNumero[$key];
		$texto .= "|" . $prioridadeData[$key];

		gravar($texto);
	}

	$texto = 'PATENTE|' . $nroProcesso . "|" . $nada1 . "|" . $titular . "|" . $titulo . "|" . $procurador . "|" . $numeroOriginal . "|" . $nada2 . "|" . $nada3 . "|" . $dataDeposito . "|" . $WONumero . "|" . $WOData . "|" . $faseNacional . "|" . $PCTNumero . "|" . $PCTData . "|" . $pedidoAnterior . "|" . $resumo . "|" . $nomeDepositante . "|" . $nomeInventor . "|" . $nada5 . "|" . $classificacaoIPC . "|" . $dataPublicacao;

	gravar($texto);

	// //Criamos uma função que recebe um texto como parâmetro.
	function gravar($texto){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "acertados/acertadosPAT.csv";
		$texto = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $texto);

		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo, "a+");

		//Escreve no arquivo aberto.
		fwrite($fp, $texto.PHP_EOL);

		//Fecha o arquivo.
		fclose($fp);
	}

	echo json_encode("SIM!");

?>