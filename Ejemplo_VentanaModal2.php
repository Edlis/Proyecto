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
        
    <style type='text/css'>
  /* este es el DIV de fondo que oscurece toda la pantalla detrás de la ventana */
  #MVM-overlay {
    background:transparent url(http://img40.xooimage.com/files/7/0/3/black-70-141fd7a.png) repeat left top;
    height:0;
    left: 0;
    position: fixed;
    top: 0;
    visibility:hidden;
    width: 100%;
    z-index: 9999;
    /* algunas propiedades que no funcionarán en IE */
    opacity: 0;
    -moz-transition: all 1s;
    -webkit-transition: all 1s;
    -o-transition: all 1s;
  }
  /* el DIV que contiene la ventana modal en si misma */
  #MVM {
    left: 0;
    position: absolute;
    top: 0;
    visibility: hidden;
    z-index: 10000;
  }
  /* un DIV interior de esa misma ventana */
  #MVM-inner { position: relative; }
  /* el DIV donde se mostrarán las cosas */
  #MVM-contenido {
    background-image: -moz-linear-gradient(100% 100% 90deg, rgba(100,100,100,.5),rgba(100,100,100,.5));
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(100,100,100,.5)), to(rgba(100,100,100,.5)));
    filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#80646464', EndColorStr='#80646464');
    height: 100%;
    line-height: 0;
    padding: 20px;
    /* algunas propeidades que no funcionarán en versiones anteriores a IE9 */
    border-radius: 10px;
    box-shadow: 0 0 5px #FFF inset;
  }
  /* el botón para cerrar la ventana */
  #MVM-cerrar {
    background: transparent url(http://img73.xooimage.com/files/3/4/c/close-28e1d92.gif) no-repeat left top;
    height: 32px;
    opacity: 0.5;
    position: absolute;
    right: -15px;
    top: -15px;
    width: 32px;
  }
  #MVM-cerrar:hover { opacity:1; }
</style>    

<script type='text/javascript'>
//<![CDATA[

// declaraciones generales
var MVM , MVMINNER, MVMCONTENIDO, MVMCERRAR;

// esto es l oque agrega un ID a las etiquetas cuando usamos IE
var IEelem={};
function IEaddID(fn,uniqueID) {
  return function(event) {return fn.call(IEelem[uniqueID],event);}
}

// la funcion que agregará el evento onclick a nuestras etiquetas
function creaMIventanamodal() {

  // guardamos los IDs de los distintos DIVs así luego podemos usarlos más fácilmente
  MVM = document.getElementById("MVM");
  MVMCONTENIDO = document.getElementById("MVM-contenido");
  MVMOVERLAY = document.getElementById("MVM-overlay");

  // buscamos todas las etiquetas SPAN cuya clase sea mvm y le agregamos el evento onclick
  var el = document.getElementsByTagName("span");
  for (var i=0; i<el.length; i++) {
    var c = el[i].className;
    if (c=="mvm") {
      if (el[i].addEventListener) {
        el[i].addEventListener("click", abrirMIventanamodal, false);
      } else if (el[i].attachEvent) {
        var uniqueID = el[i].uniqueID;IEelem[uniqueID] = el[i];
        el[i].attachEvent("onclick",IEaddID(abrirMIventanamodal,uniqueID));
      }
    }
  }
}

// esta es la funcion que se ejecutará cuando hagamos click en esas etiquetas
function abrirMIventanamodal() {

  // si la ventana ya está abierta no hacemos nada
  if(MVM.style.visibility == "visible") { return; }

  // leemos y guardamos los datos que contienen los atributos de la etiqueta
  var archivo, ancho, alto;
  archivo = this.getAttribute("url");
  ancho = this.getAttribute("w");
  alto = this.getAttribute("h");

  // este dato es una "corrección" para calcular el ancho de nuestro contenedor que, en este caso, posee un apdding
  var cLR = 20; // la suma de los paddings y borders left y right
  var cTB  = 20; // la suma de los paddings y borders top y bottom
  var calcancho = parseFloat(ancho) + cLR; // ancho de la ventana
  var calcalto = parseFloat(alto) + cTB; // alto de la ventana

  // calculamos el ancho del navegador y en que parte de la página estamos
  var sW = document.documentElement.clientWidth;
  var sH = document.documentElement.clientHeight;
  var posicion = getpagePosition();

  // con esos datos, establecemos la posición de la ventana modal
  var x, y;
  x = (sW - calcancho) / 2;
  y = posicion + (sH - calcalto) / 2;

  // se acabó la aritmética

  // dimensionamos la ventana según su contenido
  MVMCONTENIDO.style.width = ancho + "px";
  MVMCONTENIDO.style.height = alto + "px";
  // y ponemos una etiqueta IMG con el archivo a mostrar
  MVMCONTENIDO.innerHTML = "<img src='" + archivo + "' />";
  MVMCONTENIDO.innerHTML = "<span> Usuario:</span>";
  // posicionamos la ventana modal
  MVM.style.left = x + "px";
  MVM.style.top = y + "px";

  // dimensionamos el DIV oscuro de fondo y lo mostramos
  MVMOVERLAY.style.height = sH + "px";
  MVMOVERLAY.style.visibility="visible";
  MVMOVERLAY.style.opacity=1;

  // mostramos la ventana y su contenido
  MVM.style.visibility = "visible";
}

// esta es la función que cierra la ventana modal
function cerrarMIventanamodal() {
  MVM.style.visibility = "hidden"; // la ocultamos
  MVMCONTENIDO.innerHTML = ""; // eliminamos su contenido
  // ocultamos el fondo negro
  MVMOVERLAY.style.opacity=0; 
  MVMOVERLAY.style.visibility="hidden";
}

// esta finción nos devuelve la posición de la pa´gina donde nos encontramos
function getpagePosition() {
  if(typeof(window.pageYOffset) == 'number') {
    pp = window.pageYOffset;
  } else if(document.body && (document.body.scrollLeft || document.body.scrollTop)) {
    pp = document.body.scrollTop;
  } else if(document.documentElement) {
    pp = document.documentElement.scrollTop;
  }
  return pp;
}

// ¿qué pasa si redimensionamos la ventana del navegador? 
// lo simplificamos a lextremo, simpleemnte, cerramos la ventana modal
window.onresize = doResize;
function doResize() {
  if(document.getElementById("MVM").style.visibility=="visible") {
    cerrarMIventanamodal()
  }
}

// la función principal se ejecuta recién cuando se termina de cargar la página
window.onload = creaMIventanamodal;

//]]>
</script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <span class="mvm" url="URL_IMAGEN" w="400" h="400"> un texto o miniatura </span>
        
        <div id="MVM-overlay"></div>
        <div id="MVM">
          <div id="MVM-inner">  
            <div id="MVM-contenido"> </div>
            <a id="MVM-cerrar" href="javascript:cerrarMIventanamodal()"></a>
          </div>
        </div>
        
    </body>
</html>
