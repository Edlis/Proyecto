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

    <title>EPS | Escuela de Ciencia Politica.</title>

    <!--  bootstrap es el css de los text, el cual muestra los text no ingresados -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <!-- termina  bootstrap-->
    
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
    <link rel='stylesheet' id='slide-details-css'  href='portfolios/slide-detail/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='sliders/flexslider-elegant/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-css'  href='sliders/revolution-slider/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-settings-css'  href='sliders/revolution-slider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-captions-css'  href='sliders/revolution-slider/rs-plugin/css/captions.css' type='text/css' media='all' />

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
    <style type="text/css">
<!--
.Estilo2 {color: #000000}
-->
    </style>
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
            <div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                <h3>Last Tweets</h3>

            </div>

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

<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>
<!-- Se pueden ingresar solo numeros al text -->
<script type="text/javascript">
            function justNumbers(e){            
        var keynum = window.event ? window.event.keyCode : e.which;//captura la tecla usada
        return /\d/.test(String.fromCharCode(keynum));// devolvemos true o false dependiendo de si es numerico o no 
        }
  </script>

<!-- END TOP BAR -->

<!-- START HEADER -->
<div id="header" class="group">
    <div class="group container">
        <div class="row">
            <div class="span12">

                <div class="row">
                    <!-- START LOGO -->
                    <div id="logo" class="span4 group">
                          <img src="images/Escudo_CienciaPoliticaPequeña1.png" title="celestino" alt="celestino" />
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                        <form name="form2" method="post" action="">
                        <div class="menu">
                            <ul id="nav" class="sf-menu">
                                  
                            <li class="nav-icon-team current_page_item ">
                                    <a href="#">
                                        Salir
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="SalirPHP.php" type="salir" name="salir">
                                                Salir de Sesión
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                            <?php
                                                if(isset($_POST['salir'])){
                                                        require("SalirPHP.php");
                                                }
	?>
                                        </li>
                                  
                                    </ul>
                                </li>                                                                           
                            </ul>
                        </div>
                        </form>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="border-header"></div>
</div>
<!-- END HEADER -->

<!-- START PRIMARY -->

<div id="primary" class="sidebar-no">

    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
   <!-- probando -->
		<div class="work-thumbnail span3">
                     <div class="thumb-wrapper">
                            <div class="related_img">
                                <form name="form1" method="post" action="">
				   <div class="box blanco-box"></div>
			         </form> 
                              </div>
                      </div>
                                    <!-- end thumb wrapper -->
                  </div>
            <!-- termina probando -->
            <div id="content-page" class="span24 content group : center;">
                <div class="page type-page status-publish hentry group ">
                                
                    <p>&nbsp;</p>
		<div class="cols-2">
                    
                 <!-- Verifica variable de session -->
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
                              require("RegistroPHP.php");
                              $carne=trim($_SESSION['usuario']);
                              BusquedRol($carne);                     
                          }
                     
                      ?>
                  <!-- probando -->
                     <?php
                           //hare conexion y comparacion en dado caso... esten los valores.
                            if(isset($_POST['txtGuardar'])){
                            //require("RegistroPHP.php");
                            $carne=trim($_POST['carne']);
                            $dpi=trim($_POST['dpi']);
                            $email=trim($_POST['email']);
                            $nombre=$_POST['nombre'];
                            $apellido=$_POST['apellido'];
                            $direccion= $_POST['direccion'];
                            $contrasena= trim($_POST['contrasena']);
                            $tel_casa=trim($_POST['tel_casa']);
                            $tel_cel=trim($_POST['tel_cel']);
                            $idRol=trim($_POST['idRol']);
                            InsertarUsuario($carne,$dpi,$email,$nombre,$apellido,$direccion,$contrasena,$tel_casa,$tel_cel, $idRol);   
                        }	
                      ?>
                    
                    
               
                    <form name="form1" method="post" action="">
                     <div class="boxRegistro Registro-box ">
                       <div>
                         <p><center>
                           <h2><strong>Registro de Usuario</strong></h2> 
                           </center>   </p>
                       </div>
                       <p>&nbsp;</p>
                       <table width="span24"  border="4">
                         <tr>
                           <td width="span24" bgcolor="#F08080">&nbsp;</td>
                           <td width="span24" bgcolor="#F08080">&nbsp;</td>
                           <td width="span24" bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Carné</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="carne" id="carne"  readonly="readonly" onkeypress="return justNumbers(event);"  value="<?php echo $_SESSION['usuario']; ?>">
                           </strong></td> 
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">DPI</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="dpi"  id="dpi" maxlength="13" required placeholder="Ingrese DPI"   onkeypress="return justNumbers(event);">
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Email</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="email"   maxlength="50" id="email"  class="form-control"  required placeholder="Ingrese email">
                           
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Nombre</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="nombre"  maxlength="150" id="nombre" required placeholder="Ingrese Nombres">
                           </strong></td>
                           <td bgcolor="#F08080">Apellidos<strong>
                           <input type="text" name="apellido"  maxlength="150" id="apellido"  required placeholder="Ingrese Apellidos">
                           </strong></td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Dirección</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="direccion"  maxlength="150" id="direccion" required placeholder="Ingrese Dirección">
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Contraseña</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="contrasena"  maxlength="50" id="contrasena" required placeholder="Ingrese contraseña" value="<?php echo $_SESSION['contrasena']; ?>">
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Teléfono residencial</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="tel_casa" id="tel_casa" maxlength="8" required placeholder="Ingrese Teléfono" onkeypress="return justNumbers(event);">
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Teléfono celular</td>
                           <td bgcolor="#F08080"><strong>
                           <input type="text" name="tel_cel" id="tel_cel" maxlength="8" required placeholder="Ingrese Teléfono" onkeypress="return justNumbers(event);">
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">Rol</td>
                           <td bgcolor="#F08080">
                            <input type="text" name="idRol" id="carne"  readonly="idRol"   value="<?php  echo $_POST['rol2']; ?>">
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         
                         <tr>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080"><strong>
                             <input type="submit" name="txtGuardar" id="txtGuardar" value="Guardar">
                           </strong></td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                         <tr>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080">&nbsp;</td>
                           <td bgcolor="#F08080">&nbsp;</td>
                         </tr>
                       </table>
                     </div>
                      </form> 
					</div>
                </div>
                <!-- START COMMENTS  class="btn btn-danger" -->
                <div id="comments"></div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
</div>
<!-- END PRIMARY -->


<!-- START FOOTER -->
<div id="footer" >
    <div class="container" >
        <div class="row">
            <div>
                <div  class="widget spa"  >
                </div>
                <div  class="widget span2 contact-info"  >
                </div>
                <div  class="widget span2 contact-info"  >
                </div>
			
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

<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>