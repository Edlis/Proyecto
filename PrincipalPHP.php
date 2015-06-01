<?php
// string de coneccion
$gbd = new PDO('mysql:host=127.0.0.1:3306;dbname=eps', 'root', '1234');

// Verifica si hay usuario en sesion
if (!isset($_SESSION)){
    if(@session_start() == false){
    session_destroy();session_start(); 
}
}

 function loguin($usuario, $contraseña){
     global $gbd;
    $sentencia = $gbd->prepare("CALL Loguin(?, ?, @existe)");
    $sentencia->bindParam(1, $usuario);
    $sentencia->bindParam(2, $contraseña);
    $sentencia->execute();
    $conecto =$gbd->query("select @existe")->fetchColumn();
    switch ($conecto) {
        case 0:
            echo '<FONT COLOR="red">El Usuario No Existe </FONT>';
            break;
        case 1:
                  // Variable de Sesion                             
                  $_SESSION['usuario']=$usuario;
                  $_SESSION['contrasena']=$contraseña;  
                  VerificarDatos($usuario,$contraseña); 
                  // echo '<script language="javascript">window.location="Registro.php"</script>';
            break;
        case 2:
            echo '<FONT COLOR="red">La Contraseña es Incorrecta </FONT>';
            break;
     }        
 }
 
 // Se verifica si los datos del formulario Registro han sido completados
 function VerificarDatos($usuario, $contraseña){
     global $gbd;
    $sentencia = $gbd->prepare("CALL SP_USUARIO(?,0,0,0,0,0,?,0,0,1,'Busqueda1', @var)");
    $sentencia->bindParam(1, $usuario);
    $sentencia->bindParam(2, $contraseña);
    $sentencia->execute();
    $varEstado =$gbd->query("select @var")->fetchColumn();; 
    //echo $varEstado;
    switch ($varEstado) {
        case 0:
            // Solo carne y contrasena se a ingresado
          echo '<script language="javascript">window.location="Registro.php"</script>';
            break;
        case 1:
           // Todo el formulario ha sido ingresado.                             
           echo '<script language="javascript">window.location="Perfil.php"</script>';
            break;
     }        
 }
 
 function EnviarContrasena($carne){
     global $gbd;
    $sentencia = $gbd->prepare("CALL SP_CORREO(?,0,0,0,0,0,0,0,0,0,'Busqueda1',@var1,@var2, @var3, @var4,  @var5)");
    $sentencia->bindParam(1, $carne);
    $sentencia->execute();
    $varID =$gbd->query("select @var1")->fetchColumn();
    $varCORREO =$gbd->query("select @var2")->fetchColumn();
    $varNOMBRE =$gbd->query("select @var3")->fetchColumn();
    $varAPELLIDO =$gbd->query("select @var4")->fetchColumn();
    $varCONTRASENA =$gbd->query("select @var5")->fetchColumn();
    if($varCORREO != null && $varID!= null ){
        
    $destinatario = $varCORREO; 

    $asunto = "Confirmación Contraseña"; 

    $cuerpo = " 
        <html> 
        <head> 
           <title>Aviso</title> 
        </head> 
        <body>"."<p align='center'><strong>Hola ". $varNOMBRE." ".$varAPELLIDO ."</strong></p>".
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
        
        
     echo ' <script language="javascript">alert("Su contraseña se envio a su correo electronico.");</script> ';   
    } else{
        
     echo ' <script language="javascript">alert("ERROR: El número de carné no existe en el sistema.");</script> ';     
    }
   // echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
   // echo $varEstado;
   // $Concatenando = '<script language="javascript">alert(' + $varEstado +');</script> ';
   // echo $Concatenando;
     
 }
 
?>