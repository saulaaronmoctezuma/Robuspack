<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index() {
        $data['num_rows'] = $this->db->get('maquinaria')->num_rows();

        $this->load->view('excel_import', $data);
    }

    public function import_data() {
        $config = array(
            'upload_path' => FCPATH . 'upload/',
            'allowed_types' => '*'
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
            @chmod($data['full_path'], 0777);

            $this->load->library('Spreadsheet_Excel_Reader');
            $this->spreadsheet_excel_reader->setOutputEncoding('CP1251');

            $this->spreadsheet_excel_reader->read($data['full_path']);
            $sheets = $this->spreadsheet_excel_reader->sheets[0];
            error_reporting(0);

            $data_excel = array();
            for ($i = 2; $i <= $sheets['numRows']; $i++) {
                if ($sheets['cells'][$i][1] == '')
                    break;

                $data_excel[$i - 1]['referencia'] = $sheets['cells'][$i][1];
                $data_excel[$i - 1]['fecha'] = $sheets['cells'][$i][2];
                $data_excel[$i - 1]['fabricante'] = $sheets['cells'][$i][3];
                $data_excel[$i - 1]['maquina'] = $sheets['cells'][$i][4];
                $data_excel[$i - 1]['precio1'] = $sheets['cells'][$i][5];
                $data_excel[$i - 1]['precio2'] = $sheets['cells'][$i][6];
                $data_excel[$i - 1]['precio3'] = $sheets['cells'][$i][7];
                $data_excel[$i - 1]['precio4'] = $sheets['cells'][$i][8];
                $data_excel[$i - 1]['precio5'] = $sheets['cells'][$i][9];
                $data_excel[$i - 1]['pcexwork'] = $sheets['cells'][$i][10];
                $data_excel[$i - 1]['pcfob'] = $sheets['cells'][$i][11];
                $data_excel[$i - 1]['pccif'] = $sheets['cells'][$i][12];
                $data_excel[$i - 1]['pccip'] = $sheets['cells'][$i][13];
                $data_excel[$i - 1]['ancho'] = $sheets['cells'][$i][14];
                $data_excel[$i - 1]['espesor'] = $sheets['cells'][$i][15];
                $data_excel[$i - 1]['espesor'] = $sheets['cells'][$i][16];
                $data_excel[$i - 1]['empresa_competencia_1'] = $sheets['cells'][$i][17];
                $data_excel[$i - 1]['empresa_competencia_2'] = $sheets['cells'][$i][18];
                $data_excel[$i - 1]['inventario'] = $sheets['cells'][$i][19];
                $data_excel[$i - 1]['piezas_recibir'] = $sheets['cells'][$i][20];
                $data_excel[$i - 1]['fecha_corte_rotacion'] = $sheets['cells'][$i][21];
                $data_excel[$i - 1]['fecha_insercion	'] = $sheets['cells'][$i][22];
                $data_excel[$i - 1]['fecha_modificacion'] = $sheets['cells'][$i][23];
                $data_excel[$i - 1]['id'] = $sheets['cells'][$i][24];
            }

            $this->db->insert_batch('maquinaria', $data_excel);
            // @unlink($data['full_path']);
            redirect('master');
        }
    }

}

/* End of file Excel_import.php */
/* Location: ./application/controllers/Excel_import.php */