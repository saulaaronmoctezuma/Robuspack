<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

<<<<<<< HEAD
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
class controllerMain extends CI_Controller{
    public function index(){
        $this->load->model('modelComboBoxes');
        $data['estados'] = $this->modelComboBoxes->getEstados();
        
        $this->load->view('viewComboBoxes', $data);
    }
}


