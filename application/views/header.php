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
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
       
        <!--CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url().'public/css/main.css' ?>">
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        
        
     
        
    </head>
        <style >
                body{
	
	
	
	
	font-family: Ariañ, arial, sans-serif;
}
.to-top{
	color:black;
	padding-top:1.8em;
	display:inline-block;/* or block */
	position:relative;
	border-color:white;
	text-decoration:none;
	transition:all .3s ease-out;
}
.to-top:before{
	content:'▲';
	font-size:.9em;
	position:absolute;
	top:0;
	left:50%;
	margin-left:-.7em;
	border:solid .13em white;
	border-radius:10em;
	width:1.4em;
	height:1.4em;
	line-height:1.3em;
	border-color:inherit;
	transition:transform .5s ease-in;
}
.to-top:hover{
	color:pink;
	border-color:pink;
}
.to-top:hover:before{
	transform: rotate(360deg);
}


.to-abajo{
	color:black;
	padding-top:1.8em;
	display:inline-block;/* or block */
	position:relative;
	border-color:white;
	text-decoration:none;
	transition:all .3s ease-out;
}
.to-abajo:before{
	content:'▼';
	font-size:.9em;
	position:absolute;
	top:0;
	left:50%;
	margin-left:-.7em;
	border:solid .13em white;
	border-radius:10em;
	width:1.4em;
	height:1.4em;
	line-height:1.3em;
	border-color:inherit;
	transition:transform .5s ease-in;
}
.to-abajo:hover{
	color:pink;
	border-color:pink;
}
.to-abajo:hover:before{
	transform: rotate(360deg);
}
        </style>
   <!--<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">-->
    
   <body>
   <!--<center>  <a name="arriba"></a></center>-->