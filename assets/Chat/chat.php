
<?php
$con = @mysql_connect('localhost','root','') or die (mysql_error());
$xl = mysql_select_db('fiteducate', $con) or die (mysql_error());
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/chat.css">
	<script type="text/javascript">
		function Nova(){
			setTimeout("window.location='chat.php'",3);
		}
	</script>
</head>
<body>
<div class="container">
<center>
<div class="superior">
	<?php
	$np =@mysql_query("SELECT * FROM mensagem");
	while ($ln =@mysql_fetch_array($np)) {
		$usuario=$ln['usuario'];
		$mensagem=$ln['mensagem'];
		echo"<br>$usuario : $mensagem";	
	}
	
	?>
</div>
	<div class="campos">
		<form action="enviar.php" method="post">
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="text" name="mensagem" placeholder="Mensagens">
			<input type="submit" name="enviar" onClick="Nova()">
			<input type="button" value="Voltar para dietas" onclick="javascript: location.href='../views/dietas.html';" />
			<input type="button" value="Voltar para chás" onclick="javascript: location.href='../views/chas.html';" />

		</form>
	</div></center>
	<div></div>
</body>
</html>