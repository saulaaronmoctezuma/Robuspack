<style type="text/css">
    

body {

/* Ubicación de la imagen */

    background-image: url(<?php echo base_url(); ?>assets/images/fondo3.jpg);

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

}
</style>
<div class="jumbotron">
    <div class="container" >
        
       

        <h2> 👋 ¡Qué bueno volverte a ver, <?php echo $first_name; ?> !</h2>
        <br>
      <h1><font color="#009942"> Sistema de Control de Robuspack</font></h1>
        
       
        <div style="text-align:center;padding:1em 0;"> 
            <h2>
                <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597">
                    <span style="color:gray;">Hora actual </span><br />
                    </a></h2> 
            <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=large&timezone=America%2FMexico_City" width="100%" height="140" frameborder="0" seamless></iframe> </div>

    </div>
</div>  


