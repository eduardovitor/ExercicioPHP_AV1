
<?php 
	require '../Autoload/Autoload.php';
	$auto_load=new AutoLoad();
	$username="root";
	$password="";
	$nome_completo=$_REQUEST['nome_completo'];
	$data_nasc=$_REQUEST['data_nasc'];
	$email=$_REQUEST['email'];
	$login=$_REQUEST['login'];
	$senha=md5($_REQUEST['senha']);
	try{
		$conn = new PDO('mysql:host=localhost;dbname=questao2av1', $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$stmt = $conn->prepare('SELECT * FROM usuario WHERE email = ?');
    	$stmt->execute([$email]);
    	$linhas_afetadas=$stmt->rowCount();
    	if($linhas_afetadas>0){
      		echo "Desculpe, usuário já cadastrado.";
	  	}
	  	else{
	  		session_start();
	  		$_SESSION['email']=$email;
	  		$_SESSION['senha']=$senha;
	  		$stmt2=$conn->prepare('INSERT INTO usuario(nome_completo,data_nasc,email,login,senha) values(?,?,?,?,?)');
      		$affected_rows=$stmt2->execute([$nome_completo,$data_nasc,$email,$login,$senha]);
      		if($affected_rows>0){
      			 header('Location: ../View/login.php', true, 301);
      		}
	  	}
	  }
	catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
 ?>
