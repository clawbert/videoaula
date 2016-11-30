<?php 
	session_start();
	include_once 'config.php';
	require_once('classes/BD.class.php');
	BD::conn();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<title>Bem-vindo ao chat</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/chat.js"></script>
</head>
<body>
	<div id="contatos">
		<ul>
			
			<li><a href="javascript:void(0);" nome="<?php echo $usuario->nome;?>" id="" class="comecar">Clawbert Barbosa</a></li>
		</ul>
	</div>

	<div id="janelas">

		

	</div>
</body>
</html>