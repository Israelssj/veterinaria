<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motivo extends CI_Controller {

    //function for start the contruct: load helper and model
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('motivoM');

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }

    //function for load of views template them and home
    //tipo page or view home when load web application
    public function index()
    {
    	//$this->load->view('welcome_message');
        $this->load->view("theme/head");
        $this->load->view("motivo/home");
        $this->load->view("theme/footer");
    }

    //function for load of views template them and create
    //page or view for input register data the employees
    public function create(){
    	$this->load->view("theme/head");
        $this->load->view("motivo/create");
        $this->load->view("theme/footer");
    }

    //function post for process create the registers of employees
    public function create_post(){
        $tipo = $this->input->post('tipo');
        $descripcion = $this->input->post('descripcion');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');
        $dia = $this->input->post('dia');
        $hora = $this->input->post('hora');

        // invocate model and method create
        $res = $this->motivoM->create($tipo,$descripcion,$email,$gender,$age,$dia,$hora);

        // start validate
		if($res == "success"){
			redirect(site_url('CitasC/show'));// ok, invocate function read (list)
		}else{
			redirect(site_url('motivo/create_failed')); //error: invocate function create_failed()
		}
    }

    //function about message of error control for create
    public function create_failed(){
        echo "Error al registrar";
    }
    
    //function for list the data of employees after finalized the process of create the registers
    public function read(){
        $data['res_id'] = $this->motivoM->read();
        $this->load->view("theme/head");
        $this->load->view('motivo/view',$data);
        $this->load->view("theme/footer");
    }

    //function for load the data of employee according to idMotivo
    public function update($idMotivo){
        $data['motivo_data'] = $this->motivoM->get_record_byID($idMotivo);
        if(!empty($data['motivo_data'])){
            $this->load->view("theme/head");
            $this->load->view('motivo/update',$data);
            $this->load->view("theme/footer");
        }else{
            redirect(site_url());
        }
    }

    //function post for process update the registers of employees
    public function update_post(){
		$tipo = $this->input->post('tipo');
		$descripcion = $this->input->post('descripcion');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
        $dia = $this->input->post('dia');
		$hora = $this->input->post('hora');
		$idMotivo = $this->input->post('idMotivo');

        // invocate model and method update
		$res = $this->motivoM->update($tipo,$descripcion,$email,$gender,$age,$dia,$hora,$idMotivo);
		if($res == "success"){
            redirect(site_url('CitasVC/show'));// ok, invocate function read (list)			
		}else{
			redirect(site_url('motivo/update_failed'));//error: invocate function update_failed()
		}
	}

    //function about message of error control for update
    public function update_failed(){
        echo "Error al actualizar";
    }       

    public function delete($idMotivo){
        // invocate model and method delete
        $res = $this->motivoM->delete($idMotivo);
        if($res == "success"){
            redirect(site_url('motivo/read'));// ok, invocate function read (list)
        }else{
            redirect(site_url('motivo/delete_failed'));//error: invocate function delete_failed()
        }
    }

    //function about message of error control for delete
    public function delete_failed(){
        echo "Error al eliminar";
    }
}