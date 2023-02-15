/*.................................................. VARIÁVEL PÁGINA ATUAL */


function QueryString(variavel){
   var variaveis=location.search.replace(/\x3F/,"").replace(/\x2B/g," ").split("&amp;")
   var nvar
   if(variaveis!=""){
      var qs=[ ]
      for(var i=0;i<variaveis.length;i++){
         nvar=variaveis[i].split("=")
         qs[nvar[0]]=unescape(nvar[1])
      }
      return qs[variavel]
   }
   return null
}


/*.................................................. MENU MOBILE */

	
$(document).ready(function(){

	$("#menu_mobile_abrir").click(function(){
		$(".menu_mobile_bts").slideDown();
	}); 
	$("#menu_mobile_fechar").click(function(){
    	$(".menu_mobile_bts").slideUp();
	}); 

	
});


/*.................................................. FORM */

function checa_formulario(email){
if (email.nome.value == "" || email.nome.value == "Nome"){
alert("O campo NOME COMPLETO está em branco!");
email.nome.focus();
return (false);
}
if (email.email_from.value == "" || email.email_from.value == "E-mail"){
alert("O campo E-MAIL está em branco!");
email.email_from.focus();
return (false);
}
if (email.descricao.value == "" || email.descricao.value == "Mensagem"){
alert("O campo MENSAGEM está em branco!");
email.descricao.focus();
return (false);
}
if (grecaptcha.getResponse() == "")
{
     alert("Você não clicou no reCAPTCHA, por favor, faça!")
     return false;
}
}
function checkMail(mail){
    var mail = document.getElementById("email_from").value;
	var arroba = mail.indexOf("@");
	var ponto = mail.indexOf(".");
	if(arroba >= 0 && ponto >= 0){
		return true;
	}
	alert('O endereço de e-mail está incorreto!');
	document.getElementById("email_from").value = "";
	document.getElementById("email_from").focus()
	return false;
}