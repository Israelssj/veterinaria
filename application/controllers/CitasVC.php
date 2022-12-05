<?php 
class CitasVC extends CI_Controller 
{
    public function show(){
        $this->load->model('CitasVM');
        $data['citas'] = $this->CitasVM->getCitas();

        $this->load->view('headersV/head.php');
        $this->load->view('headersV/menu.php');
        $this->load->view('citasV/verCitas.php',$data);
        $this->load->view('headersV/footer.php');
    }
    
}?>