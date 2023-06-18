<html>
<head> 
<meta charset="utf-8">
<title> Login </title>
	<link rel="stylesheet" type="text/css" href="login.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	
</head>
<body "> 
 

<div class="cad"><h1><center><b> Login </h1> </center></div> <p>

<div class="quadrado"></div>


<form name="frm_login" method="post">  
<fieldset> 






<div class="email">E-mail do Usuário:<br></div>
<input  type="email" class="input" placeholder="E-mail" value="" name ="txt_email" size="50" maxlength="60"><br>




<div class="senha">Senha:<br></div>
<input  type="password" class="input" placeholder="Senha" value="" name ="txt_senha" size="50"  maxlength="20"><p>



<div class="botoes">
<input type="submit" class="entrar" value="Entrar"  onclick="document.frm_login.action='criar.php'">
</div>


<input type="submit" class="cadastro" value="Criar Conta"  onclick="document.frm_login.action='login2.php'">
<input type="submit" class="esqueceusenha" value="Esqueceu a Senha?"  onclick="document.frm_login.action='esqueceuasenha.php'">

</div>




</fieldset>
</form>
</body>
</html>