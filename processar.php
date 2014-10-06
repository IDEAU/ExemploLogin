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
		$entrou=false;

		if ( isset($_POST['nmUsuario']) ) {
			if ( isset($_POST['pwUsuario']) ) {
				if ( ( $_POST['nmUsuario']=='administrador' ) && ( $_POST['pwUsuario']=='P0tr0V3rd3S4lg4d1nh0' ) ) {
					$entrou = true;
					$_SESSION['Usuario'] = 'SIM';
				}
			}
		}
		
		if ( $entrou ) { ?>
			<h1>Acesso concedido!</h1>
			<a href='index.php'>Clique aqui para voltar a pagina principal</a>
		<?php } else { ?>
			<h1>Acesso negado!</h1>
		<?php }
	?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php

	session_write_close();
	
