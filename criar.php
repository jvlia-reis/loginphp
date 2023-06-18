<?php
//chamar conecao do banco 
include 'conexao.php';

$email = $_POST["txt_email"];
$senha = $_POST["txt_senha"];

$sql=mysql_query("select * from cadastro where email='$email' or senha='$senha'");

if (mysql_num_rows($sql) > 0) {
	echo "<center>";
	echo "<hr>";
	echo "CONTA LOGADA!";
	echo "<hr>";

}

else {
	$sql=mysql_query("insert into cadastro (usuario,email,senha) values (
		'$usuario', '$email', '$senha')");
    echo "<center>";
	echo "<hr>";
	echo "ERRO!";
	echo "<hr>";
	}
?>

<?php 

echo "<br>";
echo "<center>";
echo "<hr>";
echo "<a href=\"login.php\">VOLTAR </a>";
echo "<br>";
?>