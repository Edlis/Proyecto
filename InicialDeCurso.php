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
                         // Se resive la variable de Session 
                          // Iniciar y verificar las variables de session
                          if(@session_start() == false){
                              session_destroy();session_start(); 
                          }
                          // Validar si esta un usuario en session
                          //$_SESSION['usuario']=null;
                          if(!$_SESSION['usuario']){
                              // Si no hay usuario en sesion, regresa a la pag inicial.
                               echo '<script language="javascript">window.location="Principal.php"</script>';
                          } else
                          {
                            
                              $carne=trim($_SESSION['idAsignacion']);
                              echo $carne;
                          }
                     
                      ?>
        
    </body>
</html>
