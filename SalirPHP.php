<?php

// Verifica si hay usuario en sesion
if (!isset($_SESSION)){
    if(@session_start() == false){
    session_destroy();session_start(); 
}
}
// Se actualizan a nulo las variables de sesion
$_SESSION['usuario']= null;
$_SESSION['contrasena']= null;  
echo '<script language="javascript">window.location="Principal.php"</script>'; 
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

