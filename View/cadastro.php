<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Atividade 2</title>
</head>
<body>
	<form action="../Controller/UsuarioController.php" method="POST">
		<label> Nome completo: </label>		
		<input type="text" name="nome_completo">
		<label> Data de nascimento: </label>
		<input type="text" name="data_nasc">
		<label> E-mail: </label>
		<input type="email" name="email">
		<label> Login: </label>
		<input type="text" name="login">
		<label> Senha: </label>
		<input type="password" name="senha">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
