<!DOCTYPE HTML>
<html>

<!-- Mirrored from jrloc.com.br/contato.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 00:10:52 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>J&amp;R Locações - Andaimes e Equipamentos</title>
<link rel="icon" type="image/x-icon" href="favicon.png" />
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/fonts/fonts.css" type="text/css">
<link rel="stylesheet" href="css/estilos.css" type="text/css">
<link rel="stylesheet" href="css/cabrod.css" type="text/css">
<link rel="stylesheet" href="css/home_internas.css" type="text/css">
<link rel="stylesheet" href="css/mediaqueries.css" type="text/css">
<link rel="stylesheet" href="slider/css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slider/css/nivo-slider.css" type="text/css" media="screen" />
<script src="slider/scripts/jquery-1.9.0.min.js"></script>
<script src="slider/scripts/jquery.nivo.slider.js"></script>
<script type='text/javascript' src='js/Mascara_2.1.js'></script>
<script type='text/javascript' src='js/scripts.js'></script>
<script>
function checa_formulario(email){
if (email.empresa.value == "" || email.empresa.value == "Nome da empresa"){
alert("O campo NOME DA EMPRESA está em branco!");
email.empresa.focus();
return (false);
}
if (email.nome.value == "" || email.nome.value == "Nome completo"){
alert("O campo NOME COMPLETO está em branco!");
email.nome.focus();
return (false);
}
if (email.email_from.value == "" || email.email_from.value == "E-mail"){
alert("O campo E-MAIL está em branco!");
email.email_from.focus();
return (false);
}
if (email.telefone.value == "" || email.telefone.value == "Telefone (DDD + Número)"){
alert("O campo TELEFONE está em branco!");
email.telefone.focus();
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
</script>
</head>

<body>

<div class="menu_mobile">
<div class="menu_mobile_abrir_wrap"><a href="#" id="menu_mobile_abrir" class="menu_mobile_abrir"><img src="imagens/bt_menu.png" alt=""></a></div>

<div id="menu_mobile_bts" class="menu_mobile_bts"><a href="#" id="menu_mobile_fechar"><img src="imagens/bt_fechar.png" alt=""></a><a href="Index-2.php">Home</a><a href="Empresa.php">Empresa</a><a href="Produtos.php">Produtos</a><a href="Beneficios.php">Benefícios da Locação</a><a href="Contato.php">Canal de Atendimento</a></div>

</div>

<div class="cab">

<div class="navigation">
 <ul class="top-level">
    <li><a href="Index-2.php">Home</a></li>
    <li><a href="Empresa.php">Empresa</a></li>
    <li><a href="Produtos.php">Produtos</a>
	    <ul class="sub-level">
        <li><a href="Produtos_Andaimes.php">Andaimes</a></li>
        <li><a href="Produtos_Escoras.php">Escoras Metálicas</a></li>
        <li><a href="Produtos_Betoneiras.php">Betoneiras</a></li>
        <li><a href="Produtos_Guinchos.php">Guincho Coluna</a></li>
        <li><a href="Produtos_Rompedores.php">Rompedor Elétrico</a></li>
        <li><a href="Produtos_Bandejas.php">Bandejas</a></li>
        <li><a href="Produtos_Compactadores.php">Compactadores de Solo</a></li>
        <li><a href="Produtos_Bombas.php">Bombas Submersíveis</a></li>
      </ul>
    </li>
    <li><a href="Beneficios.php">Benefícios da Locação</a></li>
    <li><a href="Contato.php">Canal de Atendimento</a></li>
 </ul>
     <div class="clear"></div>


  <div class="end right">
<span class="regular black size17 block uppercase">Rua Aparecida, 217 - Baeta Neves - São Bernardo do Campo - SP</span>
<span class="regular black size36">
(11) <span class="bold">2771-9011</span><span class="medium"> / </span><span class="bold">2778-0336</span></span><br>
</div>

</div> <!-- menu (navigation) -->



<div class="logo left"><img src="imagens/logo.png" alt="Logo"></div>
<div class="slogan">As melhores marcas para os melhores equipamentos</div>

<div class="clear"></div>

</div>


<div class="principal produtos">
  <div class="boxes contato">
    <div class="boxes_tit">Canal de atendimento</div>
    <div class="boxes_wrap txt"> <span class="descr">Preencha o formulário a seguir para entrar em contato conosco,
      em breve um representante entrará em contato.</span><br>
      <br>
   <form method="post" name="email" id="email" action="email_auth.php">
        <div class="contato left">
         
          <input class="campo_contato" name="nome" id="nome" type="text" value="Nome completo" placeholder="Nome completo" onblur="if(this.value == '') { this.value=this.defaultValue}" onfocus="if (this.value == this.defaultValue) {this.value=''}" />
          <br />
          <input class="campo_contato" name="email_from" id="email" type="text" value="E-mail" placeholder="E-mail" onblur="if(this.value == '') { this.value=this.defaultValue}" onfocus="if (this.value == this.defaultValue) {this.value=''}" onchange="return checkMail(this.value);" />
          <br />
          <input class="campo_contato" name="telefone" id="telefone" type="text" value="Telefone (DDD + Número)" placeholder="Telefone (DDD + Número)" onblur="if(this.value == '') { this.value=this.defaultValue}" onfocus="if (this.value == this.defaultValue) {this.value=''}" onKeyPress="return formataTelefone(this,event);" />
        </div>
        <div class="contato right">
          <textarea name="descricao" class="campo_contato multi" id="mensagem" placeholder="Mensagem" onfocus="if (this.value == this.defaultValue) {this.value=''}" onblur="if(this.value == '') { this.value=this.defaultValue}">Mensagem</textarea>
          <div class="g-recaptcha" data-sitekey="6Ld_A50bAAAAAMhyaiy1L2y4QCimKcD5XElg_NTW"></div>
          <input name="enviar" type="submit" class="botao form right" id="enviar" value="Enviar" />
        </div>
      </form>
      <script src='../www.google.com/recaptcha/api.js'></script>
      <div class="clear"></div>
      <br>
    </div>
  </div>
  <!-- boxes --> 
  
</div>
<!-- principal --> 

<div class="rod_wrap">
 <div class="rod">

 <div class="rod_menu">

     <a href="Index-2.php">Home</a><a href="Empresa.php">Empresa</a><a href="Produtos.php">Produtos</a><a href="Beneficios.php">Benefícios da Locação</a><a href="Contato.php">Canal de Atendimento</a>

    <div class="rod_submenu">
    	<a href="Produtos_Andaimes.php"><span>Andaimes</span></a>
        <a href="Produtos_Escoras.php"><span>Escoras Metálicas</span></a>
        <a href="Produtos_Betoneiras.php"><span>Betoneiras</span></a>
        <a href="Produtos_Guinchos.php"><span>Guincho Coluna</span></a>
        <a href="Produtos_Rompedores.php"><span>Rompedor Elétrico</span></a>
        <a href="Produtos_Bandejas.php"><span>Bandejas</span></a>
        <a href="Produtos_Compactadores.php"><span>Compactadores de Solo</span></a>
        <a href="Produtos_Bombas.php"><span>Bombas Submersíveis</span></a>
     </div>
 </div>

   <div class="rod_logo left"><img src="imagens/logo_rodape.png" alt="Rodape"></div>
   <div class="rod_end left"><span class="regular white size11 uppercase block">Rua Aparecida, 217 - Baeta Neves - São Bernardo do Campo - SP</span>
<span class="regular white size22 uppercase block">(11) <span class="bold">2771-9011</span> / <span class="bold">2778-0336</span></span></div>

<div class="clear"></div>

<div class="copyright"><span class="left">2015 © j&R Locações de andaimes e equipamentos. Todo o conteúdo deste site é de uso exclusivo da j&R Locações de andaimes e equipamentos. Proibida reprodução ou utilização a qualquer título, sob as penas da lei. All rights reserved.</span><a href="http://www.acessabrasil.com.br/" target="_blank" class="right"><img src="imagens/icon_acessa.png" width="21" height="8" alt="Acessa Brasil"></a><div class="clear"></div></div>
 </div>
 <div class="clear"></div>
</div>
</body>

<!-- Mirrored from jrloc.com.br/contato.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 00:10:52 GMT -->
</html>