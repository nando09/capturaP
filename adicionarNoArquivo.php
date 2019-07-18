<?php

	// Primeira Linha
	$nro_processo			=		$_POST['nro_processo'];
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


	$texto = $situacao_marca . '|' . $nro_processo . '|' . '|' . $titular . '|' . $marcas  . '|' . $procurador . '|' . $priori_codigo . '|' . $priori_data . '|' . $priori_pais . '|' . $data_deposito . '|' . $data_concessao . '|' . $situacao . '|' . $data_vigencia . '|' . $apresentacao . '|' . '|' . $classes_eSub . '|' . $natureza . '|' . $class_int . '|' . $apostila . '|' . $espec_classe . '|' . $nice_codigo;

	gravar($texto);

	$despachos = array();

	$rpis					= explode("*&&&*", $rpi);
	$data_rpis				= explode("*&&&*", $data_rpi);
	$despachos				= explode("*&&&*", $despacho);
	$imgs					= explode("*&&&*", $img);
	$complemento_despachos	= explode("*&&&*", $complemento_despacho);


	foreach ($rpis as $key => $value) {
		$texto = $nro_processo;
		$texto .= "|" . $value;
		$texto .= "|" . $data_rpis[$key];
		$texto .= "|" . $despachos[$key];
		$texto .= "|" . ($imgs[$key] == '-')? '|' : $imgs[$key];
		// $novafrase = $complemento_despachos[$key];

		$primeiro = array(" Petição (tipo):", "Requerente(es):", "Procurador:", "Detalhes do despacho:", "Cessionário:", "Titular:", "Titular(es):", "Requerente:", "Sobrestadores:");
		$segundo = array("  Petição (tipo):", " Requerente(es):", " Procurador:", " Detalhes do despacho:", " Cessionário:", " Titular:", " Titular(es):", ' Requerente:', "  Sobrestadores:");
		$novafrase = str_replace($primeiro, $segundo, $complemento_despachos[$key]);

		$texto .= "|" . $novafrase;

		gravar($texto);
	}

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