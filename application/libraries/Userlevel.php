<?php
/**
 * User Level
 * Create by Karen and Saúl
 * http://www.google.mx/
 * Github: https://github.com/
 * 2018
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLevel{
    public function checkLevel($role) {
        if(!empty($role))
        {
            if($role == 1)
            {
                $userLevel = 'is_admin';
            }
            elseif($role == 2)
            {
                $userLevel = 'is_editor';
            }
            elseif($role == 3)
            {
                $userLevel = 'is_consultor';
            }
            elseif($role == 4)
            {
                $userLevel = 'is_refacciones';
            }
            elseif($role == 5)
            {
                $userLevel = 'is_maquinaria';
            }
            elseif($role == 6)
            {
                $userLevel = 'is_mediciones';
            }
             elseif($role == 7)
            {
                $userLevel = 'is_credito';
            }
            elseif($role == 8)
            {
                $userLevel = 'is_Gerente_Ventas';
            } 
            elseif($role == 9)
            {
                $userLevel = 'is_director';
            }
            elseif($role == 10)
            {
                $userLevel = 'is_maquinaria_refacciones';
            }
<<<<<<< HEAD
            
            
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            elseif($role == 11)
            {
                $userLevel = 'is_mantenimiento';
            }
            elseif($role == 12)
            {
                $userLevel = 'is_jefe_mantenimiento';
            }
            elseif($role == 13)
            {
                $userLevel = 'is_logistica';
            }
<<<<<<< HEAD
            elseif($role == 14)
            {
                $userLevel = 'is_servicio_a_clientes';
            }
           
               elseif($role == 15)
            {
                $userLevel = 'is_freelance';
            }     
            
             elseif($role == 16)
            {
                $userLevel = 'is_almacen';
            }     
            
            
            
=======
             elseif($role == 14)
            {
                $userLevel = 'is_servicio_a_clientes';
            }
             elseif($role == 15)
            {
                $userLevel = 'is_freelance';
            }
             elseif($role == 16)
            {
                $userLevel = 'is_almacen';
            }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            
            
        }else{
            echo "El rol esta vacio";
            return false;
        }
        return $userLevel;
    }
    
    /*Para traerse el id del usuario , en ClienteRefacciones/formularioAgregar  /*/
     public function id($id) {
        if(!empty($id))
        {
            if($id != null)
            {
                $id = $id;
            }
        }else{
            echo "El rol esta vacio";
            return false;
        }
        return $id;
    }
}