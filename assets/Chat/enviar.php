<?php
$con = @mysql_connect('localhost','root','') or die (mysql_error());
$xl = mysql_select_db('fiteducate', $con) or die (mysql_error());
?>

<?php
$usuario=$_POST['usuario'];
$mensagem=$_POST['mensagem'];

$sql =@mysql_query("INSERT INTO mensagem(usuario,mensagem) VALUES ('$usuario','$mensagem')") or die (mysql_error());
?>