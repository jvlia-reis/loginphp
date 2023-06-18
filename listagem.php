<?php
include 'conexao.php';
if(isset($_POST['busca_nome'])!='') {
    $sql = mysql_query("select * from cadastro where usuario 
                       like '{$_POST['busca_nome']}%' order by usuario asc");
} else {
    $sql = mysql_query("select * from cadastro order by usuario asc");

}
?>
<html>
<body>
<center>
</form name="form1" method="POST" action="listagem.php">
DIGITE UM USUARIO: <input type="text" name="busca_nome"><input type="submit" value="FILTRAR">
</form>
<table border="1" align="center">
    <tr>
     <th colspan="5" bgcolor="CadetBlue"> LISTAGEM DE CONTAS CADASTRADAS</th>
</th>
<tr>
    <th bgcolor="DarkSeaGreen">USUARIO</th>
    <th bgcolor="DarkSeaGreen">E-MAIL</th>
    <th bgcolor="DarkSeaGreen">SENHA</th>
    <th bgcolor="DarkSeaGreen">APAGAR</th>
    <th bgcolor="DarkSeaGreen">EDITAR</th>
</tr>
<tr>

<?php
    while ($linha = mysql_fetch_assoc($sql)) {
?>
    <td align="center"><?php echo $linha['usuario']; ?></td>
    <td align="center"><?php echo $linha['email']; ?></td>
    <td align="center"><?php echo $linha['senha']; ?></td>
    <th><img src='deletar_usuario.png'></a></th>
    <th><img src='editar_usuario.png'></a></th>
<tr>
<?php }

echo "<br>";
echo "<center>";
echo "<hr>";
echo "<a href=\"login.php\">RETORNAR AO LOGIN </a>";
echo "<br>";
?>

</table>
</body>
</html>