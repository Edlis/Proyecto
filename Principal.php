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

    <title>EPS Ciencia Politica.</title>

    <!--  bootstrap es el css de los text, el cual muestra los text no ingresados -->
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
                            <!--  <p id="tagline">only for creative minds.</p> -->
                    </div>
                    <!-- END LOGO -->                  
                </div>
            </div>
        </div>
    </div>
    <div id="border-header"></div>
</div>
<!-- END HEADER -->
<div id="slider-flash" class="slider slider-flash flash no-responsive container">
    <div class="slider-wrapper" style="width:1170px;height:470px;">
        <div id="piecemaker"></div>
    </div>
</div>
<script type="text/javascript">
            function justNumbers(e){            
        var keynum = window.event ? window.event.keyCode : e.which;//captura la tecla usada
        return /\d/.test(String.fromCharCode(keynum));// devolvemos true o false dependiendo de si es numerico o no 
        }
 </script>
        

<!-- START PAGE META -->
<div id="page-meta" class="container">
    <!-- SLOGAN -->
    <div class="slogan">
        <h2>Ejercicio Profesional Supervisado</h2>
        <h3>Escuela de Ciencia Politica</h3>
    </div>
</div>
<!-- END PAGE META -->
<!-- START PRIMARY -->
<div id="primary" class="sidebar-no" >
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-home" class="span12 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="section portfolio">
                        <!-- section blog wrapper -->
                        <!-- sticky portfolio -->                        
                        <div class="row">
                            <div class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">                
                                <!-- por espacio :/ -->
				<div class="work-thumbnail span6"></div>
                               <!-- por espacio  fin:/ -->                                                              
                                <div class="work-thumbnail span13">
                                    <div class="thumb-wrapper">
                                      <div class="related_img">
                                          <?php
                                            //hare conexion y comparacion en dado caso... esten los valores.
                                          if(isset($_POST['txtAceptar'])){
                                                require("PrincipalPHP.php");
                                            $usuario = trim($_POST['txtUsuario']);
                                            $contrasena =trim($_POST['txtContrasena']);
                                            loguin($usuario,$contrasena);   

                                            }	
                                            ?> 
                                         
                                      <form name="Login" method="post" action="">
					<div class="box login-box">                                           
                                            <h2>Iniciar Sesión</h2></br>
                                            <table class="box login-box" border="1">
                                            <tr>
                                              <td width="66" bgcolor="#FFFAF0"><span class="Estilo2">Usuario:</span></td>
                                              <td width="189" bgcolor="#FFFAF0"><input name="txtUsuario" maxlength="11" type="text" required placeholder="Ingrese carné" onkeypress="return justNumbers(event);"></td>
                                              <td width="8" bgcolor="#FFFAF0"><span class="Estilo2"></span></td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#FFFAF0"><span class="Estilo2">Constraseña: </span></td>
                                              <td bgcolor="#FFFAF0"><input name="txtContrasena" maxlength="50" required placeholder="Ingrese contraseña" type="password" ></td>
                                              <td bgcolor="#FFFAF0"><span class="Estilo2"></span></td>
                                            </tr>
                                           <tr>
                                              <td height="32" bgcolor="#FFFAF0"><span class="Estilo2"></span></td>
                                              <td bgcolor="#FFFAF0">
                                                <input name="txtAceptar" type="submit"  style="background:#FFCCCC" value="Inciar Sesión">  </td>
                                              <td bgcolor="#FFFAF0"><span class="Estilo2"></span></td>
                                            </tr><tr>
                                              <td bgcolor="#FFFAF0"><span class="Estilo2"></span>											  </td>
                                              <td bgcolor="#FFFAF0">
                                                <p>
                                                  <span class="Estilo2">
                                                    <h11><a href="" class data-toggle = "modal" data-target= "#miventana" >
                                                    ¿Olvidó su contraseña?</a></h11>
                                                </span>
                                                  <span class="Estilo2">	
                                                                
                                               </span> </p></td>
                                              <td bgcolor="#FFFAF0"></td>
                                            </tr>
                                        </table>
					</div>
					</form> 
                                          
                                         <form name="Contrasena" method="post" action="">
                                            
                                                   <div class="modal fade" id="miventana" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                             <div class="modal-header">
                                                                                     <span class="Estilo2">
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                                                                               </span><span class="Estilo3"><h4><span class="Estilo2"> ¿Haz olvidado tu contraseña? </span></h4>
                                                                                            </span>
                                                                                      <div class="modal-body">
 
                                                                                          <span class="formRed">
                                                                                              <div>Introduce tu número de carné el cual fue registrado en el sistema, tu contraseña será enviara a tu correo electrónico registrado. 
                                                                                                  Puede que tenga que comprobar en su carpeta de spam.</div>
                                                                                              </br>
                                                                                              </span>
                                                                                        
                                                                                          <input name="txtCarne1" id="txtCarne1"  type="text"  maxlength="11" style="width:300px;height:15px" placeholder="Ejemplo: 2001519447" onkeypress="return justNumbers(event);">
                                                                                      </div>

                                                                                     <div class="modal-footer">
                                                                                         <span class="Estilo2">
                                                                                                <!--<input type="submit" name="btnAceptar" id="btnEnviar" value="Enviar">-->
                                                                                             <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" style="background:#B75B7D">
                                                                                                          
                                                                                                   <?php

                                                                                                            // Se verifica el boton enviar
                                                                                                            if(isset($_POST['btnEnviar'])){
                                                                                                                require("PrincipalPHP.php");
                                                                                                                $carne=trim($_POST['txtCarne1']);
                                                                                                                EnviarContrasena($carne);
                                                                                                                //$varEstado= 'FF';
                                                                                                                //$Concatenando = '<script language="javascript">alert(' + $varEstado +');</script> ';
                                                                                                                //    echo $Concatenando;
                                                                                                              // echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
                                                                                                            //require("RegistroPHP.php");
                                                                                                            //  $_POST['rol2']='0';
                                                                                                             
                                                                                                          //  echo '<script language="javascript">window.location="Perfil.php"</script>'; 

                                                                                                        }	
                                                                                                      ?>
                                                                                           <button type="button" style="background:#B75B7D" data-dismiss="modal"> Cerrar </button>
                                                                                     </span></div>
                                                                                 </div>
                                                                         </div>
                                                                  </div>
                                                    </div>
                                             
                                         </form>
                                           
                                          
                                      </div>
                                    </div>
                                    <!-- end thumb wrapper -->
                                </div>                                                                
                                <!-- end work-thumbnail -->                                                           
                        </div>
                        <!-- span wrapper --> 
                    </div>
                    </div>
                    <!-- end section blog wrapper -->
                </div>
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
<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/swfobject.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>
<!-- START CUSTOM SCRIPT -->
<script type="text/javascript">
    var flashvars = {};
    flashvars.cssSource = "sliders/flash/piecemaker/piecemaker.css";
    flashvars.xmlSource = "sliders/flash/piecemaker/piecemaker.xml";
    var flash_params = {};
    flash_params.play = "true";
    flash_params.menu = "false";
    flash_params.scale = "scale";
    flash_params.wmode = "transparent";
    flash_params.allowfullscreen = "true";
    flash_params.allowscriptaccess = "always";
    flash_params.allownetworking = "all";
    swfobject.embedSWF('sliders/flash/piecemaker/piecemaker.swf', 'piecemaker', '100%', '100%', '10', null, flashvars, flash_params, null);
    jQuery(document).ready(function($){
        var ResizeFlash = function(){
            var main_width = $('#slider-flash').width();
            var initial_height = 470;
            $(".slider-wrapper").css( "width",  main_width );
            $(".slider-wrapper").css( "height", ( initial_height * main_width ) / 1170 );
        }
        ResizeFlash();
        $(window).resize(ResizeFlash);
    });
</script>
<!-- END CUSTOM SCRIPT -->
</body>
<!-- END BODY -->
</html>