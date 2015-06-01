<?php


$gbd = new PDO('mysql:host=127.0.0.1:3306;dbname=eps', 'root', '1234');
 
 function BusquedRol($carne)
 {
    global $gbd;
    $sentencia = $gbd->prepare("CALL SP_USUARIO(?,0,0,0,0,0,0,0,0,0,'Busqueda2', @var)");
    $sentencia->bindParam(1, $carne);
    $sentencia->execute();
    $ROL1 =$gbd->query("select @var")->fetchColumn();
    $_POST['rol2'] = $ROL1;
 }
 
 function InsertarUsuario($carne,$dpi,$email,$nombre,$apellido,$direccion,$contrasena,$tel_casa,$tel_cel, $idRol){
  global $gbd;
 
    $sentencia = $gbd->prepare("CALL SP_USUARIO(?,?,?,?,?,?,?,?,?,2,'UP1', @var)");
    $sentencia->bindParam(1, $carne);
    $sentencia->bindParam(2, $dpi);
    $sentencia->bindParam(3, $email);
    $sentencia->bindParam(4, $nombre);
    $sentencia->bindParam(5, $apellido);
    $sentencia->bindParam(6, $direccion);
    $sentencia->bindParam(7, $contrasena);
    $sentencia->bindParam(8, $tel_casa);
    $sentencia->bindParam(9, $tel_cel);
    $sentencia->execute();
    echo '<script language="javascript">window.location="Perfil.php"</script>';
  
 //$sentencia = $gbd->prepare("INSERT INTO usuario VALUES('$carne','$dpi','$email','$nombre','$apellido','$direccion','$contrasena','$tel_casa','$tel_cel','1')");
 //$sentencia->execute();
 }
 ?>