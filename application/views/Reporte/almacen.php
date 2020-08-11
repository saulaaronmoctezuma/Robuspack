<html lang="es-mx">
    <head>
        <title>Robuspack</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
          <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
    </head>
    <style>
        body, html { 
  margin; 
  padding; 
  height:100%; 
} 
#wrapper { 
  min-height:100%; 
  position:relative; 
} 
#header-zone { 
  padding:10px; 
  height: 50px; 
  background:red; 
} 
#middle-zone { 
  padding-bottom:100px; 
} 
#footer-zone { 
  height: 50px; 
  background:black; 
  width:100%; 
  position:absolute; 
  
}
        
    </style>
    <body>
        <div class="container box">
            <br />
            <h3 align="rigth"><center><b>Reporte de Refacción</b>   </center></h3>
            <br />
            <?php
            if (isset($sku_detalles)) {
                ?>
              
                <?php
            }
            if (isset($sku_detalles)) {
                echo $sku_detalles;
            }
            ?>
        </div>
        
    </body>
</html>
