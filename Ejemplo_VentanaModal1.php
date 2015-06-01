<html>
    <head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content ="width-device-width, initial-scale=1">
        <title> EJEMPLO DE LA VENTAJA SHIT</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
	    <div class= "container" style = "margin-top: 0px">
	   <button class ="btn btn-info" data-toggle = "modal" data-target= "#miventana">
             abrir ventana
            </button>	
         <div class="modal fade" id="miventana" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog">
			    <div class="modal-content">
				    <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4> ¿Haz olvidado tu contraseña? </h4>
                                             <div class="modal-body">
                                                 
                                                 Introduce tu dirección de correo el cual registro en el sistema para establecer tu contraseña. 
                                                 Puede que tengas que comprobar en tu carpeta de spam.
                                                 
                                                 <input name="txtCorreo" type="text">
                                             </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"> Enviar </button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal"> Cerrar </button>
                                            </div>
					</div>
				</div>
			 </div>
         </div>	
            </div>>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>