<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="pagina3.php" method="post">
	tipo vivienda:
            <?php
            //get enum value from database 
            $mysql = new mysqli('localhost','root','','viviendas');
            if ($mysql->connect_error)
              die("Problemas con la conexion a la base de datos");
            $registros = $mysql->query("select COLUMN_TYPE from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='datos' and COLUMN_NAME='tipo'") or
              die($mysql->error);
            $reg = $registros->fetch_array();
            $enumList = explode(",", str_replace("'", "", substr($reg['COLUMN_TYPE'], 5, (strlen($reg['COLUMN_TYPE']) - 6))));
            echo '<select name="tipo">';
            foreach ($enumList as $value)
              echo '<option value="' . $value . '">' . $value . '</option>';
            echo '</select>';
            ?>
<br>
            zona vivienda:
            <?php
            //get enum value from database 
            $mysql = new mysqli('localhost','root','','viviendas');
            if ($mysql->connect_error)
              die("Problemas con la conexion a la base de datos");
            $registros = $mysql->query("select COLUMN_TYPE from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='datos' and COLUMN_NAME='zona'") or
              die($mysql->error);
            $reg = $registros->fetch_array();
            $enumList = explode(",", str_replace("'", "", substr($reg['COLUMN_TYPE'], 5, (strlen($reg['COLUMN_TYPE']) - 6))));
            echo '<select name="zona">';
            foreach ($enumList as $value)
              echo '<option value="' . $value . '">' . $value . '</option>';
            echo '</select>';
            ?>
<br>
			Direccion:
			<input type="text" name="direccion" required>
<br>
			Numero de dormitorios:
			    <?php
            //get enum value from database with number 3 like default value 
            $mysql = new mysqli('localhost','root','','viviendas');
            if ($mysql->connect_error)
              die("Problemas con la conexion a la base de datos");
            $registros = $mysql->query("select COLUMN_TYPE from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='datos' and COLUMN_NAME='dormitorios'") or
              die($mysql->error);
            $reg = $registros->fetch_array();
            $enumList = explode(",", str_replace("'", "", substr($reg['COLUMN_TYPE'], 5, (strlen($reg['COLUMN_TYPE']) - 6))));
            echo '<select name="dormitorios">';
            foreach ($enumList as $value)
              if ($value == 3)
                echo '<option value="' . $value . '" selected>' . $value . '</option>'; //define default value 
              else
                echo '<option value="' . $value . '">' . $value . '</option>';
            echo '</select>';
            '<input type="radio" name="dormi">'
            ?>
<br>
			Precio:
			<input type="Numero" name="direccion" required>€
<br>
			Tamaño:
			<input type="Numero" name="direccion" required> metros cuadrados
<br>
			Extras(marque los que procedan):


<br>
			Foto:
			 <input type="file" name="foto" required>
<br>
			Observaciones:
			<input type="text" name="observaciones" required>
<br>
			<input type="submit" value="Enviar Datos">
</form>
</body>
</html>