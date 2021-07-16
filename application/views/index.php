<style type="text/css">
    

body {

/* Ubicación de la imagen */

    background-image: url(<?php echo base_url(); ?>assets/images/fondo_src.png);

/* Para dejar la imagen de fondo centrada, vertical y

horizontalmente */

background-position: center center;

/* Para que la imagen de fondo no se repita */

background-repeat: no-repeat;

/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

background-attachment: fixed;

/* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

background-size: cover;

/* Se muestra un color de fondo mientras se está cargando la imagen

de fondo o si hay problemas para cargarla */

background-color: #D43636;



</style>



        <style>
                

html, body { height: 100%; }

h1 {
 font-size:5em;
 font:bold 7.5vw/1.6 'Signika', sans-serif;
 user-select:none;
}


            </style>
            
            
            
<div class="col-md-12 col-lg-offset-2">
    <br><br>
                        
<div class="container well col-md-8">
<div class="jumboewtroncontorno" >
    
        
   

      <br>
        <!--<h2><center><font color="red"> SISTEMA DE CONTROL ROBUSPACK</font></h2>-->
        <!--<script type="text/javascript">
var speed=30; // A menor numero más rápido
var flakes=150; // Numero de Copos de Nieve
var flake_image="http://i60.servimg.com/u/f60/13/20/23/83/sin_ta11.png"; // URL de la imagen de nieve
var swide, shigh;
var dx=new Array();
var xp=new Array();
var yp=new Array();
var am=new Array();
var sty=new Array();
window.onload=function() { if (document.getElementById) {
var k, f, b;
b=document.createElement("div");
b.style.position="absolute";
b.setAttribute("id", "bod");
document.body.appendChild(b);
set_scroll();
set_width();
for (var i=0; i<flakes; i++) {
dx[i]=0;
am[i]=Math.random()*20;
xp[i]=am[i]+Math.random()*(swide-2*am[i]-25);
yp[i]=Math.random()*shigh;
sty[i]=0.75+1.25*Math.random();
f=document.createElement("div");
f.style.position="absolute";
f.setAttribute("id", "flk"+i);
f.style.zIndex=i;
f.style.top=yp[i]+"px";
f.style.left=xp[i]+"px";
k=document.createElement("img");
k.src=flake_image;
f.appendChild(k);
b.appendChild(f);
}
setInterval("winter_snow()", speed);
}}
window.onresize=set_width;
function set_width() {
if (document.documentElement && document.documentElement.clientWidth) {
swide=document.documentElement.clientWidth;
shigh=document.documentElement.clientHeight;
}
else if (typeof(self.innerHeight)=="number") {
swide=self.innerWidth;
shigh=self.innerHeight;
}
else if (document.body.clientWidth) {
swide=document.body.clientWidth;
shigh=document.body.clientHeight;
}
else {
swide=800;
shigh=600
}
}
window.onscroll=set_scroll;
function set_scroll() {
var sleft, sdown;
if (typeof(self.pageYOffset)=="number") {
sdown=self.pageYOffset;
sleft=self.pageXOffset;
}
else if (document.body.scrollTop || document.body.scrollLeft) {
sdown=document.body.scrollTop;
sleft=document.body.scrollLeft;
}
else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
sleft=document.documentElement.scrollLeft;
sdown=document.documentElement.scrollTop;
}
else {
sdown=0;
sleft=0;
}
document.getElementById("bod").style.top=sdown+"px";
document.getElementById("bod").style.left=sleft+"px";
}
function winter_snow() {
for (var i=0; i<flakes; i++) {
yp[i]+=sty[i];
if (yp[i]>shigh-30) {
xp[i]=am[i]+Math.random()*(swide-2*am[i]-25);
yp[i]=0;
sty[i]=0.75+1.25*Math.random();
}
dx[i]+=0.02+Math.random()/10;
document.getElementById("flk"+i).style.top=yp[i]+"px";
document.getElementById("flk"+i).style.left=(xp[i]+am[i]*Math.sin(dx[i]))+"px";
}
}
</script>-->
      
      
       <h4> <center>👋 Hola <?php echo $first_name; ?> ¡Qué bueno volverte a ver  !</h4></center>
       
       <h1 class="subtitle is-2 has-text-weight-light">
	                            <strong><span class="txt-rotate" data-period="200" data-rotate='[ "Bienvenido !", "Welcome !" ]'></span></strong>
	                            <i class="em em-smile"></i>
	                        </h1>
           <svg viewbox="0 0 100 20">
  <defs>
    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
      <stop offset="5%" stop-color="#FF0000"/>
      <stop offset="95%" stop-color="#D43636"/>
    </linearGradient>
    <pattern id="wave" x="0" y="0" width="50" height="20" patternUnits="userSpaceOnUse">
      <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="1.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
      </path>
    </pattern>
  </defs>
  <text title="Sistema de Control Robuspack" text-anchor="middle" x="50" y="15" font-size="16" fill="url(#wave)"  fill-opacity="0.6">SCR </text>
  <text title="Sistema de Control Robuspack"  text-anchor="middle" x="50" y="15" font-size="16" fill="url(#gradient)" fill-opacity="0.1">SCR</text>
</svg>
        <div style="text-align:center;padding:1em 0; " > 
            <h2>
                <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597">
                    <span style="color:gray;">Hora actual </span><br />
                    </a></h2> 
            <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=large&timezone=America%2FMexico_City" width="100%" height="140" frameborder="0" seamless></iframe> </div>

    
</div>  


</div> </div> 

