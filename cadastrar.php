<?php
//chamar conecao do banco 
include 'conexao.php';
$usuario = $_POST["txt_user"];
$email = $_POST["txt_email"];
$senha = $_POST["txt_senha"];

$sql=mysql_query("select * from cadastro where usuario='$usuario' or email='$email'");

if (mysql_num_rows($sql) > 0) {
	echo "<center>";
	echo "<hr>";
	echo "CONTA JA CADASTRADA!";
	echo "<hr>";
}

else {
	$sql=mysql_query("insert into cadastro (usuario,email,senha) values (
		'$usuario', '$email', '$senha')");
		
    echo "<center>";
	echo "<hr>";
	echo "CONTA CADASTRADA COM SUCESSO!";
	echo "<hr>";
	}
?>