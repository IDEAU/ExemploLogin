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

<div class="container">

	<form class="form-signin" role="form" action="processar.php" method="post" enctype="multipart/form-data">
	
		<h2 class="form-signin-heading">Por favor, entre com suas credenciais de acesso</h2>
		
		<input type="text"
			id="nmUsuario" name="nmUsuario"
			class="form-control" placeholder="usuario"
			required="required" autofocus="autofocus"
		/>
		<input type="password"
			id="pwUsuario" name="pwUsuario"
			class="form-control" placeholder="senha"
			required="required"
		/>
		
		<input type="submit"
			id="btnAutenticar" name="btnAutenticar"
			class="btn btn-lg btn-primary btn-block" value="Autenticar"
		/>

	</form>
</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php

	session_write_close();
	
