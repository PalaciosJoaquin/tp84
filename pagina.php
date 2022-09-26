<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado</title>
  <style>
    .tablalistado {
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: 20px;
    }

    .tablalistado th {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffd040;
    }

    .tablalistado td {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73;
    }
  </style>
</head>

<body>

  <?php
  $mysql = new mysqli("localhost", "root", "", "viviendas");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select * from datos") or
    die($mysql->error);

  echo '<table class="tablalistado">';
  echo '<tr> <th>tipo</th> <th>zona</th> <th>dormitorios</th> <th>precio</th> <th>tamano</th> <th>extras</th> <th>foto</th> <th>claveprimaria</th> </tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['tipo'];
    echo '</td>';
    echo '<td>';
    echo $reg['zona'];
    echo '</td>';
    echo '<td>';
    echo $reg['dormitorios'];
    echo '</td>';
    echo '<td>';
    echo $reg['precio'];
    echo '</td>';
    echo '<td>';
    echo $reg['tamano'];
    echo '</td>';
    echo '<td>';
    echo $reg['extras'];
    echo '</td>';
    echo '<td>';
    echo $reg['foto'];
    echo '</td>';
    echo '<td>';
    echo $reg['claveprimaria'];
    echo '</td>';



    echo '</tr>';
  }
  echo '<table>';

  $mysql->close();

  ?>
</body>

</html>