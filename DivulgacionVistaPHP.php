<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// string de coneccion
$gbd = new PDO('mysql:host=127.0.0.1:3306;dbname=eps', 'root', '1234');
// Verifica si hay usuario en sesion
if(@session_start() == false){
    session_destroy();session_start(); 
    
}
// Validar si esta un usuario en session
if(!$_SESSION['usuario']){
// Si no hay usuario en sesion, regresa a la pag inicial.
echo '<script language="javascript">window.location="Principal.php"</script>';
} else
{
$usuario=$_SESSION['usuario'];
ValidarUsuario($usuario);
}

                          

function ValidarUsuario($usuario){
    //Mediante las variables de sesion verificare que solo el administrador pueda ingresar aqui
     global $gbd; 
    try{
    $sentencia = $gbd->prepare("CALL sp_SeleccionarRol(?, @salida)");
    $sentencia->bindParam(1, $usuario);
    $sentencia->execute();
    $conecto =$gbd->query("select @salida")->fetchColumn();

    if($conecto == 'Estudiante'){
        //todos tienen acceso aqui, menos el estudiante        
        echo '<script language="javascript">window.location="Principal.php"</script>';
    }
    }
    catch (PDOException $e) {
    print $e->getMessage();
  }    
}

function ModificarDivulgacion($identificador){
    global $gbd;
    $sentencia = $gbd->prepare("CALL sp_divulgacion(?, 0, 0, 0,0,4, @salida, @dispo)");
    $sentencia->bindParam(1, $identificador);
    $sentencia->execute(); 
    $arreglo = $sentencia->fetch();
    
   // echo $arreglo[4];
echo <<<END
<div id="comments">
                    <div id="respond">
                        <h3 id="reply-title">
                            Publicacion
                            <small>
                                <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                            </small>
                        </h3>
                        <form action="#" method="post" id="commentform" enctype="multipart/form-data">
                            <div class="row">
                                <p class="comment-form-author span3">
                                    <input name="txtTitulo" type="text" value="$arreglo[1]" size="30" required placeholder="Titulo"/>                                    
                                </p>
                                <p class="comment-form-comment span9">
                                    <textarea name="txtContenido" cols="45"rows="8" value="" required placeholder="Escriba lo que publicará">$arreglo[4]</textarea>
                                </p>
                                <p class=" span6">
                                    <input type="file" name="archivo"></p>
                                <p class=" span9">Disponibilidad
                                    <br>
                                    <br>
                                <input name="Disponibilidad" required placeholder="" type="radio" value="General"/>Estudiantes
                                <input name="Disponibilidad" required placeholder="" type="radio" value="E.P.S"/>Revisores 
                                <input name="Disponibilidad" required placeholder="" type="radio" value="Voluntariado"/>Personal Administrativo
                                <input name="Disponibilidad" required placeholder="" type="radio" value="Practicas de Investigacion"/>Todos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="btnPublicar" type="submit" value="Modificar"/>                                    
                                </p>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>
                    
END;
    
}