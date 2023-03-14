<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->User_model->getAllSettings();
$theme = $result->theme;
?>
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma 
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-mx"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        
        
         <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
       
        <!--CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url().'public/css/main.css' ?>">
        
     
     
     <!--´Para el filtro por busqueda por cierta cantidad-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
         <!--´Para el filtro por busqueda por cierta cantidad-->
    </head>
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
    </style>
    <body>
        
        
            <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified CSS -->
  	
  	
      <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#buscarPalabras').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script> 
      
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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




       <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
    /*  body {
        font-family: 'Montserrat', serif;
        font-size: 13px;
      }
      
      table {
         font-family: 'Montserrat', serif;
        font-size: 13px; 
      }*/
      
    </style>
    
    
    
    
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
        <style>
            .divTable,divTableBody{

                background-color:#0780BA;
                color:#fff;
                padding:100px;
                font-size:25px;
            }
            /* DivTable.com */
            .divTable{
                display: table;
                width: 100%;
            }
            .divTableRow {
                display: table-row;
            }
            .divTableHeading {
                background-color: #EEE;
                display: table-header-group;
            }
            .divTableCell, .divTableHead {
                border: 1px solid #999999;
                display: table-cell;
                padding: 3px 10px;
            }
            .divTableHeading {
                background-color: #EEE;
                display: table-header-group;
                font-weight: bold;
            }
            .divTableFoot {
                background-color: #EEE;
                display: table-footer-group;
                font-weight: bold;
            }
            .divTableBody {
                display: table-row-group;
            }

        </style>