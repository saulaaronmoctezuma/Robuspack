    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <?php
        //for warning -> flash_message
        //for info -> success_message
        
        $arr = $this->session->flashdata();
        if(!empty($arr['flash_message'])){
            $html = '<div class="container" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-warning alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['flash_message'];
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        }else if (!empty($arr['success_message'])){
            $html = '<div class="container" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-info alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['success_message'];
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        }else if (!empty($arr['danger_message'])){
            $html = '<div class="container" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['danger_message'];
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        }
    ?>
    <div class="container">
        <div class="row">
            