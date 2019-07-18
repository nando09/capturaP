<html>
<head>
<title>INPI</title>
<SCRIPT type=text/javascript src="../js/geral.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/captcha.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/meusPedidos.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/MarcaDetalhe.js"></SCRIPT>

	<script>
	
	$(document).ready(function () {

		var resumoContext = document.getElementById("resumoContext");
		var tituloContext = document.getElementById("tituloContext");

		var titulo = $("input[name='titulo']").val();
		var resumo = $("input[name='resumo']").val();

		marca.texto(titulo, tituloContext);

		marca.texto(resumo, tituloContext);
		marca.texto(resumo, resumoContext);
	});

	</script>
	
	
	<!-- RECAPTCHA -->
	<script src="//www.google.com/recaptcha/api.js"></script>
	<style type="text/css">
		/* CSS Document */

		@import url("estilo-barra-governo.css");

		* {
			margin: 0 auto;
			padding:0px; 
		}

		body{
		    background-color: #eeeeee;
		    text-align: left;
		}

		#mainContainer {
			width: 850px;
			margin: 0 auto;
			margin-top: 15px;
			background-color: #FFFFFF;
			border: 1px solid #CCCCCC;
		}

		#txt_gov {
			width: auto;
			height: auto;
			float: left;
		        text-align: left;
		}

		#img_gov {
			width: 110px;
			height: 29px;
			margin: 9px 22px 0 0;
			border: 0px;
			float: right;
		}

		#fale_conosco {
			width: 110px;
			height: 29px;
			background: url(../jsp/imagens/faleconosco.png);
			margin: 8px auto 0 auto;
		}

		/************** CSS DO CONTAINER PRINCIPAL**************/
		#principal {
			height: auto;
			margin: 0 auto;
		    margin-top:-4px;
		    width: 780px
		}

		#bottom_principal {
			height: 23px;
		    margin: 0 auto;
			padding-left: 25px;
			background-position: bottom;
			background-repeat: no-repeat;
		    width: 780px
		}

		#principal .form {
			text-align: center;
		}

		#principal #box_form label {
			font-weight: bold;
			font-size: 14px;
			color: #264D7A;
		}

		#principal .submit {
			background-color: #7F9DB9;
			font: 12px;
			color: #FFF;
			border: 1px solid #7F9DB9;
			margin-left: 120px;
			margin-top: 5px;
			width: 90px;
		}

		#principal .text {
			border: 1px solid #7F9DB9;
			margin: 3px;
			padding: 2px;
			font: 12px;
			color: #264D7A;
		}

		.descricao {
			padding-left: 20px;
		}
		/************CSS DA LINHA DO HR **********/
		hr {
		      color: rgb(32,92,144);
		      background-color: rgb(32,92,144);
		      height: 5px;
		    }
		/**************CSS DO FOOTER**************/
		#footer {

			height: 80px;
			margin: 0 auto;
		}

		#footer p {
			font: 11px Arial, Helvetica, sans-serif;;
			color: #6F6F6F;
			margin-left: 10px;
			text-align: left;
		}

		#logo_ouvidoria {
			height: 35px;
			float: left;
			margin: 5px 0 0 100px;
		}

		#texto_footer {
			width: auto;
			float: left;
			margin: 15px 0 0 0;
		}

		.combomenu {
			background-color: #ffcc00;
			font-size: 10px;
			height: 16px;
			margin: -22px 22px 0 0;
			border: 0px;
			float: right;
		}

		.texto0 {
		    background-color: white;
		    color: #3C5068;
		    font-family: Verdana,Arial,Helvetica,sans-serif;
		    font-size: 11px;
		    line-height: 15px;
		    padding: 10px;
		    text-align: center;
		}
		.texto1 {
		    background-color: white;
		    color: #3C5068;
		    font-family: Verdana,Arial,Helvetica,sans-serif;
		    font-size: 11px;
		    line-height: 15px;
		    padding: 10px;
		    text-align: left;
		}
		.gov_titulo {
			color: #FFDF14;
			font: 16px "trebuchet Ms", Verdana, Arial, Helvetica, sans-serif;
			margin: 7px 0 0 35px;
		}

		.gov_subtitulo {
		    color: #FFFFFF;
		    font: 10px "Trebuchet Ms",Verdana,Arial,Helvetica,sans-serif;
		    margin: 1px 0 0 35px;
		    margin-top: -3px;
		    padding-bottom: 4px;
		}

		.ExempForm	{
			font-family: Arial, "Times New Roman", Times, serif;
			font-size: 10px;
			font-style: italic;
			font-weight: normal;
			border-top-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 0px;
			border-left-width: 0px;
			text-align: left;
			background-image: none;
			background-repeat: repeat;
			color: #000000
		}

		font.titulo {
			font-family : Arial;
			font-size : 13px;
			color : #006666;
			line-height : 18px;
		}

		font.marcador {
			font-family : Tahoma, Arial, sans-serif;
			font-size : 11px;
			color : #000000;
			line-height : 15px;
			background-color: #FFFF99;
		}

		font.normal {
			font-family : Tahoma, Arial, sans-serif;
			font-size : 11px;
			color : #000000;
			line-height : 15px;
			font-weight: normal;
		}
		font.normalRodape {
			font-family : Tahoma, Arial, sans-serif;
			font-size : 9px;
			color : #000000;
		}

		font.alerta {
			font-family : Tahoma, Arial, san-serif;
			font-size : 10px;
			color : #000000;
			line-height : 15px;
		}

		.basic, INPUT.basic, SELECT.basic, TEXTAREA.basic, .basicbut {
		    FONT-FAMILY: Tahoma, Arial, san-serif;
		    FONT-SIZE: 11px;
			line-height : 14px;	
		}

		.FieldData {
				font-family: Arial, "Times New Roman", Times, serif;
		        font-size: 11px;
				font-style: normal;
				font-weight: bold;
				border-top-width: 0px;
				border-right-width: 0px;
				border-bottom-width: 0px;
				border-left-width: 0px;
				text-align: left;
				background-image: none;
				background-repeat: repeat;
				color: #000000;
				}
		/**************CSS do Botï¿½o do Calendï¿½rio **************/
		.myButtonCalendar {
		    background:url(/pePI/jsp/imagens/calendar.gif) no-repeat;
		    cursor:pointer;
		    width: 16px;
		    height: 16px;
		    border: none;
		}		
		/**************TOOL TIPS**************/
		p#vtip {
			display: none;
			max-width: 400px;
			position: absolute;
			padding: 10px;
			left: 5px;
			font-size: 0.7em;
			background-color: white;
			border: 1px solid #a6c9e2;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			z-index: 9999;
			cursor: help;
		}

		p#vtip #vtipArrow {
			position: absolute;
			top: -10px;
			left: 5px;
			cursor: help;
		}

		.tooltipInfo {
			cursor: help;
		}

		.fundoCinza{
			background-color: #E9E9E9;
		}


		/**************fim TOOL TIPS**************/
		A.menu:link    { text-decoration:none; color: #000000; }
		A.menu:visited { text-decoration:none; color: #000000; }
		A.menu:hover   { text-decoration:underline; color: #000000; }
		A.menu:active  { text-decoration:none; color: #339900; ; font-family: arial}

		A.normal:link    { text-decoration:none; color: #006363; }
		A.normal:visited { text-decoration:none; color: #006363; }
		A.normal:hover   { text-decoration:underline; color: #339900; }
		A.normal:active  { text-decoration:none; color: #006363; }

		A.visitado:link    { text-decoration:none; color: #006363; }
		A.visitado:visited { text-decoration:none; color: #FF6600; }
		A.visitado:hover   { text-decoration:underline; color: #339900; }
		A.visitado:active  { text-decoration:none; color: #006363; }

		A.marcador:link    { text-decoration:none; color: #006363; ; background-color: #FFFF99}
		A.marcador:visited { text-decoration:none; color: #006363; ; background-color: #FFFF99}
		A.marcador:hover   { text-decoration:underline; color: #339900; ; background-color: #FFFF99}
		A.marcador:active  { text-decoration:none; color: #006363; ; background-color: #FFFF99}

		A.alerta:link    { text-decoration:none; color: #00FF99; }
		A.alerta:visited { text-decoration:none; color: #00FFFF;  }
		A.alerta:hover   { text-decoration:underline; color: #CC0000; }
		A.alerta:active  { text-decoration:none; color: #CC3300; }font.menu { font-family: Tahoma, Arial, sans-serif; font-size: 12px; text-decoration: none; line-height: 15px; color: #000000 ; font-weight: bold}
		A.titulo:visited {  color: #006363; text-decoration: none; font-family: Arial; font-size: 11px}
		A.titulo:link { text-decoration:none; color: #006363; ; font-family: Arial; font-size: 11px}
		A.titulo:hover { text-decoration:underline; color: #339900; ; font-family: Arial; font-size: 11px}
		A.titulo:active { text-decoration:none; color: #006363; ; font-size: 11px; font-family: arial}
		font.tituloatual { font-family : Arial; font-size : 13px; color : #000000; line-height : 18px; ; text-decoration: underline}

		.fontgeral {  font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #000000; text-decoration: none}
		.titulos {  font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #000000; text-decoration: none; font-weight: bolder; text-transform: none}
		.box { font-family: Arial, Helvetica, sans-serif; font-size: 10px; height: auto; width: 613px}
	</style>
</head>
	<body bgColor="#ffffff" leftMargin=0 text="#000000" topMargin=0  id="body-primary">
		<div id="retorno">
			<!-- Primeira Linha -->
			<p class="nroProcesso"></p>
			<br><br><br>
			<p class="rpi"></p>
			<p class="dataRpi"></p>
			<p class="despacho"></p>
			<p class="img"></p>
			<p class="complemento"></p>
			<br><br><br>

			<!-- Segunda Linha -->
			<p class="prioridade"></p>
			<p class="prioridadePais"></p>
			<p class="prioridadeNumero"></p>
			<p class="prioridadeData"></p>
			<br><br><br>

			<!-- Terceira Linha -->
			<p class="nada1"></p>
			<br>
			<p class="titular"></p>
			<br>
			<p class="titulo"></p>
			<br>
			<p class="procurador"></p>
			<br>
			<p class="numeroOriginal"></p>
			<br>
			<p class="nada2"></p>
			<br>
			<p class="nada3"></p>
			<br>
			<p class="dataDeposito"></p>
			<br>
			<p class="WONumero"></p>
			<br>
			<p class="WOData"></p>
			<br>
			<p class="faseNacional"></p>
			<br>
			<p class="PCTNumero"></p>
			<br>
			<p class="PCTData"></p>
			<br>
			<p class="pedidoAnterior"></p>
			<br>
			<p class="resumo"></p>
			<br>
			<p class="nomeDepositante"></p>
			<br>
			<p class="nomeInventor"></p>
			<br>
			<p class="nada5"></p>
			<br>
			<p class="classificacaoIPC"></p>
			<br>
			<p class="dataPublicacao"></p>

		</div>

	</body>
	<script type="text/javascript">
		function voltarSql(){
			$.ajax({
				url: 'bodyMacro.php', // Url do lado server que vai receber o arquivo
				dataType: 'json',
				type: 'post',
				success: function(dados) {
					if (dados == '') {
						$('#body-primary').append('<h1 class="text-center">Terminou o arquivo "Acertados.csv"!</h1>');
					}else{
						$('#body-primary').append("<div id='preenchimento'>" + dados + "</div>");
						lineOne();
						lineTwo();

						// voltarSql();
						// setTimeout(function(){ voltarSql(); }, 3000);
					}

					// $("#body-primary #preenchimento").remove();
				},
				error: function(dados) {
					$.bootstrapGrowl("ERRO!", {
						ele: 'body', // which element to append to
						type: 'danger', // (null, 'info', 'danger', 'success')
						offset: {from: 'bottom', amount: 20}, // 'top', or 'bottom'
						align: 'right', // ('left', 'right', or 'center')
						width: 'auto', // (integer, or 'auto')
						delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
						allow_dismiss: true, // If true then will display a cross to close the popup.
						stackup_spacing: 10 // spacing between consecutively stacked growls.
					});
				}
			});
		}

		function lineOne(){
			var qntTd = $(".accordion-item").eq(2).find('.accordion-content > table > tbody > tr').length;
			var rpi;
			var data;
			var despacho;
			var img;
			var complemento;

			for (var i = 0; i < qntTd; i++) {
				rpi 		=	$(".accordion-item").eq(2).find('.accordion-content > table > tbody > tr').eq(i).children('td').eq(0).children('.normal').text().trim();
				data 		=	$(".accordion-item").eq(2).find('.accordion-content > table > tbody > tr').eq(i).children('td').eq(1).children('.normal').text().trim();
				despacho 	=	$(".accordion-item").eq(2).find('.accordion-content > table > tbody > tr').eq(i).children('td').eq(2).children('.normal').text().trim();
				img 		=	$(".accordion-item").eq(2).find('.accordion-content > table > tbody > tr').eq(i).children('td').eq(3).children('.normal').text().trim();
				complemento =	$(".accordion-item").eq(2).find('.accordion-content > table > tbody > tr').eq(i).children('td').eq(5).children('.normal').text().trim();


				$('#retorno .rpi').text($('#retorno .rpi').text().trim() + "*&&&*" + rpi);
				$('#retorno .dataRpi').text($('#retorno .dataRpi').text().trim() + "*&&&*" + data);
				$('#retorno .despacho').text($('#retorno .despacho').text().trim() + "*&&&*" + despacho);
				$('#retorno .img').text($('#retorno .img').text().trim() + "*&&&*" + img);
				$('#retorno .complemento').text($('#retorno .complemento').text().trim() + "*&&&*" + complemento);

			}
		}

		function lineTwo(){
			var qntTd = $('table').eq(1).children('tbody').children('tr').length;
			var nro = $('table').eq(1).children('tbody').children('tr').eq(1).find('td[align="left"]').text().trim();
			var valor;
			var marcador;
			var pctNumero;
			var pctData;
			var tr;

			for (var i = 0; i < qntTd; i++) {
				tr = $('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="right"] > .normal').text().trim();
				valor = $('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="left"]').text().trim();

				if (tr == 'Nº do Pedido:Nº do Pedido Anterior:') {
					marcador	=	$('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="left"] > .marcador').text().trim();
					valor		=	$('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="left"] > .normal').text().trim();

					$("#retorno .nroProcesso").text(marcador);
					$("#retorno .pedidoAnterior").text(valor);
				}else if(tr == 'Nº do Pedido:'){

					$("#retorno .nroProcesso").text(valor);

				}else if(tr == 'Data do Depósito:'){

					$("#retorno .dataDeposito").text(valor);

				}else if(tr == 'Data da Publicação:'){

					$("#retorno .dataPublicacao").text(valor);

				}else if(tr == 'Data da Concessão:'){

					$("#retorno .dataPublicacao").text(valor);

				}else if(tr == 'Prioridade Unionista:'){

					$("#retorno .dataPublicacao").text(valor);

				}else if(tr == 'Classificação IPC:'){

					valor = $('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="left"]').find('.normal > .normal').text().trim();
					$("#retorno .classificacaoIPC").text(valor);

				}else if(tr == 'Título:'){

					$("#retorno .titulo").text(valor);

				}else if(tr == 'Resumo:'){

					$("#retorno .resumo").text(valor);

				}else if(tr == 'Nome do Depositante:'){

					$("#retorno .titulo").text(valor);

				}else if(tr == 'Nome do Inventor:'){

					$("#retorno .nomeInventor").text(valor);

				}else if(tr == 'Nome do Procurador:'){

					$("#retorno .procurador").text(valor);

				}else if(tr == 'Início da Fase Nacional:'){

					$("#retorno .faseNacional").text(valor);

				}else if(tr == 'PCT'){

					pctNumero 	=	$('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="left"]').children('.normal').eq(1).text().trim();
					pctData 	=	$('table').eq(1).children('tbody').children('tr').eq(i).find('td[align="left"]').children('.normal').eq(3).text().trim();
					$("#retorno .titulo").text(valor);

				}else if(tr == 'W.O.'){

				}else if(tr == 'xxxxxxxxxxxx'){

				}else if(tr == 'xxxxxxxxxxxx'){

				}else if(tr == 'xxxxxxxxxxxx'){

				}else if(tr == 'xxxxxxxxxxxx'){

				}else if(tr == 'xxxxxxxxxxxx'){

				}else if(tr == 'xxxxxxxxxxxx'){

				}
			}



		}

		function adicionarNoArquivo(){
			var posts = {
				// Primeira Linha
				nro_processo		:	$("#retorno .nro_processo").text(),
				rpi					:	$("#retorno .rpi").text(),
				dataRpi				:	$("#retorno .dataRpi").text(),
				despacho			:	$("#retorno .despacho").text(),
				img					:	$("#retorno .img").text(),
				complemento			:	$("#retorno .complemento").text(),

				// Segunda Linha
				prioridade			:	$("#retorno .prioridade").text(),
				prioridadePais		:	$("#retorno .prioridadePais").text(),
				prioridadeNumero	:	$("#retorno .prioridadeNumero").text(),
				prioridadeData		:	$("#retorno .prioridadeData").text(),

				// Terceira Linha
				nada1				:	$("#retorno .nada1").text(), 
				titular				:	$("#retorno .titular").text(),
				titulo				:	$("#retorno .titulo").text(),
				procurador			:	$("#retorno .procurador").text(),
				numeroOriginal		:	$("#retorno .numeroOriginal").text(),
				nada2				:	$("#retorno .nada2").text(), 
				nada3				:	$("#retorno .nada3").text(),
				dataDeposito		:	$("#retorno .dataDeposito").text(),
				WONumero			:	$("#retorno .WONumero").text(),
				WOData				:	$("#retorno .WOData").text(),
				faseNacional		:	$("#retorno .faseNacional").text(),
				PCTNumero			:	$("#retorno .PCTNumero").text(),
				PCTData				:	$("#retorno .PCTData").text(),
				pedidoAnterior				:	$("#retorno .pedidoAnterior").text(),
				resumo				:	$("#retorno .resumo").text(),
				nomeDepositante		:	$("#retorno .nomeDepositante").text(),
				nomeInventor		:	$("#retorno .nomeInventor").text(),
				nada5				:	$("#retorno .nada5").text(),
				classificacaoIPC	:	$("#retorno .classificacaoIPC").text(),
				dataPublicacao		:	$("#retorno .dataPublicacao").text()
			}

			$.ajax({
				url: 'adicionarNoArquivo.php', // Url do lado server que vai receber o arquivo
				dataType: 'json',
				type: 'post',
				data: posts,
				success: function(dados) {
					limparTudo();
					$("#body-primary #preenchimento").remove();
					setTimeout(function(){ voltarSql(); }, 1000);

					// console.log('Terminou!');
				},
				error: function(dados) {
					$.bootstrapGrowl("ERRO!", {
						ele: 'body', // which element to append to
						type: 'danger', // (null, 'info', 'danger', 'success')
						offset: {from: 'bottom', amount: 20}, // 'top', or 'bottom'
						align: 'right', // ('left', 'right', or 'center')
						width: 'auto', // (integer, or 'auto')
						delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
						allow_dismiss: true, // If true then will display a cross to close the popup.
						stackup_spacing: 10 // spacing between consecutively stacked growls.
					});
				}
			});
		}

		function limparTudo(){
			// Primeira Linha
			$("#retorno .nro_processo").text('');
			$("#retorno .rpi").text('');
			$("#retorno .dataRpi").text('');
			$("#retorno .despacho").text('');
			$("#retorno .img").text('');
			$("#retorno .complemento").text('');

			// Segunda Linha
			$("#retorno .prioridade").text('');
			$("#retorno .prioridadePais").text('');
			$("#retorno .prioridadeNumero").text('');
			$("#retorno .prioridadeData").text('');

			// Terceira Linha
			$("#retorno .nada1").text('');
			$("#retorno .titular").text('');
			$("#retorno .titulo").text('');
			$("#retorno .procurador").text('');
			$("#retorno .numeroOriginal").text('');
			$("#retorno .nada2").text('');
			$("#retorno .nada3").text('');
			$("#retorno .dataDeposito").text('');
			$("#retorno .WONumero").text('');
			$("#retorno .WOData").text('');
			$("#retorno .faseNacional").text('');
			$("#retorno .PCTNumero").text('');
			$("#retorno .PCTData").text('');
			$("#retorno .pedidoAnterior").text('');
			$("#retorno .resumo").text('');
			$("#retorno .nomeDepositante").text('');
			$("#retorno .nomeInventor").text('');
			$("#retorno .nada5").text('');
			$("#retorno .classificacaoIPC").text('');
			$("#retorno .dataPublicacao").text('');
		}

		voltarSql();
	</script>
</HTML>