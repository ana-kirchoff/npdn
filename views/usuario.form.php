<?php
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="../ctrl/usuario.php" method="post">
	Código: <input type="text" name="idUsuario" value="0" readonly><br>
	Email:  <input type="email" name="email" value="" ><br>
	Senha:  <input type="password" name="senha" value="" > <br>
	Observação :<input type="text" name="observacao" value="" ><br>
	<input type="button" onclick="submit();" value="Enviar">
</form>

</body>
</html>