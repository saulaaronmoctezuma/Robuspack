<?php
<<<<<<< HEAD


/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
 
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
class controllerComboBoxes extends CI_Controller{
    //put your code here    
    public function fillCiudades() {
        $idEstado = $this->input->post('idEstado');
        
        if($idEstado){
            $this->load->model('modelComboBoxes');
            $ciudades = $this->modelComboBoxes->getCiudades($idEstado);
            echo '<option value="0">Ciudades</option>';
            foreach($ciudades as $fila){
                echo '<option value="'. $fila->idCiudad .'">'. $fila->nombreCiudad .'</option>';
            }
        }  else {
            echo '<option value="0">Ciudades</option>';
        }
    }
    
    public function hacerAlgo() {
        $idEstado = $this->input->post('idEstado');
        $idCiudad = $this->input->post('idCiudad');
        
        echo 'idEstado = '. $idEstado. '; idCiudad = '. $idCiudad;
    }
}
