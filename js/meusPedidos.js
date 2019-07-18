/********************************************************************** 
FunÃ§Ã£o de verificar o status do checkbox de meus pedidos
Objetivos :
- funÃ§Ã£o toggle do elemento
Parï¿½metros :
objeto  -> Nome do campo de formulï¿½rio (Usar this)
Requirido :
FunÃ§Ã£o ValidaData
/**********************************************************************/
function checkboxStatus(f){
	if(f.form.TodosMeusPedidos.checked == 1) {
		f.form.TodosMeusPedidos.checked = 0;
		checkboxChecked(f);
	} else {
		f.form.TodosMeusPedidos.checked = 1;
		checkboxUnChecked(f);
	}
	f.form.submit();
}
function checkboxChecked(f){
	var i;
   for (i=0;i<f.form.elements.length;i++)
	  if(f.form.elements[i].type == "checkbox")
		 f.form.elements[i].checked=1;
}
function checkboxUnChecked(f){
	var i;
   for (i=0;i<f.form.elements.length;i++)
	  if(f.form.elements[i].type == "checkbox")
		 f.form.elements[i].checked=0;
}
function ConfirmMyList(frm, numPedido, j) {
	alert("Atualizando a Lista de Meus Pedidos!");
	frm.NumPedido.value=numPedido;
	frm.Action.value="MeuPedido";
	frm.submit();
    return true;
}

function cadastrarProcessoPush(form){
	alert("Atualizando a Lista de Meus Pedidos!");
	form.Action.value="cadastroProcesso";
	form.submit();
}


