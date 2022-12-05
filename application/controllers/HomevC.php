<?php 
class HomevC extends CI_Controller 
{

    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('Logeado')){
            redirect(base_url());
        }
    }
    
    public function show(){
        $this->load->view('homev/HomePag.php');
    }
}?>