<?php

$idCalendario = null;
$Fecha_inicial = htmlspecialchars($_REQUEST['Fecha_inicial']);
$Fecha_final = htmlspecialchars($_REQUEST['Fecha_final']);
$Titulo = htmlspecialchars($_REQUEST['Titulo']);
$Descripcion = htmlspecialchars($_REQUEST['Descripcion']);


include 'conn.php';

$sql = "insert into calendario(idCalendario,Fecha_inicial,Fecha_final,Titulo,Descripcion,idCurso) values(null, '$Fecha_inicial','$Fecha_final','$Titulo','$Descripcion', '1')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'idCalendario' => $idCalendario,
		'Fecha_inicial' => $Fecha_inicial,
		'Fecha_final' => $Fecha_final,
		'Titulo' => $Titulo,
		'Descripcion' => $Descripcion
	));
} else {
	echo json_encode(array('errorMsg'=>'Se produjo un error.'));
}
?>