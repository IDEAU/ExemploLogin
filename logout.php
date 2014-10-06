<?php

	require "sessao.php";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Exemplo de LOGIN</title>
	<meta name="author" content="Marcos A. Lucas" />
	<meta name="application-name" content="ExemploLogin" />
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body lang="pt-br">

	<?php
		unset($_SESSION['Usuario']);
		unset($_SESSION);
		$_SESSION = array();
		
		$params = session_get_cookie_params();
		setcookie( session_name(), '', time() - 42000,
			$params['path'], $params['domain'],
			$params['secure'], $params['httponly']
		);
		
		if ( isset($_COOKIE[session_name()]) ) {
			setcookie(session_name(), '', time()-420000, '/');
		}
		
		session_destroy();
	?>

	<h1>Voce saiu com sucesso!</h1>
	<a href="index.php">Clique aqui para iniciar novamente!</a>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
