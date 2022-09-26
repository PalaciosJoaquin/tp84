<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
  $mysql = new mysqli("localhost", "root", "", "viviendas");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $mysql->query("insert into datos(tipo,zona,dormitorios,precio,tamano,extras,foto) values ('$_REQUEST[tipo]','$_REQUEST[zona]','$_REQUEST[dormitorios]','$_REQUEST[precio]','$_REQUEST[tamano]','$_REQUEST[extras]','$_REQUEST[foto]')")
  or
  die($mysql->error);
  $mysql->close();
  header('Location:pagina.php')
?>
</body>
</html>