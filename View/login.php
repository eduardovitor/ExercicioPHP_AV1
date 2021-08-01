<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Atividade 2</title>
</head>
<body>
    <h1> Bem-vindo a tela de login </h1>
	<form action="../Controller/LoginController.php" method="POST">
		<label> E-mail: </label>
		<input type="email" name="email">
		<label> Senha: </label>
		<input type="password" name="senha">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
