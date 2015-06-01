<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// string de coneccion
$gbd = new PDO('mysql:host=127.0.0.1:3306;dbname=eps', 'root', '1234');

//Busqueda("1");
//leerDatosHaciaAdelante();
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
    
    if($conecto != 'Administrador'){
        //solo administrador tiene acceso aqui
        echo ' <script language="javascript">alert("No fuera de aqui invasor!!");</script> '; 
            echo '<script language="javascript">window.location="Principal.php"</script>';
    }
    }
    catch (PDOException $e) {
    print $e->getMessage();
  }
    
    
}

function RecibirParametros_Permiso($opcion,$buscar){
    //variables de envio
    $parametro1 = "";
    $parametro2 = 0;
    $parametro3 = "";
    if(!empty($buscar)){
        // si no es nulo le quitamos los espacios que podria tener de mas y mandamos ese parametro
        $parametro1=  $buscar;
        if(!empty($opcion)){
          $parametro3 = $opcion;  
        }
    }    
    switch ($opcion) {
        //estudiantes
        case 'Estudiante':
            //echo 'estudiantes';
            $parametro2 = 2;
            break;
        //revisores
        case 'Revisor':
            //echo 'reviores';
            $parametro2 = 4;
            break;
        //administrativo
        case 'Personal Administrativo':
            //echo 'si entro en administrativo';
            $parametro2 = 3;
            break;
        //Todos
        case 'Todos':            
            if(empty($buscar)){
                $parametro2 = 1;                     
            }else{
                $parametro2 = 6;                
            }            
            $parametro3 = "";
            break;
        case null:
            $parametro2 = 6;
            break;
    }     
  return  leerDatosHaciaAdelante($parametro1,$parametro2,$parametro3);
}

function leerDatosHaciaAdelante($parametro1,$parametro2,$parametro3) {
    global $gbd;
    $datos = false;
  try {
    $sentencia = $gbd->prepare("CALL sp_permisos(?, ?,?)", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $sentencia->bindParam(1, $parametro1);
    $sentencia->bindParam(2, $parametro2);
    $sentencia->bindParam(3, $parametro3);
    $sentencia->execute(); 
    
    while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $datos = true;
/* @var $fila type */
        if($fila[3] == "0"){
            //echo $fila[3];
            $carnet = $fila[0];
            $Nombres = $Apellidos = $DPI = $Email = $Direccion = $Telefono = $Celular = "";            
            $Rol = $fila[8];               
        }else{
            $carnet = $fila[0];
            $Nombres = $fila[3];
            $Apellidos = $fila[4];
            $DPI = $fila[1];
            $Email = $fila[2];
            $Direccion = $fila[5];
            $Telefono = $fila[6];
            $Celular = $fila[7];            
            $Rol = $fila[8];
           // echo ' siiii entrooooooooooo';
        }
        
      echo <<<END
      <div class="accordion-wrapper row"><div class="accordion-title span9"><div class="plus">+</div>
        <h4>$carnet  $Nombres $Apellidos </h4> </div><div class="accordion-item span9"><div class="row"><table><td><div class="span5"><div class="accordion-item-content">
        <form name="$fila[0]" method="post" action="">
        <p><img class="icon" src="images/icons/menu/small/user.png" alt="role_icon" />        
        <input name="txtUsuario" type="hidden" required value="$carnet">
        <input name="parametro1" type="hidden" required value="$parametro1">
        <input name="parametro2" type="hidden" required value="$parametro2">
        <input name="parametro3" type="hidden" required value="$parametro3">
        Carnet: $carnet </p><p><img class="icon" src="images/icons/menu/small/smile.png" alt="role_icon" />                                                    
        Nombres: $Nombres </p><p><img class="icon" src="images/icons/menu/small/smile.png" alt="role_icon" />                                                    
        Apellidos: $Apellidos </p><p><img class="icon" src="images/icons/role.png" alt="website_icon" />
        DPI: $DPI </p><p><img class="icon" src="images/icons/menu/small/contact.png" alt="website_icon" />
        Email: $Email </p><p><img class="icon" src="images/icons/menu/small/map.png" alt="website_icon" />
        Direccion: $Direccion </p></div></div></td><td><div class="span5"><div class="accordion-item-content"><p><img class="icon" src="images/icons/menu/small/home.png" alt="website_icon" />
        Telefono: $Telefono </p><p><img class="icon" src="images/icons/menu/small/mobile.png" alt="website_icon" />
        Celular: $Celular </p><p><img class="icon" src="images/icons/menu/small/team.png" alt="website_icon" />
        Rol:<select name="Rol"><option value="$Rol">$Rol</option>
END;
       Rol_Select($Rol);
      echo '</p><p>&nbsp;&nbsp;&nbsp;'
       . '<input name="Eliminar" type="submit"  style="background:#FFCCCC" value="Eliminar"> '
              . '<input name="Modificar" type="submit"  style="background:#FFCCCC" value="Modificar"></p></form></div></div></td></table></div></div></div>';

      
    }         
    }
  
  catch (PDOException $e) {
    print $e->getMessage();
  }
  return $datos;
}

function Rol_Select($Rol){
    switch ($Rol) {
        case 'Estudiante':
            echo '<option value="Revisor">Revisores</option>
        <option value="Personal Administrativo">Personal Administrativo</option></select>';
            break;
        case 'Revisor':
            echo '<option value="Estudiante">Estudiante</option>
        <option value="Personal Administrativo">Personal Administrativo</option></select>';
            break;
        default:
            echo '<option value="Revisor">Revisores</option>
        <option value="Estudiante">Estudiante</option></select>';
            break;
    }
    
}

function ABC_Usuario($identificador, $opcion, $rol,$correo){
    //metodo que permitira eliminar o modificar el permiso del usuario.
    // de igual manera se crearan los usuarios individualmente. 
    global $gbd;
    //opcion 1 elimina, opcion 2 modifica. echo $identificador; echo $opcion; echo $rol;
    try{
    $sentencia = $gbd->prepare("CALL sp_usuarioAdmin(?, ?, ?,?,@existe)");
    $sentencia->bindParam(1, $identificador);
    $sentencia->bindParam(2, $opcion);
    $sentencia->bindParam(3, $rol);
    $sentencia->bindParam(4, $correo);
    $sentencia->execute();
    $conecto =$gbd->query("select @existe")->fetchColumn();
    switch ($conecto) {
        case 0:
            echo ' <script language="javascript">alert("Se ha ingresado el usuario solicitado");</script> ';
            MandarCorreo($identificador);
            break;
        case 1:
            echo ' <script language="javascript">alert("El usuario seleccionado ya existe \n por lo que no se puede ingresar. \n Revise la informacion");</script> ';            
            break;
     }
    }
    catch (PDOException $e) {
    print $e->getMessage();
  }          
}

function leerDatosHaciaAtrás($gbd) {
  //$sql = 'SELECT hand, won, bet FROM mynumbers ORDER BY bet';
  try {
    $sentencia = $gbd->prepare("CALL sp_permisos(10, 1)", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $sentencia->execute();
    $fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
    do {
      $datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "<br>";
      print $datos;
    } while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
    $sentencia = null;
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }
}

function MandarCorreo($identificador){
     global $gbd;
    $sentencia = $gbd->prepare("CALL SP_CORREO(?,0,0,0,0,0,0,0,0,0,'Busqueda1',@var1,@var2, @var3, @var4,  @var5)");
    $sentencia->bindParam(1, $identificador);
    $sentencia->execute();
    $varID =$gbd->query("select @var1")->fetchColumn();
    $varCORREO =$gbd->query("select @var2")->fetchColumn();
    $varCONTRASENA =$gbd->query("select @var5")->fetchColumn();
    if($varCORREO != null && $varID!= null ){
        
    $destinatario = $varCORREO; 

    $asunto = "Asignacion"; 

    $cuerpo = " 
        <html> 
        <head> 
           <title>Aviso</title> 
        </head> 
        <body>"."<p align='center'><strong>Hola ". $varID ."</strong></p>".
            "</br></br>
            Bienvenido a la plataforma de EPS de Ciencia Política.
            Para ingresar al portal virtual solo necesitas ingresar tu número de carné y contraseña, los cuales te detallamos a continuación:"
       ."<p align='left'>Carné: <strong> ".$varID ."</strong></p>"
       ."<p align='left'>Contraseña: <strong>".$varCONTRASENA ."</strong></p>"
       ."<br /><p align='left'>La confidencialidad de tus datos en nuestro registro se encuentra protegida por nuestras políticas de privacidad, por lo que tu información personal nunca será compartida con terceros.</p>"
       ."<p align='left'>Atentamente,</p><br />"
       ."<p align='left'><i><font color='#8F0135'>Escuela de Ciencia Política, EPS</font></i></p>"
       ."<p align='left'><i><font color='#8F0135'>Universidad de San Carlos de Guatemala</font></i></p>"
       ."<p align='left'><i><font color='#8F0135'>Teléfono  EPS: 2418-8402</font></i></p>"
       ." </body> 
        </html> 
    "; 

    //para el env&iacute;o en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    //direcci&oacute;n del remitente 
    $headers .= "From: EPS-CienciaPolitica <".$destinatario.">\r\n"; 

    //dirección de respuesta, si queremos que sea distinta que la del remitente 
    $headers .= "Reply-To: ".$destinatario."\r\n"; 

    mail($destinatario,$asunto,$cuerpo,$headers,"-f ".$destinatario); 
        
        
     
    } else{
        
     echo ' <script language="javascript">alert("ERROR: El número de carné no existe en el sistema.");</script> ';     
    }
   // echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
   // echo $varEstado;
   // $Concatenando = '<script language="javascript">alert(' + $varEstado +');</script> ';
   // echo $Concatenando;
     
 }