<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<title>APK Prueba</title>
</head>
<body>
<?php

$nombre ="Felipe";
$apelido ="Rodríguez";

echo '<div data-role="page">

  <div data-role="header">
    <h1>Alumnos</h1>
  </div>

  <div data-role="main" class="ui-content">
    <table border="0" class="table table-responsive">
    	<tr>
    		<td>Felipe Rodríguez</td>
    		<td><a href="mostrar_respuestas.php">Ver Respuestas</a></td>
    	</tr>

    	<tr>
    		<td>Valentina Reyes</td>
    		<td><a href="#"></a>Ver Respuestas</td>

    	</tr>
    </table>
  </div>

  <div data-role="footer">
    <h1>Proyecto FONDEF ID14I10078</h1>
  </div>

</div>'
?>
</body>
</html>