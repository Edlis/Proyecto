<html>

  <head>
    <link rel="stylesheet" rev="stylesheet" type="text/css" href="http://atc.ugr.es/~gustavo/xampp/xampp.css" /> 
    <meta http-equiv="content-type" content="text/html; charset=latin1" />
     <title>Acceso a base de datos desde PHP</title>
     <style>
       body { margin: auto; width: 50%; }
     </style>
   </head>

   <body>
     <?php
     $conexion;
     $conexion = mysql_pconnect("localhost","root","1234");
     
     if(! $conexion)
       {
	 echo "<p>No se pudo conectar con la base de datos <b>test</b></p>\n";
	 exit;
       }
     else
       {
	 echo "<p>Conectado con la base de datos <b>test</b>.</p>\n";
	 
	 mysql_select_db("eps", $conexion);
	 
	 $resultado = mysql_query("SELECT * FROM usuario", $conexion);
	 
	 if (! $resultado)
	   {
	     echo "<p>No se pudo efectuar la consulta de la tabla <b>testaa</b></p>\n";
	     exit;
	   }
	 else
	   {
	     echo "<p>Consulta efectuada sobre la tabla <b>testaa</b>: </p>\n";
	     
	     echo "<table>\n";
	     while( $array_datos = mysql_fetch_row($resultado) )
	       {
		 echo "<tr><td>";
		 foreach ( $array_datos as $out )
		   {
		     echo $out . "</td><td>";
		   }
		 echo "</tr>\n";
	       }
	     echo "</table>\n";
	   } 
	 
	 mysql_close($conexion);
       }
    ?>
  </body>

<html>