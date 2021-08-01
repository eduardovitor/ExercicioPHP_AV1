
<?php 
	require '../Autoload/Autoload.php';
	$auto_load=new AutoLoad();
	$username="root";
	$password="";
	$email=$_REQUEST['email'];
	$senha=md5($_REQUEST['senha']);
	try{
		$conn = new PDO('mysql:host=localhost;dbname=questao2av1', $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$stmt = $conn->prepare('SELECT * FROM usuario WHERE email = ? AND senha= ?');
    	$stmt->execute([$email,$senha]);
    	$linhas_afetadas=$stmt->rowCount();
    	if($linhas_afetadas>0){
      		header('Location: ../View/index.php', true, 301);
	  	}
	  }
	catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
 ?>
