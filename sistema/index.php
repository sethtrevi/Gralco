<?php
	include("ajax/config.php");
	include("ajax/funciones.php");
	include("ajax/secure.php");
	$cnx=conectar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gralco</title>
	<link rel="stylesheet" href="estilos/style.css" type="text/css" media="screen" />
</head>
<body>
	<div id="contenedor">
		<?php include("menu.php"); ?>
	</div>
	<div id="contenido">
		<p>Selecciona una opción del menú.</p>
	</div>
</body>
</html>