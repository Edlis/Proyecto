<?php

$idCalendario = intval($_REQUEST['idCalendario']);

include 'conn.php';

$sql = "delete from calendario where idCalendario=$idCalendario";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>