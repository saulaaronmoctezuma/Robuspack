<?php
/**
 * Send Mail
 * Create by Karen & saul

 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SendMail{

    public function secureMail($fn,$ln,$em,$dt,$t,$tLe,$bro,$os,$ip,$url){
        $message = '';
        $message .= '<h3 style="color:red">CORREO ENVIADO POR PARTE DE KAREN Y SAÚL, ROBUSPACK.</h3> <br>';
        $message .= '<Hola  ' .$fn.' '.$ln.',';
        $message .= '<br>';
        $message .= '<br>';
        $message .= 'Su cuenta ' .$em.' fue utilizado para iniciar sesión desde en el <b>SISTEMA DE CONTROL ROBUSPACK<b>'.$bro.' en '.$os.'.';
        $message .= '<br>';
        $message .= '<br>';
        $message .= '<table>';
        $message .= '<tr>';
        $message .= '<td>Tu usuario</td><td> : <b>'.$em.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Desde el navegador</td><td> : <b>'.$bro.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Desde el sistema operativo</td><td> : <b>'.$os.'</b><td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Con la dirección IP</td><td> : <b>'.$ip.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Fecha</td><td> : <b>'.$dt.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Hora</td><td> : <b>'.$t.'</b></td>';
        $message .= '</tr>';
        $message .= '</table>';
        $message .= '<br>';
        $message .= '<br>';
        $message .= '¿No reconoces esta actividad?';
        $message .= '<br>';
        $message .= 'Asegure su cuenta, desde este enlace.';
        $message .= '<br>';
        $message .= '<a href='.$url.'><b>Login.</b></a>';
        $message .= '<br>';
        $message .= '<br>';
        $message .= '¿Por qué estamos enviando esto?<br>Nos tomamos muy en serio la seguridad y queremos mantenerlo informado sobre acciones importantes en su cuenta.';
        $message .= '<br>';
        $message .= '<br>';
        $message .= '<h3 style="color:black">Saludos, de parte Karen González y Saúl González Desarrolladores de Software.</h3><br>';
        $message .= $tLe;
        return $message;
        
    }
    
    public function sendRegister($ls,$em,$link,$tLe){
        
        $message = '';
         $message .= '<h3 style="color:red">CORREO ENVIADO POR PARTE DE KAREN Y SAÚL, ROBUSPACK.</h3> <br>';
        $message .= 'Hola, ' .$ls.'<br>';
        $message .= '<br>';
        $message .= '¡Bienvenido! Te has registrado en nuestro sitio web con la siguiente información::<br>';
        $message .= '<br>';
        $message .= '<strong>Usuario : '.$em.'</strong><br>';
        $message .= '<strong>Constraseña : (No asignada) </strong><br>';
        $message .= '<br>';
        $message .= 'Antes de que pueda iniciar sesión, debe activar y asignar su contraseña';
        $message .= '<br>';
        $message .= 'Da clic en el siguiente enlace';
        $message .= '<br><br>';
        $message .= $link . '<br>';
        $message .= '<br>';
        $message .= '<h3 style="color:black">Saludos, de parte Karen González y Saúl González Desarrolladores de Software</h3>.<br>';
        $message .= $tLe;
        return $message;
    }
    
    public function sendForgot($ls,$em,$link,$tLe){
        
        $message = '';
        $message .= '<h3 style="color:red">CORREO ENVIADO POR PARTE DE KAREN Y SAÚL ROBUSPACK.</h3> <br>';
        $message .= 'Hola, ' .$ls.'<br>';
        $message .= '<br>';
        $message .= 'Usted deberá generar una nueva contraseña para su sesión<br>';
        $message .= 'Apartir de este cambio usted podrá ingresar nuevamente al SCR , sus datos son:<br>';
        $message .= '<br>';
        $message .= '<strong>Usuario : '.$em.'</strong><br>';
        $message .= '<strong>Constraseña : <b>(NO VISIBLE)</b>  </strong><br>';
        $message .= '<br>';
        $message .= 'Para restablecer su contraseña, por favor haga clic en este enlace:';
        $message .= '<br><br>';
        $message .= $link . '<br>';
        $message .= '<br>';
        $message .= '<h3 style="color:black">Saludos, de parte Karen González y Saúl González Desarrolladores de Software.</h3><br>';
        $message .= $tLe;
        return $message;
    }

}