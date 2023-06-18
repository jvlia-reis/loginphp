
<html>
<head> 
<meta charset="utf-8">
<title> CRUD EM PHP </title>
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body> 
<h1> 
<center>
<form name="frm_cadastro" method="post">  
<div class="cad"><b> Cadastro </h1> </center> <p>
<fieldset> </div>

<div class="quadrado"></div>

<div class="email">
Nome do Usuario:<br>
<input  type="text" class="input" placeholder="Usuário" value="" name="txt_user" size="50" maxlength="60" required="yes"><br>
</div>

<div class="email">
E-mail do Usuário:<br>
<input  type="text" class="input" placeholder="E-mail" value="" name ="txt_email"size="50" maxlength="60" required="yes"><br>
</div>



<div class="senha">
Senha:<br>
<input  type="password" class="input" placeholder="Senha" value="" name ="txt_senha" size="50"  maxlength="20" required="yes"><p>
</div>


<div class="submit">
<input type="submit" class= "criar" value="Criar Conta"  onclick="document.frm_cadastro.action='cadastrar.php'">
</div>





</fieldset>
</form>
</body>
</html>