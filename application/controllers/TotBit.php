<?php



Class TotBit extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        //para que tenga el mismo header
        $this->load->model("TotBit/TotBitModelo");
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('TotBit/TotBitModelo');
        $data['title'] = "Robuspack";


        $data = $this->session->userdata;
        
        
        
        
        
        
        
        
        
        
        
            
	$this->load->library('user_agent');
        $browser = $this->agent->browser();
        $os = $this->agent->platform();
        $getip = $this->input->ip_address();
        
        $result = $this->User_model->getAllSettings();
        $stLe = $result->site_title;
        date_default_timezone_set("America/Mexico_City");
	$tz = $result->timezone;
	    
	$now = new DateTime();
        $now->setTimezone(new DateTimezone($tz));
        $dTod =  $now->format('Y-m-d');
        $dTim =  $now->format('H:i:s');
        
        $this->load->helper('cookie');
        $keyid = rand(1,9000);
        $scSh = sha1($keyid);
        $neMSC = md5($data["email"]);
        $setLogin = array(
            'name'   => $neMSC,
            'value'  => $scSh,
            'expire' => strtotime("+2 year"),
        );
     
	    
        
            $this->load->library("email");
            $this->load->library('sendmail');
            $bUrl = base_url();
            $message = $this->sendmail->secureMail($data['first_name'],$data['last_name'],$data['email'],$dTod,$dTim,$stLe,$browser,$os,$getip,$bUrl);
            $to_email = 'saulaaronmoctezuma@hotmail.com';
            $this->email->from($this->config->item('register'), 'New sign-in! from '.$browser.'');
            $this->email->to($to_email);
            $this->email->subject('New sign-in! from '.$browser.'');
            $this->email->message($message);
            $this->email->set_mailtype("html");
            $this->email->send();
            
            $this->input->set_cookie($setLogin, TRUE);
            redirect(site_url().'main/');
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['maximominimo'] = $this->TotBitModelo->query();
            $data['totalRegistroBitacoraCarlos'] = $this->TotBitModelo->totalRegistroBitacoraCarlos(1);
            $data['totalRegistroBitacoraAldo'] = $this->TotBitModelo->totalRegistroBitacoraAldo(1);
            $data['totalRegistroBitacoraElvira'] = $this->TotBitModelo->totalRegistroBitacoraElvira(1);
            $data['totalRegistroBitacoraOrlene'] = $this->TotBitModelo->totalRegistroBitacoraOrlene(1);
            $this->load->view('TotBit/listarTotBit', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['maximominimo'] = $this->TotBitModelo->query();
            $data['totalRegistroBitacoraCarlos'] = $this->TotBitModelo->totalRegistroBitacoraCarlos(1);
            $data['totalRegistroBitacoraAldo'] = $this->TotBitModelo->totalRegistroBitacoraAldo(1);
            $data['totalRegistroBitacoraElvira'] = $this->TotBitModelo->totalRegistroBitacoraElvira(1);
            $data['totalRegistroBitacoraOrlene'] = $this->TotBitModelo->totalRegistroBitacoraOrlene(1);
            $this->load->view('TotBit/listarTotBit', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['maximominimo'] = $this->TotBitModelo->query();
            $data['totalRegistroBitacoraCarlos'] = $this->TotBitModelo->totalRegistroBitacoraCarlos(1);
            $data['totalRegistroBitacoraAldo'] = $this->TotBitModelo->totalRegistroBitacoraAldo(1);
            $data['totalRegistroBitacoraElvira'] = $this->TotBitModelo->totalRegistroBitacoraElvira(1);
            $data['totalRegistroBitacoraOrlene'] = $this->TotBitModelo->totalRegistroBitacoraOrlene(1);
            $this->load->view('TotBit/listarTotBit', $data);
            $this->load->view('footer');
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    

  
    

}
