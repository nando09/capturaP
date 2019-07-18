$(".accordion-item .titulo").text()			//		Pegar os principais titulos
$(".accordion-item table").text()			//		Pegando todos os texto das tables
$(".accordion-item table thead").length		//		Pegando quantos titulos de tables tem
$(".accordion-item table thead").text()		//		Pegando valores dos titulos das tables


$(".accordion-item table thead").eq(0).text()			//	Pegando valores com um base de qual filho ele se trata, o primeiro segundo assim por diante
$(".accordion-item table tbody .normal").eq(3).text()	//	Pegando valores corretos


$(".accordion-item table tbody .normal").eq(3).text()	// Pega valor NCL(10)
$(".accordion-item table tbody .normal").eq(7).text()	// Pega valor Especificação





/******************* COMEÇANDO *******************/ 
$(".accordion-item .titulo").length							//	Puxando quantos titulos tem
$(".accordion-item .titulo").eq(0).text()					//	Puxando qual é o titulo da primeira posição
$(".accordion-item .titulo").eq(0).text().trim()			//	Pegar titulo sem espaços
$(".accordion-item").eq(1).find('td').length				//	Quantos elementos tem dentro da table
$(".accordion-item").eq(1).find('td').eq(1).text()			//	Pegas o valor exato da table

$(".accordion-item").eq(0).find('.accordion-content > table > tbody > tr > td').length											//	Quantos td tem as informações
$(".accordion-item").eq(0).find('.accordion-content > table > tbody > tr > td').eq(1).text()									//	Pegar exatamente o valor da td
$(".accordion-item").eq(3).find('.accordion-content > table > tbody > tr > td').eq(0).find("a[onclick='DisableHide()']").length	//	Se tem item para clicar e expandir mais suas informação
$(".accordion-item").eq(0).find('.accordion-content > table > tbody > tr > td').eq(0).text().indexOf('                   ')		//	Verificando se tem mais de uma frase

//	Pegar alt da marca
$("img[src='/pePI/jsp/imagens/registro_em_exame.gif']").alt


Classe Nice
Classificação de Produtos/Serviços
Datas
Prazos
Representantes
Petições
Publicações



