function unirMensagens(json, formatarTexto) {
	var mensagem = '';
	var separador = '';
	var quebraLinha = '';

	if (formatarTexto) {
		separador = '*';
	}
	if (json.length > 1) {
		quebraLinha = "<br />";
	}

	if (json.message != undefined) {
		mensagem += separador + ' ' + json.message + quebraLinha;
	} else {
		mensagem = "SessÃ£o expirada. <a href='/pePI'>Clique aqui</a> para fazer login novamente!";
	}
	return mensagem;
}

function setMensagemErroPadrao(idLocal) {

	// Apaga mensagens anteriores
	removerMensagensDeAviso();
	// removeLoader();

	// var url = '<c:url value="/" />';
	// var imageMensagem = url + "images/error_icon4.png";

	cssDivMensagem = "msgError msgBorder";
	$(".msgBorder, .msgError").hide();
	mensagem = "A operaÃ§Ã£o nÃ£o pode ser realizada!";

	$("#msg" + idLocal + "").removeClass().html('<span style="font: bold 14px Arial,Helvetica,sans-serif; color: #FF0000;">&nbsp; Erro!&nbsp; </span>' + mensagem + '').addClass(cssDivMensagem).fadeIn();

}

function removerMensagensDeAviso() {
	$(".msgBorder, .msgError").fadeOut();
}

function recuperaMensagemEmJson(json, identificadorElemento, exibeConfirmacao) {
	var mensagem = unirMensagens(json, false);
	if (json.category == "success") {
		if (exibeConfirmacao) {
			setMensagemAviso(identificadorElemento, mensagem, "1");
		}
		return "success";
	} else if (json.category == "error") {
		setMensagemAviso(identificadorElemento, mensagem, "0");
		return "error";
	} else {
		setMensagemErroPadrao(identificadorElemento);
		return "error";
	}
}

function setMensagemAviso(idLocal, mensagem, tipo) {
	// Tipo = "0" -> Erro
	// Tipo = "1" -> Sucesso
	// Tipo = "2" -> Captcha

	// Apaga mensagens anteriores

	// var url = '<c:url value="/" />';
	var cssDivMensagem = "";
	// var tipoMensagem = "";

	if (tipo == '1') {
		cssDivMensagem = "msgBorder msgError";
		$(".msgBorder, .msgError").hide();
		$("#msg" + idLocal + "").removeClass().html('<span>&nbsp; Ok!&nbsp; </span>' + mensagem).addClass(cssDivMensagem).show();
	} else if (tipo == '2') {
		cssDivMensagem = "errorMsgCaptcha";
		$(".errorMsgCaptcha").hide();
		$("#msg" + idLocal + "").removeClass().html(mensagem).addClass(cssDivMensagem).show();
	} else {
		cssDivMensagem = "msgError msgBorder";
		$(".msgBorder, .msgError").hide();
		$("#msg" + idLocal + "").removeClass().html('<span>&nbsp; Erro!&nbsp; </span>' + mensagem).addClass(cssDivMensagem).show();
	}
}

function converteBytes(bytes, precision) {
	var kilobyte = 1000;
	var megabyte = kilobyte * 1000;
	var gigabyte = megabyte * 1000;
	var terabyte = gigabyte * 1000;

	if ((bytes >= 0) && (bytes < kilobyte)) {
		return bytes + ' B';
	} else if ((bytes >= kilobyte) && (bytes < megabyte)) {
		return (bytes / kilobyte).toFixed(precision) + ' KB';
	} else if ((bytes >= megabyte) && (bytes < gigabyte)) {
		return (bytes / megabyte).toFixed(precision) + ' MB';
	} else if ((bytes >= gigabyte) && (bytes < terabyte)) {
		return (bytes / gigabyte).toFixed(precision) + ' GB';
	} else if (bytes >= terabyte) {
		return (bytes / terabyte).toFixed(precision) + ' TB';
	} else {
		return bytes + ' B';
	}
}

function geraTabelaDeTempoEstimadoDeDownload(tamanhoArquivo) {

	tamanhoArquivo = parseInt(tamanhoArquivo);
	var speedVar = new Array(4);
	var descricao = new Array(4);

	speedVar[1] = parseInt("7000");
	speedVar[2] = parseInt("32000");
	speedVar[3] = parseInt("96000");
	speedVar[4] = parseInt("187500");

	descricao[1] = "Discado (56K)";
	descricao[2] = "DSL/Cabo (256K)";
	descricao[3] = "DSL/Cabo (768K)";
	descricao[4] = "T1 (1,5M)";

	var tabelaDeTempoEstimadoDeDownload = '<table>' + '<tr>' + '	<th>Velocidade</th>' + '	<th>Tempo Estimado</th>' + '</tr>';
	for (a == 1; a <= 4; a++) {
		with (Math) {
			var speed = speedVar[a];
			var TotalTime = (tamanhoArquivo / speed);
			var TotalHours = floor((TotalTime / 3600));
			var TotalHoursMod = (TotalTime % 3600);
			var TotalMin = floor(TotalHoursMod / 60);
			var TotalMinMod = (TotalHoursMod % 60);
			var TotalSec = floor(TotalMinMod);
			tabelaDeTempoEstimadoDeDownload += '<tr><td>' + descricao[a] + ' :</td><td>';
			if (TotalHours != "0") {
				tabelaDeTempoEstimadoDeDownload += TotalHours + ' Horas, ';
			}
			if (TotalMin != "0") {
				tabelaDeTempoEstimadoDeDownload += TotalMin + ' Minutos, ';
			}
			tabelaDeTempoEstimadoDeDownload += TotalSec + ' Segundos</td></tr>';
		}
	}
	tabelaDeTempoEstimadoDeDownload += '</table>';
	return tabelaDeTempoEstimadoDeDownload;
}

function abrirJanelaModal(idJanela) {
	$("#" + idJanela + "").fadeIn(500).animate({
		opacity : "0.9"
	}, 200, "swing");
	$("#overlay").fadeIn(50).animate({
		opacity : "0.5"
	}, 200, "swing");
}

function fecharJanelaModal() {
	$(".janelaModal, #overlay").fadeOut(500);
	$(".janelaModal-md, #overlay").fadeOut(500);
}

$(document).ready(function() {

	$(document).keydown(function(e) {
		if (e.which == 27) {
			fecharJanelaModal();
		}
	});

	function refreshCaptcha() {
		$("#captchaInput").val('').focus();
		$("#captchaImg").attr('src', 'captcha.jpg?' + Math.floor(Math.random() * 100) + ' " />');
	}

	$(function() {
		$('#captchaImg').live('click', function() {
			refreshCaptcha();
		});
	});

	$("#overlay").live('click', function() {
		fecharJanelaModal();
	});

	$(".salvaSisbiolist").live('click', function() {
		var numeroID = $(this).attr('id');
		var action = $(this).data('action');

		$("#NumeroID").val(numeroID);

		abrirJanelaModal("janelaModalCaptchaDownload");

		var captcha = $("#conteudoCaptchaSisbiolist").html();

		var mensagemLog = '<div id="mensagemLogAcesso" style="padding: 20px;color: #6F6F6F; text-align: justify; font:10px Arial,Helvetica,sans-serif">';
		mensagemLog += 'Sr. UsuÃ¡rio,';
		mensagemLog += 'A disponibilizaÃ§Ã£o de Documentos atende aos princÃ­pios de acesso Ã  informaÃ§Ã£o e da sua divulgaÃ§Ã£o, constantes da Lei NÂº 12.527 de 2011 (Lei de Acesso Ã  InformaÃ§Ã£o, art. 6Âº ';
		mensagemLog += 'ao 8Âº).';
		mensagemLog += 'Nossos sistemas armazenarÃ£o o dia e a hora em que a informaÃ§Ã£o foi consultada pelo usuÃ¡rio. Portanto, o uso indevido das informaÃ§Ãµes acessadas sujeitarÃ¡ o seu autor Ã s sanÃ§Ãµes cabÃ­veis.';
		mensagemLog += '</div>';
		mensagemLog = decodeURIComponent(escape((mensagemLog)));

		$("#janelaModalCaptchaDownload fieldset").html(captcha);
		$("#janelaModalCaptchaDownload fieldset").append(mensagemLog);
		$("#janelaModalCaptchaDownload #captchaInput").focus();

		refreshCaptcha();

		$("#captchaFormSisbiolist").data("action", action);

	});

	$("#captchaFormSisbiolist").live('submit', function() {

		var numeroID = $("#NumeroID").val();
		var codDiretoria = $("#codDiretoria").val();
		var codPedido = $("#codPedido").val();
		var action = $(this).data("action");

		console.log(action);

		var url = '/pePI/servlet/ImagemDocumentoPdfController';

		$.ajax({
			type : "GET",
			url : url,
			data : {
				"action" : "validaCaptcha",
				"NumID" : numeroID,
				"captcha": grecaptcha.getResponse()
			},
			error : function() {
				fecharJanelaModal();
				alert("Erro inesperado! Favor tentar mais tarde!");
			},
			beforeSend : function() {
				$("#captchaConteiner").hide();
				$("#loader").show();
			},
			success : function(json) {

				$("#captchaConteiner").show();
				$("#loader").hide();

				var retorno = recuperaMensagemEmJson(json, "ErroCaptcha", false);

				// var sessionId = json[0].sessionId;

				if (retorno == "success") {

					var url = '/pePI/servlet/PatenteServletController?Action=SisbiolistImagem&CodImagem=' + numeroID;

					window.location.href = url;
					fecharJanelaModal();
				}
				if (retorno == "error") {
					mensagem = unirMensagens(json, false);
					refreshCaptcha();
					setMensagemAviso("ErroCaptcha", mensagem, "2");
					$("#captchaInput").focus();
				}

			}
		});
		return false;
	});

	// ************* captcha para documentos *****************
	$(".salvaDocumento").live('click', function(event) {
		event.preventDefault();

		var numeroID = $(this).attr('id');
		var action = $(this).data('action');		
		var certificadoPublicacao = $(this).attr('name');

		$("#NumeroID").val(numeroID);
		$("#certificado").val(certificadoPublicacao);

		abrirJanelaModal("janelaModalCaptchaDownload");

		var captcha = $("#conteudoCaptcha").html();

		var mensagemLog = '<div id="mensagemLogAcesso" style="padding: 20px;color: #6F6F6F; text-align: justify; font:10px Arial,Helvetica,sans-serif">';
		mensagemLog += 'Sr. UsuÃ¡rio, ';
		mensagemLog += 'A disponibilizaÃ§Ã£o de Documentos atende aos princÃ­pios de acesso Ã  informaÃ§Ã£o e da sua divulgaÃ§Ã£o, constantes da Lei NÂº 12.527 de 2011 (Lei de Acesso Ã  InformaÃ§Ã£o, art. 6Âº ';
		mensagemLog += 'ao 8Âº).';
		mensagemLog += 'Nossos sistemas armazenarÃ£o o dia e a hora em que a informaÃ§Ã£o foi consultada pelo usuÃ¡rio. Portanto, o uso indevido das informaÃ§Ãµes acessadas sujeitarÃ¡ o seu autor Ã s sanÃ§Ãµes cabÃ­veis.';
		mensagemLog += '</div>';
		
		mensagemLog = decodeURIComponent(escape((mensagemLog)));
		console.log(mensagemLog);

		$("#janelaModalCaptchaDownload fieldset").html(captcha);
		$("#janelaModalCaptchaDownload fieldset").append(mensagemLog);
		$("#janelaModalCaptchaDownload #captchaInput").focus();

		refreshCaptcha();

		$("#captchaForm").data("action", action);

	});

	
	//RECAPTCHA
	$("#captchaForm").live('submit', function() {

		var numeroID = $("#NumeroID").val();
		var codDiretoria = $("#codDiretoria").val();
		var codPedido = $("#codPedido").val();
		var action = $(this).data("action");
		var certificado = $("#certificado").val();
		
		var numeroProcesso = $("#numeroProcesso").val();
		
		console.log(action);

		var url = '/pePI/servlet/ImagemDocumentoPdfController';

		$.ajax({
			type : "GET",
			url : url,
			data : {
				"action" : "validaCaptcha",
				"NumID" : numeroID,
				"captcha": grecaptcha.getResponse()

			},
			error : function() {
				fecharJanelaModal();
				alert("Erro inesperado! Favor tentar mais tarde!");
			},
			beforeSend : function() {
				$("#captchaConteiner").hide();
				$("#loader").show();
			},
			success : function(json) {

				$("#captchaConteiner").show();
				$("#loader").hide();
				
				var retorno = recuperaMensagemEmJson(json, "ErroCaptcha", false);

				// var sessionId = json[0].sessionId;

				if (retorno == "success") {

					var url = "/pePI/servlet/ImagemDocumentoPdfController?CodDiretoria=" + codDiretoria + "&NumeroID=" + numeroID + "&certificado=" + certificado + "&numeroProcesso=" + numeroProcesso;

					if (action != "" && action != undefined) {
						url += "&action=" + action;
					}

					if (codPedido != "" && codPedido != undefined) {
						url += "&codPedido=" + codPedido;
					}
					
					window.location.href = url;	
					
					fecharJanelaModal();
				}
				if (retorno == "error") {
					mensagem = unirMensagens(json, false);
					refreshCaptcha();
					setMensagemAviso("ErroCaptcha", mensagem, "2");
					$("#captchaInput").focus();
				}

			}
		});
		return false;
	});
	
	
});