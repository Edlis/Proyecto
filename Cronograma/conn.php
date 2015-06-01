<?php

$conn = @mysql_connect('127.0.0.1','root','1234');
if (!$conn) {
	die('No se pudo conectar a la Base de datos: ' . mysql_error());
}
mysql_select_db('eps', $conn);

?>