<!DOCTYPE html>

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />
    <!------------- Calendario--------------->
    <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>EPS | Escuela de Ciencia Politica.</title>

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

<!-----------CSS DE CALENDARIO DEL TEXT--------------->

	<style type="text/css">
	body{
		font-family: tahoma, verdana, sans-serif;
	}
	</style>
            <!----- Boton transparente------>
         <style type="text/css"> 
            .BTN_TRANS 
            { 
            background:transparent; 
            border:none;
            text-decoration: underline;
           color: #800000 ; 
            } 
           </style> 
	<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$(".campofecha").calendarioDW();
	})
	</script>
	
<!-------------- TERMINA CSS DE CALENDARIO DEL TEXT  ------------>


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
                        <div class="menu">
                            <ul id="nav" class="sf-menu">
                                  
                                
                            
                               <li class="nav-icon-code">
                                    <a href="Principal.php">
                                        Pagina Principal
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-icon-book  current_page_item">
                                    <a href="Perfil.php">
                                        Mis Cursos
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-icon-user  ">
                                    <a href="PerfilCurso.php">
                                        Perfil de Curso
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                </li>
                                 <li class="nav-icon-date ">
                                    <a href="CronogramaPrincipal.php"">
                                        Mi agenda
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                </li>
                                 <li class="nav-icon-comment  ">
                                    <a href="#">
                                        Foro Estudiantil
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                </li>
                                   <li class="nav-icon-idea ">
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
                        <!-- END MAIN NAVIGATION -->
                    </div>
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
                 <!-- Verifica variable de session, coloca nombre a Bienvenido -->
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
                              require("PerfilPHP.php");
                              $carne=trim($_SESSION['usuario']);
                              PeticionNombreUsuario($carne);
                              //Prueba($carne);
                              echo  '<h2>Bienvenido : '.$_POST['Nombre'].' '.$_POST['Apellido']. ' </h2>';
                          }
                      ?>
        
        
    </div>

    <!-- BREDCRUMB -->
    <div class="breadcrumbs">
        <p id="yit-breadcrumb" itemprop="breadcrumb">
            <a class="no-link current" >Cursos asignados</a>  
        </p>
    </div>

</div>
<!-- END PAGE META -->


<!-- START PRIMARY -->
  

<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span9 content group">
                <div class="page type-page status-publish hentry group">
		
	<!----- Contenedor principal del acordion ------->
                    <div class="accordion-container">
                     
                       <?php
                         EnvioAniosInscrito($carne);
                        ?>
                        
                        <?php
                           //hare conexion y comparacion en dado caso... esten los valores.
                            if(isset($_POST['txtCurso'])){
                            //require("RegistroPHP.php");
                            $idAsig=$_POST['txtidSemestre'];
                            $_SESSION['idAsignacion']= $idAsig;
                           echo '<script language="javascript">window.location="PerfilCurso.php"</script>';
                           // echo $idAsig;
                            //echo '<script language="javascript">window.location="InicialDeCurso.php"</script>'; 
                            
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


