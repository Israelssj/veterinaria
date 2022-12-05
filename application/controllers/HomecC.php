<?php 
class HomecC extends CI_Controller 
{

    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('Logeado')){
            redirect(base_url('http://localhost/veterinaria/index.php/usuario/login'));
        }
    }

    public function show(){
        $this->load->view('homec/HomePag.php');
    }
}?>