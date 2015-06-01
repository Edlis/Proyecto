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
$destino = "jlsuchi@gmail.com";
$asunto = "Nuevito13";
$header = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header .= "From:"."jlsuchi@gmail.com";

$contenido = "Si envio el correo";
if(mail($destino,$asunto,$contenido,$header,"-f ".$destino)) echo "si envio";
else echo "no envio";
?>
    </body>
</html>
