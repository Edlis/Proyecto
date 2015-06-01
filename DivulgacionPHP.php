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

    if($conecto != 'Estudiante'){
        //solo administrador tiene acceso aqui
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
                                    <input name="txtTitulo" type="text" value="" size="30" required placeholder="Titulo"/>
                                </p>
                                <p class="comment-form-comment span9">
                                    <textarea name="txtContenido" cols="45"rows="8" required placeholder="Escriba lo que publicará"></textarea>
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
                                <input name="btnPublicar" type="submit" value="Publicar"/>                                    
                                </p>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>
END;
       GenerarResultadoAdmin(); 
    }else{
        GenerarResultadoEstudiante();
    }
    return $conecto;
    }
    catch (PDOException $e) {
    print $e->getMessage();
  }
    
    
}
function EditarPublicaciones($identificador,$opcion){
    //este solo el administrador, personal administrativo y revisores puede accesar ya que el es el que puede publicar
    //solo estudiantes no.
    //echo 'este es el archivoooooo: ';    echo $Archivo;
    global $gbd;
    try{    
    $sentencia = $gbd->prepare("CALL sp_divulgacion(?, 0, 0, 0,0,?, @salida, @dispo)");
    $sentencia->bindParam(1, $identificador);
    $sentencia->bindParam(2, $opcion);
    $sentencia->execute(); 
    }
    catch (PDOException $e) {
    print $e->getMessage();
    echo '<script language="javascript">alert("Error de Conexion");</script>';
  }    
}

function CargarPublicacion($Titulo, $Contenido, $Archivo, $Disponibilidad, $Ruta){
    //este solo el administrador, personal administrativo y revisores puede accesar ya que el es el que puede publicar
    //solo estudiantes no.
    //echo 'este es el archivoooooo: ';    echo $Archivo;
    global $gbd;
    global $usuario;
    try{
        
    $sentencia = $gbd->prepare("CALL sp_divulgacion(?, ?, ?, ?,?,1, @salida, @dispo)");
    $sentencia->bindParam(1, $usuario);
    $sentencia->bindParam(2, $Titulo);
    $sentencia->bindParam(3, $Contenido);
    $sentencia->bindParam(4, $Archivo);
    $sentencia->bindParam(5, $Disponibilidad);
    $sentencia->execute();  
    $conecto =$gbd->query("select @salida")->fetchColumn();
    if($conecto != 'correcto'){
    CargarArchivo($conecto,$Ruta);
    }
    }
    catch (PDOException $e) {
    print $e->getMessage();
    echo '<script language="javascript">alert("Error de Conexion");</script>';
  }    
}

function CargarArchivo($nombre, $ruta){    
    
    $destino = "Archivos/" . $nombre;
    if ($nombre != "") {
        if (!copy($ruta, $destino)) {
        echo '<script language="javascript">alert("No se pudo adjuntar el documento");</script>';    
        }
    }    
}

function GenerarResultadoEstudiante(){
    
    global $usuario;
    global $gbd;
    try{
        
    $sentencia = $gbd->prepare("CALL sp_divulgacion(?, ?, ?, ?,?,2, @salida, @dispo)");
    $sentencia->bindParam(1, $usuario);
    $sentencia->bindParam(2, $Titulo);
    $sentencia->bindParam(3, $Contenido);
    $sentencia->bindParam(4, $Archivo);
    $sentencia->bindParam(5, $Disponibilidad);
    $sentencia->execute();  
    
    while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {        
/* @var $fila type */        
            $id = $fila[0];
            $titulo = $fila[1];
            $fecha = $fila[2];
            $hora = $fila[3];            
            $idarchivo = $fila[5];
            $idautor = $fila[6];
            $nombreArchivo = $fila[7];
            $nombreAutor = $fila[8];            
            $apellidoAutor = $fila[9]; 
            
            if(strlen($fila[4])>140){
                
              $contenido  = substr ( $fila[4],0,140).'...<a href="section-shortcodes-sticky-posts.html" class="more-link">[read more]</a>';
                }else{$contenido = $fila[4];
            if($idarchivo != 0){
                $contenido  = $fila[4].'...<a href="section-shortcodes-sticky-posts.html" class="more-link">[Descar Documento]</a>';
            }
            
            }
          
     //Estudiante
echo <<<END
            
<form name="Estudiante$fila[0]" method="post" action="">
                <div class="post type-post status-publish format-video sticky hentry category-web-design hentry-post group blog-small">
                    <div class="thumbnail"><div class="row"><div class="span3"><div><p class="date"><img src="images/icons/date.png" alt="icon-calendar" />
                                        <span>Fecha:</span> $fecha $hora </p></div></div><div class="span4"></div>
                            <div class="span5"><h2>
                                    $titulo</h2><div class="the-content">                                    
                                    <p>$contenido   </p></div></div><div class="clear"></div></div></div></div>
                <input name="txtIdentificador" type="hidden" value="$id"></form> 
END;

     
    }
    }
    catch (PDOException $e) {
    print $e->getMessage();
    echo '<script language="javascript">alert("Error de Conexion");</script>';
  }
     
}

function GenerarResultadoAdmin(){
    
    global $usuario;
    global $gbd;
    try{
        
    $sentencia = $gbd->prepare("CALL sp_divulgacion(?, ?, ?, ?,?,2, @salida, @dispo)");
    $sentencia->bindParam(1, $usuario);
    $sentencia->bindParam(2, $Titulo);
    $sentencia->bindParam(3, $Contenido);
    $sentencia->bindParam(4, $Archivo);
    $sentencia->bindParam(5, $Disponibilidad);
    $sentencia->execute();  
    
    while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {        
/* @var $fila type */        
            $id = $fila[0];
            $titulo = $fila[1];
            $fecha = $fila[2];
            $hora = $fila[3];            
            $idarchivo = $fila[5];
            $idautor = $fila[6];
            $nombreArchivo = $fila[7];
            $nombreAutor = $fila[8];            
            $apellidoAutor = $fila[9]; 
            
            if(strlen($fila[4])>140){
                
              $contenido  = substr ( $fila[4],0,140).'...<a href="" class data-toggle = "modal" data-target= "#miventana2" >[read more]</a>';
                }else{$contenido = $fila[4];
            if($idarchivo != 0){
                $contenido  = $fila[4].'...<a href="" class data-toggle = "modal" data-target= "#miventana2" >[Descar Documento]</a>';
            }
            
            }
          
        echo <<<END
            
<form name="Administrador$fila[0]" method="post" action="DivulgacionVista.php"><div class="post type-post status-publish format-video sticky hentry category-web-design hentry-post group blog-small"><div class="thumbnail"><div class="row"><div class="span3"><div><p class="author"><img src="images/icons/author.png" alt="icon-user" /><span>Autor:</span>
                                        $nombreAutor $apellidoAutor </p><p class="date"><img src="images/icons/date.png" alt="icon-calendar" />
                                        <span>Fecha:</span> $fecha $hora </p>
                                    <input name="edad" type="hidden" value="$id">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                    <input name="Eliminar" type="submit"  style="background:#FFCCCC" value="Eliminar">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Modificar" type="submit"  style="background:#FFCCCC" value="Modificar" >
                                    <input name="txtIdentificador" type="hidden" value="$id">
                                    </p></div></div><div class="span4"></div><div class="span5"><h2>
                                    $titulo </h2><div class="the-content">                                    
                                    <p>$contenido   </p></div></div><div class="clear"></div></div></div></div>
                                    </form>
                                    
                                        
END;
     
    }
    }
    catch (PDOException $e) {
    print $e->getMessage();
    echo '<script language="javascript">alert("Error de Conexion");</script>';
  }
  
  
    
    
    
    
}