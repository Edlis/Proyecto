<?php

$gbd = new PDO('mysql:host=127.0.0.1:3306;dbname=eps', 'root', '1234');


 function PeticionNombreUsuario($carne){
     global $gbd;
    $sentencia = $gbd->prepare("CALL SP_CORREO(?,0,0,0,0,0,0,0,0,0,'Busqueda1',@var1,@var2, @var3, @var4,  @var5)");
    $sentencia->bindParam(1, $carne);
    $sentencia->execute();
    $varNOMBRE =$gbd->query("select @var3")->fetchColumn();
    $varAPELLIDO =$gbd->query("select @var4")->fetchColumn();
    $_POST['Nombre']= $varNOMBRE;
    $_POST['Apellido']= $varAPELLIDO;
 }

 
 
  function EnvioAniosInscrito($carne){
     global $gbd;
     BusquedRol($carne);
   //---------------------- Cantidad de anios asignados ----------
     $ValorForm =0;
    global $gbd;
    $sentencia = $gbd->prepare("CALL SP_conteoAnio(?,'Busqueda1',@cantidad)");
    $sentencia->bindParam(1, $carne);
    $sentencia->execute();
    $varCantidad =$gbd->query("select @cantidad")->fetchColumn();// cantidad de anios asignados
     
   //------------------------------------------------------
     //print $_POST['rolUsuario']; devuelve si el rol del usuario
  if ($_POST['rolUsuario'] == 'Administrador'){
     $consulta = "SELECT distinct YEAR (asig.fecha) as fecha, cu.Semestre FROM asignacion as asig, usuario u, curso as cu
                     WHERE  cu.idCurso = asig.idCurso
                            And asig.idUsuario = u.idUsuario
                            ORDER BY  fecha  DESC;";
     $result = $gbd->query($consulta);
    }
    else{
          
     $consulta = "SELECT distinct YEAR (asig.fecha) as fecha, cu.Semestre FROM asignacion as asig, usuario u, curso as cu
                WHERE  cu.idCurso = asig.idCurso
                       And asig.idUsuario = u.idUsuario
                       And u.idUsuario = ".$carne." ORDER BY  fecha  DESC; ";
     $result = $gbd->query($consulta);
          
     }
     
        // Se recorren los datos de la consulta, se crea la pestaña de aca año.
            if (!$result) {
                print "<p>Error en la consulta.</p>\n";        
            } else {
               if ($varCantidad == 0 && $_POST['rolUsuario'] != 'Administrador' )
               {
                  echo " <label><font color='red'><center> No está asignado a ningún curso</center></font> </label>"; 
               }
               
                foreach ($result as $valor) {
                 $ValorForm =   $ValorForm +1;
                 
               // Imprimir los acordiones de acuerdo a los anios asignados   
                  
	          print "<p><div class='accordion-wrapper row'>
                            <div class='accordion-title span9'>
                                <div class='plus'>+</div>
                                <h4>".@$valor[Semestre]." Semestre  "." ". @$valor[fecha]  ."</h4>
                            </div>
                            <div class='accordion-item span9'>
                                <div class='row'>
                                    <div class='span6'>
                                        <div class='accordion-item-content'>
                                            <p>
                                              <div class= span12>
					      <!-------Inicio Contenido--------->";
                                              
                                                  if ($_POST['rolUsuario'] == 'Administrador'){
                                                      // Si el usuario es administrador
                                                       $consulta1 = " Select tc.Nombre, cu.Semestre, cu.Anio, cu.idCurso  from curso as cu, tipocurso as tc
                                                                        where tc.idTipoCurso = cu.idTipoCurso
                                                                        and Anio = ".@$valor[fecha]."
                                                                        and Semestre = ".@$valor[Semestre]."
                                                                           Order by tc.Nombre ASC;";
                                                      $result1 = $gbd->query($consulta1);
                                                  }else
                                                  {
                                                      // si el usuario no es administrador
                                                      $consulta1 = "select tc.Nombre, cu.Semestre, cu.Anio, asig.idCurso from asignacion as asig, curso as cu, tipocurso as tc
                                                                     where  cu.idTipoCurso = tc.idTipoCurso
                                                                     And cu.idCurso = asig.idCurso
                                                                     And  YEAR (asig.fecha) = '".@$valor[fecha]."'
                                                                     And  idUsuario =".$carne."
                                                                     and  cu.Semestre = ".@$valor[Semestre]."
                                                                      Order by tc.Nombre ASC;";
                                                      $result1 = $gbd->query($consulta1);
                                                  }
                                                  
                                                            // Se recorren los datos de la consulta, se crea la pestaña de aca año.
                                                                if (!$result1) {
                                                                    print "<p>Error en la consulta.</p>\n";
                                                                } else {
                                                                    foreach ($result1 as $valor1) {
                                                                       // print "<p>$valor1[Nombre]</p>\n";
                                                                        print "<form name='form".$ValorForm."' method='post' action=''>";
                                                                        print " <ul class='the-icons'> <img src='Imagenes_chamilo/Asignado.png' title='Documentos'   alt='Documentos' width='5' height='5'/> "
                                                                                . " <input type='submit' name='txtCurso' id='txtCurso' value='".@$valor1[Nombre]."' class='BTN_TRANS'> </li></ul>\n";
                                                                        print "<input style='visibility:hidden' name='txtidSemestre' maxlength='50' type='txt' value='". @$valor1[idCurso]."' >";
                                                                        
                                                                             print "</form> ";

                                                                        
                                                                    }
                                                                }
                                                      
                                     print         " 
                                           </div>
                                         <!-------Finaliza contenido--------->
                                        </div>
                                    </div>
                                 </div>
                             </div>

			</div> </p>\n";
                    
                            
                }
                

            }
            
                
            

  }
//////----- ESTO HAY QUE BORRARLO
 function BusquedRol($carne)
 {
    global $gbd;
    $sentencia = $gbd->prepare("CALL SP_USUARIO(?,0,0,0,0,0,0,0,0,0,'Busqueda2', @var)");
    $sentencia->bindParam(1, $carne);
    $sentencia->execute();
    $ROL1 =$gbd->query("select @var")->fetchColumn();
    $_POST['rolUsuario'] = $ROL1;
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