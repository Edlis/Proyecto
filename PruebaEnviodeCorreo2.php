<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $destinatario = "CienciaPolitica.EPS.USAC@gmail.com"; 

    $asunto = "Confirmación Contraseña"; 

    $cuerpo = " 
        <html> 
        <head> 
           <title>Aviso</title> 
        </head> 
        <body> 
            Su contraseña es
        </body> 
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
        ?>
    </body>
</html>
