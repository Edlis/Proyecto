<?php

$idCalendario = intval($_REQUEST['idCalendario']);
$Fecha_inicial = htmlspecialchars($_REQUEST['Fecha_inicial']);
$Fecha_final = htmlspecialchars($_REQUEST['Fecha_final']);
$Titulo = htmlspecialchars($_REQUEST['Titulo']);
$Descripcion = htmlspecialchars($_REQUEST['Descripcion']);

include 'conn.php';

$sql = "update calendario set Fecha_inicial='$Fecha_inicial',Fecha_final='$Fecha_final',Titulo='$Titulo',Descripcion='$Descripcion' where idCalendario=$idCalendario";
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