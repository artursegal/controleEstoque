

function myTrim(x) {
	return x.replace(/^\s+|\s+$/gm,'');
}

function hasWhiteSpace(s) {
		return /\s/g.test(s);
}

function arrayContem(texto, arrayVar)
{
    return (arrayVar.indexOf(texto) > -1);
}

function validacao(checarElementos) {


	if(arrayContem("nome", checarElementos) || arrayContem("nomeProd", checarElementos)) {
		//Checagem nome
	    if(myTrim((frm.nome.value)).length == 0)
		{
			alert("Por favor, digite um nome.");
			frm.nome.focus(); 
			return false;
		}

		if(myTrim((frm.nome.value)).length < 2)
		{
			alert("Por favor, digite um nome válido.");
			frm.nome.focus(); 
			return false;
		}	

		if (arrayContem("nome", checarElementos) && !hasWhiteSpace(myTrim(frm.nome.value)))
		{
			alert("Por favor, digite um sobrenome.");
			frm.nome.focus(); 
			return false;
		}

		var nomeCheck = /^[a-zA-Z ]*$/;
		if(!frm.nome.value.match(nomeCheck))  
	    {  
	    	alert("Somente letras são permitidas no campo nome.");  
	       	return false;  
	    }  
	}

	if(arrayContem("email", checarElementos)) {
	    //Checagem de e-mail
	    if(myTrim((frm.email.value)).length == 0)
		{
			alert("Por favor, digite um e-mail.");
			frm.email.focus(); 
			return false;
		}

		var emailCheck = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}$/;  
		if(!frm.email.value.match(emailCheck))  
	    {  
	    	alert("Por favor, digite um e-mail válido.");  
	       	return false;  
	    }  
	}

	if(arrayContem("telefone", checarElementos)) {
		//Checagem telefone
		if(myTrim((frm.telefone.value)).length == 0)
		{
			alert("Por favor, digite um número de telefone.");
			frm.telefone.focus(); 
			return false;
		}
		if((frm.telefone.value).length < 12)
		{
			alert("Telefone deve ter mais digitos.");
			frm.telefone.focus(); 
			return false;
		}
		var phoneno = /^\d{2}\-\d{4,5}\-\d{4}$/;  
		if(!frm.telefone.value.match(phoneno))  
	    {  
	    	alert("Por favor, digite um telefone válido.");  
	       	return false;  
	    }  
	}

	if(arrayContem("preco", checarElementos)) {
		//Checagem telefone
		if(myTrim((frm.preco.value)).length == 0)
		{
			alert("Por favor, digite o preço.");
			frm.preco.focus(); 
			return false;
		}
		var precoCheck = /^((\+|-)?\d(\.\d)?){1,9}$/;  
		if(!frm.preco.value.match(precoCheck))  
	    {  
	    	alert("Por favor, digite um preco válido.");  
	       	return false;  
	    }  
	}

	if(arrayContem("descricao", checarElementos)) {
		//Checagem nome
	    if(myTrim((frm.descricao.value)).length == 0)
		{
			alert("Por favor, digite uma descricao.");
			frm.descricao.focus(); 
			return false;
		}

		if(myTrim((frm.descricao.value)).length < 2)
		{
			alert("Por favor, digite uma descrição válida.");
			frm.descricao.focus(); 
			return false;
		}	

		if (!hasWhiteSpace(myTrim(frm.descricao.value)))
		{
			alert("Por favor, digite pelo menos duas palavras na descrição.");
			frm.descricao.focus(); 
			return false;
		}
	}


	return true;
}
