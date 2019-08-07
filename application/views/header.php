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










p, h1, h2, h3, h4, h5, table{
font-family: 'Montserrat', sans-serif;
}





    </style>

   <body>
   <!--<center>  <a name="arriba"></a></center>-->