<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>Administracion de Usuarios</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- termina  bootstrap-->
    
    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" /> 
    
    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexi-slider-css'  href='sliders/flexslider/css/slider.css' type='text/css' media='all' />
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->
    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />
    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery/jquery.js'></script>
</head>
<!-- END HEAD -->
<!-- START BODY -->
<body class="home page no_js responsive stretched">
<!-- START BG SHADOW -->
<div class="bg-shadow">
<!-- START WRAPPER -->
<div id="wrapper" class="container group">
<!-- START TOP BAR -->
<!-- START TOP BAR -->
<div id="topbar">
    <div class="container">
        <div class="row">
            <div id="last-tweets-3" class="widget-first span6 widget last-tweets"></div>
            <div id="text-8" class=" widget-last span6 widget widget_text">
                <div class="textwidget">
                    <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>
                    <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>
                    <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>
                    <a href="#" class="socials-small google-small" title="Google"  >google</a>
                    <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>
                    <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
            </div>
        </div>
    </div>
</div>
<!-- END TOP BAR -->
<!-- START HEADER -->
<div id="header" class="group">
    <div class="group container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <!-- START LOGO -->
                    <div id="logo" class="span4 group">
                        <a id="logo-img" href="index.html" title="celestino">
                            <img src="images/Escudo_CienciaPoliticaPequeña1.png" title="celestino" alt="celestino" />
                        </a>                        
                    </div>
                    <!-- END LOGO -->                    
                </div>							
            </div>
        </div>
    </div>
    <div id="border-header"></div>
</div>
<!-- END HEADER -->

<!-- START PAGE META -->
<div id="page-meta" class="container">
    <!-- TITLE -->
    <div class="title">
        <h1>Permisos</h1>
    </div>
    <!-- BREDCRUMB -->
    <div class="breadcrumbs">
        <p id="yit-breadcrumb" itemprop="breadcrumb">
            <a class="home" href="index.html">Inicio</a> &gt;
            <a class="no-link current" href="#">Permisos</a>
        </p>
    </div>
</div>
<!-- END PAGE META -->
<script type="text/javascript">
            function justNumbers(e){            
        var keynum = window.event ? window.event.keyCode : e.which;//captura la tecla usada
        return /\d/.test(String.fromCharCode(keynum));// devolvemos true o false dependiendo de si es numerico o no 
        }        
 </script>
 <?PHP
 require("PermisosPHP.php"); 
 //revisar que solo administrador pueda ingresar aqui.
 ?>
<!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            
            <div id="sidebar-about" class="span1"></div>
            <!-- START CONTENT -->                       
            <div id="content-page" class="span9 content group">
			
                <div class="page type-page status-publish hentry group">
                    <h4>Ingrese los parametros de busqueda</h4>
                    <!-- Aqui pondre el codigo de busqueda se leccion-->
                    <form name="Busqueda" method="post" action="">
                        <div class="input-prepend">

                            <input type="text" name="Busqueda" class="text-field span5" value="<?php if(!empty($_POST['Busqueda'])){ echo $_POST['Busqueda'];} ?>" /> 
                        
                        <br>
                        <div class="clear"></div>
                        </div>

                        <br>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="intereses" type="radio" value="Estudiante"  
                               <?php if (isset($_POST['intereses']) && $_POST['intereses']=="Estudiant"){ echo 'checked="checked"';} ?>
                               />Estudiantes
                        <input name="intereses" type="radio" value="Revisor" 
                               <?php if (isset($_POST['intereses']) && $_POST['intereses']=="Revisor"){ echo 'checked="checked"';} ?>
                               />Revisores 
                        <input name="intereses" type="radio" value="Personal Administrativo"  
                               <?php if (isset($_POST['intereses']) && $_POST['intereses']=="Personal Administrativo"){ echo 'checked="checked"';} ?>
                               />Personal Administrativo
                        <input name="intereses" type="radio" value="Todos"  
                               <?php if (isset($_POST['intereses']) && $_POST['intereses']=="Todos"){ echo 'checked="checked"';} ?>
                               />Todos
                        <input name="btnBuscar" type="submit"  style="background:#FFCCCC" value="Buscar">                                                
                    </form>
                    
                    <span class="Estilo2">
                                                    <h11><a href="" class data-toggle = "modal" data-target= "#miventana" >
                                                    Ingresar Nuevo Usuario</a></h11>
                                                </span>
                    <form name="FormularioUsuario" method="post" action="" onsubmit="return validarFormulario ()">
                    
         <div class="modal fade" id="miventana" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog">
			    <div class="modal-content">
				    <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4> Registro de Nuevo Usuario </h4>
                                             <div class="modal-body">
                                                 
                                                 Introduzca los datos solicitados del usuario que desea ingresar, se le <br><br>
                                                 enviara un correo al usuario al ser asignado para que actualice su <br><br>
                                                 información personal.<br>
                                                 <br>
                                                 <table class="box login-box" border="1">
                                            <tr>
                                              <td width="66" bgcolor="#FFFFFF"><span class="Estilo2">Identificador:</span></td>
                                              <td width="189" bgcolor="#FFFFFF"><input name="txtIdentificador" maxlength="11" type="text" required placeholder="Ingrese carné" onkeypress="return justNumbers(event);"></td>
                                              <td width="8" bgcolor="#FFFFFF"><span class="Estilo2"></span></td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#FFFFFF"><span class="Estilo2">Correo: </span></td>
                                              <td bgcolor="#FFFFFF"><input name="txtCorreo" maxlength="50" required placeholder="Ingrese correo" type="text" ></td>
                                              <td bgcolor="#FFFFFF"><span class="Estilo2"></span></td>
                                            </tr>
                                           <tr>
                                              <td bgcolor="#FFFFFF"><span class="Estilo2">Permiso: </span></td>
                                              <td bgcolor="#FFFFFF"><select name="Rol">
                                                      <option value="Estudiante">Estudiante</option>
                                                      <option value="Revisor">Revisores</option>
                                                      <option value="Personal Administrativo">Personal Administrativo</option></select></td>
                                              <td bgcolor="#FFFFFF"><span class="Estilo2"></span></td>
                                            </tr>
                                        </table>
                                             </div>
                                            
                                            <div class="modal-footer">
                                                <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" style="background:#B75B7D">
                                                <?php 
                                                // aqui se mandan a llamar los metodos para la inserccion.                                                
                                                if(isset($_POST['btnEnviar'])){
                                                  ABC_Usuario($_POST['txtIdentificador'],0,$_POST['Rol'],$_POST['txtCorreo']);                                                    
                                                }
                                                ?>
                                                <button type="button" style="background:#B75B7D" data-dismiss="modal"> Cancelar </button>
                                            </div>
					</div>
				</div>
			 </div>
         </div>	
                    </form>
                    <!--codigo de javascript que verificara que el correo sea una expresion valida -->
                     
                    <script type="text/javascript">
                        window.onload = function () {
                        document.FormularioUsuario.txtIdentificador.focus();
                        document.FormularioUsuario.addEventListener('submit', validarFormulario);
                        }

                        function validarFormulario(evObject) {
                        evObject.preventDefault();
                        var formulario = document.FormularioUsuario;
                        if ( /\S+@\S+\.\S+/.test(formulario.txtCorreo.value)){
                            //alert ('Correo valido');
                            formulario.submit();
                        }else {alert ('Correo no valida'); return false;}
                        
                        
                        }
                    </script>
                    
                    <!-- FINALIZA -->
                    
                    <div class="accordion-container">
                    <?PHP
                    if(isset($_POST['btnBuscar'])){
                    //si el radio button esta selecionado pero el textbox no.
                    if(!empty($_POST['intereses']) && empty($_POST['Busqueda'])){                       
                        if(!RecibirParametros_Permiso($_POST['intereses'],null)){
                            echo 'No hay coincidencias, Revise los parametros de Busqueda';
                        }
                    }                    
                    //si el radio button no esta seleccionado pero el textbox si
                    elseif(empty($_POST['intereses']) && !empty($_POST['Busqueda'])){
                        if(!RecibirParametros_Permiso(null,  trim($_POST['Busqueda']))){
                            echo 'No hay coincidencias, Revise los parametros de Busqueda';
                        }
                    }
                    //Si los dos han sido seleccionados entonces........
                    elseif(!empty($_POST['intereses']) && !empty($_POST['Busqueda'])){                        
                        if(!RecibirParametros_Permiso($_POST['intereses'],trim($_POST['Busqueda']))){
                            echo 'No hay coincidencias, Revise los parametros de Busqueda';
                        }
                    }else{
                        echo ' <script language="javascript">alert("Debe de Seleccionar por lo menos una opcion de busqueda");</script> ';
                    }                                        
                    }
                    //ahora si se preciona uno de los botones dentro del despliegue de la busqueda
                    
                    if(isset($_POST['Modificar'])){
                        ABC_Usuario($_POST['txtUsuario'],2,$_POST['Rol'],"");
                        leerDatosHaciaAdelante($_POST['parametro1'],$_POST['parametro2'],$_POST['parametro2']);                        
                       // echo 'Quieren modificar esto';
                       // echo $_POST['txtUsuario'];
                       // echo $_POST['Rol'];
                        echo ' <script language="javascript">alert("El usuario seleccionado ha sido modificado");</script> ';
                        
                    }
                    if(isset($_POST['Eliminar'])){
                        ABC_Usuario($_POST['txtUsuario'],1,$_POST['Rol'], "");
                        if(!leerDatosHaciaAdelante($_POST['parametro1'],$_POST['parametro2'],$_POST['parametro2'])){
                            echo 'Ya no hay mas resultados de la busqueda';
                        } 
                        echo ' <script language="javascript">alert("El usuario seleccionado ha sido eliminado");</script> ';
                        // echo 'Quieren eliminar esto';
                        // echo $_POST['txtUsuario'];
                        
                    }
                    ?>                                                                 
                    </div>
                    <script>
                        jQuery(document).ready(function($){
                            $('.accordion-title').click(function(){
                                if( !$(this).hasClass('active') ) {
                                    $('.accordion-title').removeClass('active').find(':first-child').addClass('plus').text("+").removeClass('minus');
                                    $('.accordion-item').slideUp();

                                    $(this).toggleClass('active')
                                            .find(':first-child').removeClass('plus').addClass('minus').text("-").parent().next().slideToggle();
                                }
                            }).filter(':first').click();
                        });
                    </script>

                </div>
                <!-- START COMMENTS -->
                <div id="comments"></div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->
            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->
            
        </div>
    </div>
</div>
<!-- END PRIMARY -->

<!-- START FOOTER -->
<div id="footer" >
    <div class="container" >
        <div class="row">
                <!-- por espacio :/ -->
		<div class="work-thumbnail span4"></div>
                <!-- por espacio  fin:/ -->                                                              
              <div  class="widget span6 contact-info"  >
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Dirección:</span> Ciudad Universitaria Zona 12, Edificio M-5</li>
                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Telefono EPS:</span> 2418-8402
                            </li>
                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Telefono Facultad:</span> 2418-8701, 2418-8702 y 2418-8703
                            </li>
                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> cienciaPolitica@yahoo.es
                            </li>
                        </ul>
                    </div>
              </div>      
        </div>
      </div>
    </div>
<!-- END FOOTER -->

<!-- START COPYRIGHT -->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="left span6">
                <a href="http://yithemes.com/?ddownload=60426&amp;ap_id=celestino-html"><strong>Universidad San Carlos de Guatemala </strong></a>
            </div>
            <div class="right span6">
                <p>EPS<a href="http://yithemes.com/" title="free themes wordpress"><strong>  Escuela de Ciencia Politica </strong></a>                </p>
            </div>
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->

</div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->



<!-- START CUSTOM SCRIPT -->

<!-- END CUSTOM SCRIPT -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>