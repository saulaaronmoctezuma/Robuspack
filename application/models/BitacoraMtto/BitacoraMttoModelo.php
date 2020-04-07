<?php

require 'BitacoraMttoPojo.php';
require 'IModeloAbstracto.php';
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
class BitacoraMttoModelo extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    public function getAllSettings() {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();
    }

    public function getUsers() {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();
    }

    public function add($data) {
        $this->db->insert('bitacora_mtto', $data);
    }

    public function delete($id) {
        $this->db->delete('bitacora_mtto', array('id_bitacora' => $id));
    }

//
    public function query() {
        // $query = $this->db->get('bitacora_mtto');
        //$query = $this->db->query('SELECT * FROM bitacora_mtto order by id_bitacora desc');
        //user data from session
        $data = $this->session->userdata;


        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //$query = $this->db->query('SELECT * FROM Venta order by id_venta desc');



            $this->db->select('*');
            $this->db->from('bitacora_mtto');
            $this->db->join('users', 'bitacora_mtto.id=users.id');
            $this->db->order_by('bitacora_mtto.id_bitacora', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->get();



            $colBitacora_Mtto = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraMttoPojo($value->id_bitacora, $value->planta, $value->modelo, $value->maquina, $value->fecha,
                         $value->motivo_asistencia,
                        $value->tipo, 
                        $value->mantenimiento,
                       
                        $value->consecutivo, $value->des_acti1, $value->des_acti2, $value->des_acti3, $value->des_acti4, $value->des_acti5, $value->des_acti6, $value->des_acti7, $value->des_acti8, $value->des_acti9, $value->des_acti10, $value->des_acti11, $value->des_acti12, $value->des_acti13, $value->des_acti14, $value->des_acti15, $value->reporto, $value->ref_usadas1, $value->ref_usadas2, $value->ref_usadas3, $value->ref_usadas4, $value->ref_usadas5, $value->ref_usadas6, $value->ref_usadas7, $value->ref_usadas8, $value->ref_usadas9, $value->ref_usadas10, $value->ref_usadas11, $value->ref_usadas12, $value->ref_usadas13, $value->ref_usadas14, $value->ref_usadas15, $value->ref_usadas16, $value->ref_usadas17, $value->ref_usadas18, $value->ref_usadas19, $value->ref_usadas20, $value->ref_usadas21, $value->ref_usadas22, $value->ref_usadas23, $value->ref_usadas24, $value->ref_usadas25, $value->ref_usadas26, $value->ref_usadas27, $value->ref_usadas28, $value->ref_usadas29, $value->ref_usadas30, $value->ref_recomen1, $value->ref_recomen2, $value->ref_recomen3, $value->ref_recomen4, $value->ref_recomen5, $value->ref_recomen6, $value->ref_recomen7, $value->ref_recomen8, $value->ref_recomen9, $value->ref_recomen10, $value->ref_recomen11, $value->ref_recomen12, $value->ref_recomen13, $value->ref_recomen14, $value->ref_recomen15, $value->ref_recomen16, $value->ref_recomen17, $value->ref_recomen18, $value->ref_recomen19, $value->ref_recomen20, $value->ref_recomen21, $value->ref_recomen22, $value->ref_recomen23, $value->ref_recomen24, $value->ref_recomen25, $value->ref_recomen26, $value->ref_recomen27, $value->ref_recomen28, $value->ref_recomen29
                        , $value->ref_recomen30
                          , $value->capacitacion
                           ,$value->aceptacion_capacitacion,
                        $value->recomendaciones, $value->proxima_inter,$value->foto, $value->first_name
                );

                array_push($colBitacora_Mtto, $objeto);
            }
            return $colBitacora_Mtto;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_mantenimiento") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            $this->db->select('*');
            $this->db->from('bitacora_mtto');
            $this->db->join('users', 'bitacora_mtto.id=users.id');
            $this->db->order_by('bitacora_mtto.id_bitacora', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->get();


              $colBitacora_Mtto = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraMttoPojo($value->id_bitacora, $value->planta, $value->modelo, $value->maquina, $value->fecha,
                         $value->motivo_asistencia,
                        $value->tipo, 
                        $value->mantenimiento,
                       
                        $value->consecutivo, $value->des_acti1, $value->des_acti2, $value->des_acti3, $value->des_acti4, $value->des_acti5, $value->des_acti6, $value->des_acti7, $value->des_acti8, $value->des_acti9, $value->des_acti10, $value->des_acti11, $value->des_acti12, $value->des_acti13, $value->des_acti14, $value->des_acti15, $value->reporto, $value->ref_usadas1, $value->ref_usadas2, $value->ref_usadas3, $value->ref_usadas4, $value->ref_usadas5, $value->ref_usadas6, $value->ref_usadas7, $value->ref_usadas8, $value->ref_usadas9, $value->ref_usadas10, $value->ref_usadas11, $value->ref_usadas12, $value->ref_usadas13, $value->ref_usadas14, $value->ref_usadas15, $value->ref_usadas16, $value->ref_usadas17, $value->ref_usadas18, $value->ref_usadas19, $value->ref_usadas20, $value->ref_usadas21, $value->ref_usadas22, $value->ref_usadas23, $value->ref_usadas24, $value->ref_usadas25, $value->ref_usadas26, $value->ref_usadas27, $value->ref_usadas28, $value->ref_usadas29, $value->ref_usadas30, $value->ref_recomen1, $value->ref_recomen2, $value->ref_recomen3, $value->ref_recomen4, $value->ref_recomen5, $value->ref_recomen6, $value->ref_recomen7, $value->ref_recomen8, $value->ref_recomen9, $value->ref_recomen10, $value->ref_recomen11, $value->ref_recomen12, $value->ref_recomen13, $value->ref_recomen14, $value->ref_recomen15, $value->ref_recomen16, $value->ref_recomen17, $value->ref_recomen18, $value->ref_recomen19, $value->ref_recomen20, $value->ref_recomen21, $value->ref_recomen22, $value->ref_recomen23, $value->ref_recomen24, $value->ref_recomen25, $value->ref_recomen26, $value->ref_recomen27, $value->ref_recomen28, $value->ref_recomen29
                        , $value->ref_recomen30
                          , $value->capacitacion
                           ,$value->aceptacion_capacitacion,
                        $value->recomendaciones, $value->proxima_inter,$value->foto, $value->first_name
                );

                array_push($colBitacora_Mtto, $objeto);
            }
            return $colBitacora_Mtto;
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */





            $this->db->select('*');
            $this->db->from('bitacora_mtto');
            $this->db->join('users', 'bitacora_mtto.id=users.id');
            $this->db->order_by('bitacora_mtto.id_bitacora', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->get();



              $colBitacora_Mtto = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraMttoPojo($value->id_bitacora, $value->planta, $value->modelo, $value->maquina, $value->fecha,
                         $value->motivo_asistencia,
                        $value->tipo, 
                        $value->mantenimiento,
                       
                        $value->consecutivo, $value->des_acti1, $value->des_acti2, $value->des_acti3, $value->des_acti4, $value->des_acti5, $value->des_acti6, $value->des_acti7, $value->des_acti8, $value->des_acti9, $value->des_acti10, $value->des_acti11, $value->des_acti12, $value->des_acti13, $value->des_acti14, $value->des_acti15, $value->reporto, $value->ref_usadas1, $value->ref_usadas2, $value->ref_usadas3, $value->ref_usadas4, $value->ref_usadas5, $value->ref_usadas6, $value->ref_usadas7, $value->ref_usadas8, $value->ref_usadas9, $value->ref_usadas10, $value->ref_usadas11, $value->ref_usadas12, $value->ref_usadas13, $value->ref_usadas14, $value->ref_usadas15, $value->ref_usadas16, $value->ref_usadas17, $value->ref_usadas18, $value->ref_usadas19, $value->ref_usadas20, $value->ref_usadas21, $value->ref_usadas22, $value->ref_usadas23, $value->ref_usadas24, $value->ref_usadas25, $value->ref_usadas26, $value->ref_usadas27, $value->ref_usadas28, $value->ref_usadas29, $value->ref_usadas30, $value->ref_recomen1, $value->ref_recomen2, $value->ref_recomen3, $value->ref_recomen4, $value->ref_recomen5, $value->ref_recomen6, $value->ref_recomen7, $value->ref_recomen8, $value->ref_recomen9, $value->ref_recomen10, $value->ref_recomen11, $value->ref_recomen12, $value->ref_recomen13, $value->ref_recomen14, $value->ref_recomen15, $value->ref_recomen16, $value->ref_recomen17, $value->ref_recomen18, $value->ref_recomen19, $value->ref_recomen20, $value->ref_recomen21, $value->ref_recomen22, $value->ref_recomen23, $value->ref_recomen24, $value->ref_recomen25, $value->ref_recomen26, $value->ref_recomen27, $value->ref_recomen28, $value->ref_recomen29
                        , $value->ref_recomen30
                          , $value->capacitacion
                           ,$value->aceptacion_capacitacion,
                        $value->recomendaciones, $value->proxima_inter, $value->foto,$value->first_name
                );

                array_push($colBitacora_Mtto, $objeto);
            }
            return $colBitacora_Mtto;
        } else if ($dataLevel == "is_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */





            $this->db->select('*');
            $this->db->from('bitacora_mtto');
            $this->db->join('users', 'bitacora_mtto.id=users.id');
            $this->db->order_by('bitacora_mtto.id_bitacora', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->get();



              $colBitacora_Mtto = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraMttoPojo($value->id_bitacora, $value->planta, $value->modelo, $value->maquina, $value->fecha,
                         $value->motivo_asistencia,
                        $value->tipo, 
                        $value->mantenimiento,
                       
                        $value->consecutivo, $value->des_acti1, $value->des_acti2, $value->des_acti3, $value->des_acti4, $value->des_acti5, $value->des_acti6, $value->des_acti7, $value->des_acti8, $value->des_acti9, $value->des_acti10, $value->des_acti11, $value->des_acti12, $value->des_acti13, $value->des_acti14, $value->des_acti15, $value->reporto, $value->ref_usadas1, $value->ref_usadas2, $value->ref_usadas3, $value->ref_usadas4, $value->ref_usadas5, $value->ref_usadas6, $value->ref_usadas7, $value->ref_usadas8, $value->ref_usadas9, $value->ref_usadas10, $value->ref_usadas11, $value->ref_usadas12, $value->ref_usadas13, $value->ref_usadas14, $value->ref_usadas15, $value->ref_usadas16, $value->ref_usadas17, $value->ref_usadas18, $value->ref_usadas19, $value->ref_usadas20, $value->ref_usadas21, $value->ref_usadas22, $value->ref_usadas23, $value->ref_usadas24, $value->ref_usadas25, $value->ref_usadas26, $value->ref_usadas27, $value->ref_usadas28, $value->ref_usadas29, $value->ref_usadas30, $value->ref_recomen1, $value->ref_recomen2, $value->ref_recomen3, $value->ref_recomen4, $value->ref_recomen5, $value->ref_recomen6, $value->ref_recomen7, $value->ref_recomen8, $value->ref_recomen9, $value->ref_recomen10, $value->ref_recomen11, $value->ref_recomen12, $value->ref_recomen13, $value->ref_recomen14, $value->ref_recomen15, $value->ref_recomen16, $value->ref_recomen17, $value->ref_recomen18, $value->ref_recomen19, $value->ref_recomen20, $value->ref_recomen21, $value->ref_recomen22, $value->ref_recomen23, $value->ref_recomen24, $value->ref_recomen25, $value->ref_recomen26, $value->ref_recomen27, $value->ref_recomen28, $value->ref_recomen29
                        , $value->ref_recomen30
                          , $value->capacitacion
                           ,$value->aceptacion_capacitacion,
                        $value->recomendaciones, $value->proxima_inter, $value->foto,$value->first_name
                );

                array_push($colBitacora_Mtto, $objeto);
            }
            return $colBitacora_Mtto;
        }else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('*');
            $this->db->from('bitacora_mtto');
            $this->db->join('users', 'bitacora_mtto.id=users.id');
            $this->db->order_by('bitacora_mtto.id_bitacora', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            //tree los datos de la consulta
            $query = $this->db->get();


             $colBitacora_Mtto = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraMttoPojo($value->id_bitacora, $value->planta, $value->modelo, $value->maquina, $value->fecha,
                         $value->motivo_asistencia,
                        $value->tipo, 
                        $value->mantenimiento,
                       
                        $value->consecutivo, $value->des_acti1, $value->des_acti2, $value->des_acti3, $value->des_acti4, $value->des_acti5, $value->des_acti6, $value->des_acti7, $value->des_acti8, $value->des_acti9, $value->des_acti10, $value->des_acti11, $value->des_acti12, $value->des_acti13, $value->des_acti14, $value->des_acti15, $value->reporto, $value->ref_usadas1, $value->ref_usadas2, $value->ref_usadas3, $value->ref_usadas4, $value->ref_usadas5, $value->ref_usadas6, $value->ref_usadas7, $value->ref_usadas8, $value->ref_usadas9, $value->ref_usadas10, $value->ref_usadas11, $value->ref_usadas12, $value->ref_usadas13, $value->ref_usadas14, $value->ref_usadas15, $value->ref_usadas16, $value->ref_usadas17, $value->ref_usadas18, $value->ref_usadas19, $value->ref_usadas20, $value->ref_usadas21, $value->ref_usadas22, $value->ref_usadas23, $value->ref_usadas24, $value->ref_usadas25, $value->ref_usadas26, $value->ref_usadas27, $value->ref_usadas28, $value->ref_usadas29, $value->ref_usadas30, $value->ref_recomen1, $value->ref_recomen2, $value->ref_recomen3, $value->ref_recomen4, $value->ref_recomen5, $value->ref_recomen6, $value->ref_recomen7, $value->ref_recomen8, $value->ref_recomen9, $value->ref_recomen10, $value->ref_recomen11, $value->ref_recomen12, $value->ref_recomen13, $value->ref_recomen14, $value->ref_recomen15, $value->ref_recomen16, $value->ref_recomen17, $value->ref_recomen18, $value->ref_recomen19, $value->ref_recomen20, $value->ref_recomen21, $value->ref_recomen22, $value->ref_recomen23, $value->ref_recomen24, $value->ref_recomen25, $value->ref_recomen26, $value->ref_recomen27, $value->ref_recomen28, $value->ref_recomen29
                        , $value->ref_recomen30
                          , $value->capacitacion
                           ,$value->aceptacion_capacitacion,
                        $value->recomendaciones, $value->proxima_inter, $value->foto,$value->first_name
                );

                array_push($colBitacora_Mtto, $objeto);
            }
            return $colBitacora_Mtto;
        } else if ($dataLevel == "is_servicio_a_clientes") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('*');
            $this->db->from('bitacora_mtto');
            $this->db->join('users', 'bitacora_mtto.id=users.id');
            $this->db->order_by('bitacora_mtto.id_bitacora', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            //tree los datos de la consulta
            $query = $this->db->get();


             $colBitacora_Mtto = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraMttoPojo($value->id_bitacora, $value->planta, $value->modelo, $value->maquina, $value->fecha,
                         $value->motivo_asistencia,
                        $value->tipo, 
                        $value->mantenimiento,
                       
                        $value->consecutivo, $value->des_acti1, $value->des_acti2, $value->des_acti3, $value->des_acti4, $value->des_acti5, $value->des_acti6, $value->des_acti7, $value->des_acti8, $value->des_acti9, $value->des_acti10, $value->des_acti11, $value->des_acti12, $value->des_acti13, $value->des_acti14, $value->des_acti15, $value->reporto, $value->ref_usadas1, $value->ref_usadas2, $value->ref_usadas3, $value->ref_usadas4, $value->ref_usadas5, $value->ref_usadas6, $value->ref_usadas7, $value->ref_usadas8, $value->ref_usadas9, $value->ref_usadas10, $value->ref_usadas11, $value->ref_usadas12, $value->ref_usadas13, $value->ref_usadas14, $value->ref_usadas15, $value->ref_usadas16, $value->ref_usadas17, $value->ref_usadas18, $value->ref_usadas19, $value->ref_usadas20, $value->ref_usadas21, $value->ref_usadas22, $value->ref_usadas23, $value->ref_usadas24, $value->ref_usadas25, $value->ref_usadas26, $value->ref_usadas27, $value->ref_usadas28, $value->ref_usadas29, $value->ref_usadas30, $value->ref_recomen1, $value->ref_recomen2, $value->ref_recomen3, $value->ref_recomen4, $value->ref_recomen5, $value->ref_recomen6, $value->ref_recomen7, $value->ref_recomen8, $value->ref_recomen9, $value->ref_recomen10, $value->ref_recomen11, $value->ref_recomen12, $value->ref_recomen13, $value->ref_recomen14, $value->ref_recomen15, $value->ref_recomen16, $value->ref_recomen17, $value->ref_recomen18, $value->ref_recomen19, $value->ref_recomen20, $value->ref_recomen21, $value->ref_recomen22, $value->ref_recomen23, $value->ref_recomen24, $value->ref_recomen25, $value->ref_recomen26, $value->ref_recomen27, $value->ref_recomen28, $value->ref_recomen29
                        , $value->ref_recomen30
                          , $value->capacitacion
                           ,$value->aceptacion_capacitacion,
                        $value->recomendaciones, $value->proxima_inter, $value->foto,$value->first_name
                );

                array_push($colBitacora_Mtto, $objeto);
            }
            return $colBitacora_Mtto;
        }else {
            redirect(site_url() . 'main/');
        }
    }

    public function update($bitacoramtto) {
        if ($bitacoramtto instanceof BitacoraPojo) {
            $datos = array(
                "planta" => $bitacoramtto->getPlanta(),
                "modelo" => $bitacoramtto->getModelo(),
                "maquina" => $bitacoramtto->getMaquina(),
                "fecha" => $bitacoramtto->getFecha(),
                 "motivo_asistencia" => $bitacoramtto->getMotivo_asistencia(),
                "tipo" => $bitacoramtto->getTipo(),
                "mantenimiento" => $bitacoramtto->getMantenimiento(),
                
                "consecutivo" => $bitacoramtto->getConsecutivo(),
                "des_acti1" => $bitacoramtto->getDes_acti1(),
                "des_acti2" => $bitacoramtto->getDes_acti2(),
                "des_acti3" => $bitacoramtto->getDes_acti3(),
                "des_acti4" => $bitacoramtto->getDes_acti4(),
                "des_acti5" => $bitacoramtto->getDes_acti5(),
                "des_acti6" => $bitacoramtto->getDes_acti6(),
                "des_acti7" => $bitacoramtto->getDes_acti7(),
                "des_acti8" => $bitacoramtto->getDes_acti8(),
                "des_acti9" => $bitacoramtto->getDes_acti9(),
                "des_acti10" => $bitacoramtto->getDes_acti10(),
                "des_acti11" => $bitacoramtto->getDes_acti11(),
                "des_acti12" => $bitacoramtto->getDes_acti12(),
                "des_acti13" => $bitacoramtto->getDes_acti13(),
                "des_acti14" => $bitacoramtto->getDes_acti14(),
                "des_acti15" => $bitacoramtto->getDes_acti15(),
                "reporto" => $bitacoramtto->getReporto(),
                "ref_usadas1" => $bitacoramtto->getRef_usadas1(),
                "ref_usadas2" => $bitacoramtto->getRef_usadas2(),
                "ref_usadas3" => $bitacoramtto->getRef_usadas3(),
                "ref_usadas4" => $bitacoramtto->getRef_usadas4(),
                "ref_usadas5" => $bitacoramtto->getRef_usadas5(),
                "ref_usadas6" => $bitacoramtto->getRef_usadas6(),
                "ref_usadas7" => $bitacoramtto->getRef_usadas7(),
                "ref_usadas8" => $bitacoramtto->getRef_usadas8(),
                "ref_usadas9" => $bitacoramtto->getRef_usadas9(),
                "ref_usadas10" => $bitacoramtto->getRef_usadas10(),
                "ref_usadas11" => $bitacoramtto->getRef_usadas11(),
                "ref_usadas12" => $bitacoramtto->getRef_usadas12(),
                "ref_usadas13" => $bitacoramtto->getRef_usadas13(),
                "ref_usadas14" => $bitacoramtto->getRef_usadas14(),
                "ref_usadas15" => $bitacoramtto->getRef_usadas15(),
                "ref_usadas16" => $bitacoramtto->getRef_usadas16(),
                "ref_usadas17" => $bitacoramtto->getRef_usadas17(),
                "ref_usadas18" => $bitacoramtto->getRef_usadas18(),
                "ref_usadas19" => $bitacoramtto->getRef_usadas19(),
                "ref_usadas20" => $bitacoramtto->getRef_usadas20(),
                "ref_usadas21" => $bitacoramtto->getRef_usadas21(),
                "ref_usadas22" => $bitacoramtto->getRef_usadas22(),
                "ref_usadas23" => $bitacoramtto->getRef_usadas23(),
                "ref_usadas24" => $bitacoramtto->getRef_usadas24(),
                "ref_usadas25" => $bitacoramtto->getRef_usadas25(),
                "ref_usadas26" => $bitacoramtto->getRef_usadas26(),
                "ref_usadas27" => $bitacoramtto->getRef_usadas27(),
                "ref_usadas28" => $bitacoramtto->getRef_usadas28(),
                "ref_usadas29" => $bitacoramtto->getRef_usadas29(),
                "ref_usadas30" => $bitacoramtto->getRef_usadas30(),
                "ref_recomen1" => $bitacoramtto->getRef_recomen1(),
                "ref_recomen2" => $bitacoramtto->getRef_recomen2(),
                "ref_recomen3" => $bitacoramtto->getRef_recomen3(),
                "ref_recomen4" => $bitacoramtto->getRef_recomen4(),
                "ref_recomen5" => $bitacoramtto->getRef_recomen5(),
                "ref_recomen6" => $bitacoramtto->getRef_recomen6(),
                "ref_recomen7" => $bitacoramtto->getRef_recomen7(),
                "ref_recomen8" => $bitacoramtto->getRef_recomen8(),
                "ref_recomen9" => $bitacoramtto->getRef_recomen9(),
                "ref_recomen10" => $bitacoramtto->getRef_recomen10(),
                "ref_recomen11" => $bitacoramtto->getRef_recomen11(),
                "ref_recomen12" => $bitacoramtto->getRef_recomen12(),
                "ref_recomen13" => $bitacoramtto->getRef_recomen13(),
                "ref_recomen14" => $bitacoramtto->getRef_recomen14(),
                "ref_recomen15" => $bitacoramtto->getRef_recomen15(),
                "ref_recomen16" => $bitacoramtto->getRef_recomen16(),
                "ref_recomen17" => $bitacoramtto->getRef_recomen17(),
                "ref_recomen18" => $bitacoramtto->getRef_recomen18(),
                "ref_recomen19" => $bitacoramtto->getRef_recomen19(),
                "ref_recomen20" => $bitacoramtto->getRef_recomen20(),
                "ref_recomen21" => $bitacoramtto->getRef_recomen21(),
                "ref_recomen22" => $bitacoramtto->getRef_recomen22(),
                "ref_recomen23" => $bitacoramtto->getRef_recomen23(),
                "ref_recomen24" => $bitacoramtto->getRef_recomen24(),
                "ref_recomen25" => $bitacoramtto->getRef_recomen25(),
                "ref_recomen26" => $bitacoramtto->getRef_recomen26(),
                "ref_recomen27" => $bitacoramtto->getRef_recomen27(),
                "ref_recomen28" => $bitacoramtto->getRef_recomen28(),
                "ref_recomen29" => $bitacoramtto->getRef_recomen29(),
                "capacitacion" => $bitacoramtto->getCapacitacion(),
                "aceptacion_capacitacion" => $bitacoramtto->getAceptacion_capacitacion(),
                "ref_recomen30" => $bitacoramtto->getRef_recomen30(),
                "recomendaciones" => $bitacoramtto->getRecomendaciones(),
                "proxima_inter" => $bitacoramtto->getProxima_inter(),
                "foto" => $bitacoramtto->getFoto()
            );
            $this->db->where("id_bitacora", $bitacoramtto->getId_bitacora());
            $this->db->update("bitacora_mtto", $datos);
        }
    }

    public function obtener($id_bitacora) {
        $objj = $this->db->query(" Select * From bitacora_mtto where id_bitacora=$id_bitacora");
        $obj = $objj->row();
        $dp = array('id_bitacora' => $obj->id_bitacora,
            'planta' => $obj->planta,
            'modelo' => $obj->modelo,
            'maquina' => $obj->maquina,
            'fecha' => $obj->fecha,
            'motivo_asistencia' => $obj->motivo_asistencia,
            'tipo' => $obj->tipo,
            'mantenimiento' => $obj->mantenimiento,
             
            'consecutivo' => $obj->consecutivo,
            'reporto' => $obj->reporto,
            'des_acti1' => $obj->des_acti1,
            'des_acti2' => $obj->des_acti2,
            'des_acti3' => $obj->des_acti3,
            'des_acti4' => $obj->des_acti4,
            'des_acti5' => $obj->des_acti5,
            'des_acti6' => $obj->des_acti6,
            'des_acti7' => $obj->des_acti7,
            'des_acti8' => $obj->des_acti8,
            'des_acti9' => $obj->des_acti9,
            'des_acti10' => $obj->des_acti10,
            'des_acti11' => $obj->des_acti11,
            'des_acti12' => $obj->des_acti12,
            'des_acti13' => $obj->des_acti13,
            'des_acti14' => $obj->des_acti14,
            'des_acti15' => $obj->des_acti15,
            'ref_usadas1' => $obj->ref_usadas1,
            'ref_usadas2' => $obj->ref_usadas2,
            'ref_usadas3' => $obj->ref_usadas3,
            'ref_usadas4' => $obj->ref_usadas4,
            'ref_usadas5' => $obj->ref_usadas5,
            'ref_usadas6' => $obj->ref_usadas6,
            'ref_usadas7' => $obj->ref_usadas7,
            'ref_usadas8' => $obj->ref_usadas8,
            'ref_usadas9' => $obj->ref_usadas9,
            'ref_usadas10' => $obj->ref_usadas10,
            'ref_usadas11' => $obj->ref_usadas11,
            'ref_usadas12' => $obj->ref_usadas12,
            'ref_usadas13' => $obj->ref_usadas13,
            'ref_usadas14' => $obj->ref_usadas14,
            'ref_usadas15' => $obj->ref_usadas15,
            'ref_usadas16' => $obj->ref_usadas16,
            'ref_usadas17' => $obj->ref_usadas17,
            'ref_usadas18' => $obj->ref_usadas18,
            'ref_usadas19' => $obj->ref_usadas19,
            'ref_usadas20' => $obj->ref_usadas20,
            'ref_usadas21' => $obj->ref_usadas21,
            'ref_usadas22' => $obj->ref_usadas22,
            'ref_usadas23' => $obj->ref_usadas23,
            'ref_usadas24' => $obj->ref_usadas24,
            'ref_usadas25' => $obj->ref_usadas25,
            'ref_usadas26' => $obj->ref_usadas26,
            'ref_usadas27' => $obj->ref_usadas27,
            'ref_usadas28' => $obj->ref_usadas28,
            'ref_usadas29' => $obj->ref_usadas29,
            'ref_usadas30' => $obj->ref_usadas30,
            'ref_recomen1' => $obj->ref_recomen1,
            'ref_recomen2' => $obj->ref_recomen2,
            'ref_recomen3' => $obj->ref_recomen3,
            'ref_recomen4' => $obj->ref_recomen4,
            'ref_recomen5' => $obj->ref_recomen5,
            'ref_recomen6' => $obj->ref_recomen6,
            'ref_recomen7' => $obj->ref_recomen7,
            'ref_recomen8' => $obj->ref_recomen8,
            'ref_recomen9' => $obj->ref_recomen9,
            'ref_recomen10' => $obj->ref_recomen10,
            'ref_recomen11' => $obj->ref_recomen11,
            'ref_recomen12' => $obj->ref_recomen12,
            'ref_recomen13' => $obj->ref_recomen13,
            'ref_recomen14' => $obj->ref_recomen14,
            'ref_recomen15' => $obj->ref_recomen15,
            'ref_recomen16' => $obj->ref_recomen16,
            'ref_recomen17' => $obj->ref_recomen17,
            'ref_recomen18' => $obj->ref_recomen18,
            'ref_recomen19' => $obj->ref_recomen19,
            'ref_recomen20' => $obj->ref_recomen20,
            'ref_recomen21' => $obj->ref_recomen21,
            'ref_recomen22' => $obj->ref_recomen22,
            'ref_recomen23' => $obj->ref_recomen23,
            'ref_recomen24' => $obj->ref_recomen24,
            'ref_recomen25' => $obj->ref_recomen25,
            'ref_recomen26' => $obj->ref_recomen26,
            'ref_recomen27' => $obj->ref_recomen27,
            'ref_recomen28' => $obj->ref_recomen28,
            'ref_recomen29' => $obj->ref_recomen29,
            'ref_recomen30' => $obj->ref_recomen30,
            'capacitacion' => $obj->capacitacion,
            'aceptacion_capacitacion' => $obj->aceptacion_capacitacion,
            'recomendaciones' => $obj->recomendaciones,
            'proxima_inter' => $obj->proxima_inter,
            'foto' => $obj->foto
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_bitacora', $data['id_bitacora']);
        return $this->db->update('bitacora_mtto', $data);
    }

    public function refacciones() {
        
    }

    function getCliente() {
          $grupo = $this->db->select('id_cliente, cliente')->where('id_cliente <> 248')->order_by("cliente", "asc")
                ->get('cliente')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->cliente] = $option->cliente;
        }

        return $options_arr;
    }
    
    
     public function get_by_id($kondisi) {
        $this->db->where($kondisi);
        $this->db->from('bitacora_mtto');
        $query = $this->db->get();
        return $query->row();
    }

    public function updatedata($data, $kondisi) {
        $this->db->update('bitacora_mtto', $data, $kondisi);
        return TRUE;
    }
    
    
    
    
     public function totalRegistroBitacoraMantenimientoAlejandro() {
        $this->db->select('COUNT(*) as total_registros_alejandro');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 24);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoCarlos() {
        $this->db->select('COUNT(*) as total_registros_carlos');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 30);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoJorge() {
        $this->db->select('COUNT(*) as total_registros_jorge');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 23);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoMiguel() {
        $this->db->select('COUNT(*) as total_registros_miguel');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 26);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoPablo() {
        $this->db->select('COUNT(*) as total_registros_pablo');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 35);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoRodrigo() {
        $this->db->select('COUNT(*) as total_registros_rodrigo');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 22);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoVeronica() {
        $this->db->select('COUNT(*) as total_registros_veronica');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 21);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroBitacoraMantenimientoVicente() {
        $this->db->select('COUNT(*) as total_registros_vicente');
        $this->db->from('bitacora_mtto');
        $this->db->where('bitacora_mtto.id= ', 27);
        $query = $this->db->get();
        return $query->result();
    }

    public function querybusqueda() {
        
    }

}
