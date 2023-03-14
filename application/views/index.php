<!--
<script type="text/javascript">
var speed=30; // A menor numero más rápido
var flakes=150; // Numero de Copos de Nieve
var flake_image="https://scrobuspack.com/assets/images/nieve.png"; // URL de la imagen de nieve
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
</script>

-->



<style type="text/css">
    

body {

/* Ubicación de la imagen */

   background-image: url(<?php echo base_url(); ?>assets/images/fondo_src.png);
    /* background-image: url(<?php echo base_url(); ?>assets/images/navidad.jpg);*/
  

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

background-color: #FF3C12;



</style>
<div class="col-md-12 col-lg-offset-2">
    <br><br>
                        
<div class="container well col-md-8">
<div class="jumboewtroncontorno" >
    
        
       

      <br>
        <!--<h2><center><font color="red"> SISTEMA DE CONTROL ROBUSPACK</font></h2>-->
        
     <!--  <h4> <center>👋 Hola <?php echo $first_name; ?> ¡Qué bueno volverte a ver  !</h4></center>-->
       
       <!--
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
       
   -->    
     
 <h4> <center>👋 Hola <?php echo $first_name; ?> <br><br></h4>


     <?php
     defined('BASEPATH') OR exit('No direct script access allowed');
     date_default_timezone_set('America/Mexico_City');
     $fecha_actual = date("d-m-Y");
     $mes = date("-m-Y");
     if($fecha_actual=='01'.$mes) {
           ?>
       <h4>
               <p style="color:#FF0000"; face="Comic Sans,arial"> 
             “El fracaso derrota a los perdedores, el fracaso inspira a los ganadores”
               <br>  <br>
               Robert T. Kiyosaki.
</p>
              </center>
       </h4>
       
           
         <?php 
          
        }else if(($fecha_actual=='02'.$mes)){
            ?> <h4>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                “El fracaso derrota a los perdedores, el fracaso inspira a los ganadores”
               <br>  <br>
               Robert T. Kiyosaki.
               
               </p>
              </center>
       </h4>
      
      <?php 
          
        }else if(($fecha_actual=='03'.$mes)){
              ?><h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                 “El fracaso derrota a los perdedores, el fracaso inspira a los ganadores”
               <br>  <br>
               Robert T. Kiyosaki.
               
               </p>
              </center>
       </h4>
      
      <?php 
          
        }else if(($fecha_actual=='04'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                  “La única parte donde el ‘éxito’ aparece antes que el ‘trabajo’ es en el diccionario”. 
                  
                  <br>  <br>
                
                Vidal Sasoon.
               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='05'.$mes)){
            ?>
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 “Cuando el ego muere, el alma despierta”.
                 <br> <br>
           Mahatma Gandhi    
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='06'.$mes)){
            ?>
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 “Las personas que están lo suficientemente locas para creer que pueden cambiar el mundo, son las que lo logran”.
                 
                 <br>  <br>
Steve Jobs.
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='07'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 “El crecimiento constante es el mejor mecanismo de supervivencia”
                 
                 <br>  <br>
Amancio Ortega.
               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='08'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
             “Un hombre con una nueva idea es un loco hasta que ésta triunfa”. 
             
             <br>  <br>
Mark Twain.
               </p>
              </center>
       </h4>
      
      <?php 
      
           
        }else if(($fecha_actual=='09'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
               “No es sobre las ideas. Sino sobre hacer que estas se vuelvan realidad.”.
               
               <br>  <br>
               
               
   Scott Belsky, cofundador de Behance. 
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='10'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 “Nunca empieces un negocio solo para ‘hacer dinero’. Empieza un negocio para hacer una diferencia.”.
                 
                 <br><br>
                 
Marie Forleo, emprendedora. 
               </p>
              </center>
       </h4>
      
      <?php 
        
        }else if(($fecha_actual=='11'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
            “La manera de empezar es dejar de hablar y empezar a hacer.” 
             
             <br>  <br>
 Walt Disney, empresario, guionista y productor de cine. 
               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='12'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
              “Siempre da más de lo que esperan de ti.” 
                
                
                <br><br>
                
                
Larry Page, cofundador de Google. 
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='13'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 “No importa qué tan lento vayas mientras no te detengas.” 
                  
                  <br><br>
                  
                  
Confucio, reconocido pensador chino. 
               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='14'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                   
                  “El éxito es la capacidad de ir de fracaso en fracaso sin perder entusiasmo”.  
                  
                  <br><br>
                  
   Winston Churchill 
               
               
            
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='15'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 No pretendas que las cosas cambien si siempre haces lo mismo”.
                 
                 <br><br>
 Albert Einstein.
               </p>
              </center>
       </h4>
      
      <?php 
        
        }else if(($fecha_actual=='16'.$mes)){
            ?>
            <h4> <center>
            
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
“No tengas miedo al fracaso. Ten miedo de no intentarlo.”
<br><br>

Roy T. Bennett, autor.

               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='17'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
              “Comienza donde estás. Usa lo que tienes. Haz lo que puedas.” 
               
               
               <br><br>
               
               
Arthur Ashe, tenista.
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='18'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
               “Define el éxito en tus propios términos, alcánzalo en tus propios términos y vive una vida que te haga sentir orgulloso.”
                 
                 <br>  <br>

              Anne Sweeney,  Disney Media. 
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='19'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
             “La pregunta no es quién me lo va a permitir, sino quién va a detenerme.” 
              
              <br>  <br>
Ayn Rand, filósofa y escritora. 
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='20'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
               “Para triunfar necesitas talento y mil cosas más, y son esas mil cosas más las que te harán triunfar”.
               
               <br>  <br>
Julio Iglesias
               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='21'.$mes)){
            ?> 
            <h4> <center> <br><br>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                 “He fallado una y otra vez y es por ello que he tenido éxito”
                 
                   <br><br>
MICHAEL JORDAN
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='22'.$mes)){
            ?> 
            <h4> <center>
            
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                 “Si puedes soñarlo, puedes hacerlo”
                 
                   <br><br>
WALT DISNEY
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='23'.$mes)){
            ?> 
            <h4> <center>
            
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                  “Si crees que puedes, ya estás a medio camino” 
                 
                 <br>  <br>
                 
                 
THEODORE ROOSEVELT
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='24'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                “No importa lo lento que vayas mientras no te pares”
                
                <br>  <br>
CONFUCIUS
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='25'.$mes)){
            ?> 
            <h4> <center>
            
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                      
               <B>FILOSOFIA ROBUSPACK</B> <BR>

1 SOY UN SOLUCIONADOR DE PROBLEMAS<BR>
2 MI OBJETIVO ES LA SATISFACCIÓN DEL CLIENTE<BR>
3 MI RESPOSABILIDAD : CUIDAR LOS RECURSOS DE LA COMPAÑIA<BR>
4 MI COMPROMISO : SER MEJOR CADA DÍA
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='26'.$mes)){
            ?>
            <h4> <center>
            
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
               <B>FILOSOFIA ROBUSPACK</B> <BR><BR>

1 SOY UN SOLUCIONADOR DE PROBLEMAS<BR>
2 MI OBJETIVO ES LA SATISFACCIÓN DEL CLIENTE<BR>
3 MI RESPOSABILIDAD : CUIDAR LOS RECURSOS DE LA COMPAÑIA<BR>
4 MI COMPROMISO : SER MEJOR CADA DÍA
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='27'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                <B>FILOSOFIA ROBUSPACK</B> <BR><BR>

1 SOY UN SOLUCIONADOR DE PROBLEMAS<BR>
2 MI OBJETIVO ES LA SATISFACCIÓN DEL CLIENTE<BR>
3 MI RESPOSABILIDAD : CUIDAR LOS RECURSOS DE LA COMPAÑIA<BR>
4 MI COMPROMISO : SER MEJOR CADA DÍA
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='28'.$mes)){
            ?>
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
               “El valor de una idea radica en su uso.”
               
                 <br><br>
Thomas Edison 
               
               
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='29'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                    “En toda historia de éxito encontrarás a alguien que tomó una decisión valiente”
                   
                     <br><br>
APETER F.DUCKER
               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='30'.$mes)){
            ?> <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
                   “En toda historia de éxito encontrarás a alguien que tomó una decisión valiente”
                   
                     <br><br>
APETER F.DUCKER

               </p>
              </center>
       </h4>
      
      <?php 
            
        }else if(($fecha_actual=='31'.$mes)){
            ?> 
            <h4> <center>
               <p style="color:#FF0000"; face="Comic Sans,arial">  
                   
               “En toda historia de éxito encontrarás a alguien que tomó una decisión valiente”
                   
                     <br><br>
APETER F.DUCKER
               </p>
              </center>
       </h4>
      
      <?php 
            
        }
        
        
         ?>





















<BR><BR><BR><BR>








<!--
   <div style="text-align:center;padding:1em 0; " > 
            <h2>
                <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597">
                    <span style="color:gray;">Hora actual </span><br />
                    </a></h2> 
            <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=large&timezone=America%2FMexico_City" width="100%" height="140" frameborder="0" seamless></iframe> </div>
-->
    
</div>  


</div> </div> 

















<!--<script type="text/javascript">
var speed=30; // A menor numero más rápido
var flakes=150; // Numero de Copos de Nieve
//var flake_image="http://i60.servimg.com/u/f60/13/20/23/83/sin_ta11.png"; // URL de la imagen de nieve
var flake_image="https://scrobuspack.com/assets/images/sin_ta11.png"; 

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
</script>

-->