<?php 
class CitasC extends CI_Controller 
{
    public function show(){
        $this->load->model('CitasM');
        $data['citas'] = $this->CitasM->getCitas();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('citas/crearCitas.php',$data);
        $this->load->view('headers/footer.php');
    }
    public function getCitas($IdDuenio){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }
}?>