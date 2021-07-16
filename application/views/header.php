<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->User_model->getAllSettings();
$theme = $result->theme;
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
         <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
       
        <!--CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url().'public/css/main.css' ?>">
    <!--    <link rel="stylesheet" href="<?php echo base_url().'assets/css/cosmobootstrap.min.css' ?>">-->
       
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        
        
       <!--´Para el filtro por busqueda por cierta cantidad-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
         <!--´Para el filtro por busqueda por cierta cantidad-->
      
         
         
         
         <!--https://datatables.net/extensions/fixedcolumns/examples/integration/select.html-->
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.0/css/fixedColumns.dataTables.min.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/keytable/2.5.1/css/keyTable.dataTables.min.css">
       <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
        <!--https://datatables.net/extensions/fixedcolumns/examples/integration/select.html-->

        
    <style>
      body {
        font-family: 'Montserrat', serif;
        font-size: 11px;
      }
      
      table {
         font-family: 'Montserrat', serif;
        font-size: 11px; 
      }
     
    </style>
      
      
      
      
      
      
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      
      
      
      
      
         <!--´Para el filtro por busqueda por cierta cantidad-->
    </head>
     
   <!--<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">-->
    <style>
    
     #toTop {
        position: fixed;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        background: #999999;
        opacity: 0.4;
        filter: alpha(opacity=40);
        width: 55px;
        height: 55px;
        bottom: 5px;
        left: 5px;
        cursor: pointer;
        color: #ffffff;
        font-size: 32px;
        text-align: center;
        display: none;
        padding: 10px 0 0 2px;
        z-index: 14;
    }
   
    tfoot {
    display: table-header-group;
}


.btn_whatsapp {
        display:block;
        width:70px;
        height:70px;
        color:#fff;
        position: fixed;
        right:20px;
        bottom:15px;
        border-radius:30%;
        line-height:60px;
        text-align:center;
        z-index:999;

}


@media (max-width: 600px) {
  .btn_whatsapp {
    display: none;
  }


p, h1, h2, h3, h4, h5, table{
font-family: 'Montserrat', sans-serif;
color: #09E562;
}





    </style>

   <body>
   <!--<center>  <a name="arriba"></a></center>-->
      
      
    <!-- Latest compiled and minified CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
  	
      <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script> 
      
      

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<!--
<div class="btn_whatsapp">
<a href="https://wa.link/0E6H" target="_blank">
<img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
</a>
</div>-->



 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(document).ready(function() {
                $(".hidediv").click(function() {
                    $(".divdemo").hide("slow");
                });

                $(".showdiv").click(function() {
                    $(".divdemo").show(2000);
                });

            });

        </script>
<!--
       
<style>
 .scrollable {
    width: 500%;
    margin: 0 auto;
    border: 1px dashed black;   
}

    .fixed {
    position: fixed;
}

.header{
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background-color: #000;
}

.side {
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    background-color: red;
}
 </style>
        <div class='fixed side'>hola</div>
<div class='scrollable'>hola</div>
 
-->