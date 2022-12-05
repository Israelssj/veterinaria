<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascota extends CI_Controller {

    //function for start the contruct: load helper and model
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mascotaM');

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }

    //function for load of views template them and home
    //first page or view home when load web application
    public function index()
    {
    	//$this->load->view('welcome_message');
        $this->load->view("theme/head");
        $this->load->view("mascota/home");
        $this->load->view("theme/footer");
    }

    //function for load of views template them and create
    //page or view for input register data the employees
    public function create(){
    	$this->load->view("theme/head");
        $this->load->view("mascota/create");
        $this->load->view("theme/footer");
    }

    //function post for process create the registers of employees
    public function create_post(){
        $tipoAnimal = $this->input->post('tipoAnimal');
        $nombre = $this->input->post('nombre');
        $raza = $this->input->post('raza');
        $tamanio = $this->input->post('tamanio');
        $age = $this->input->post('age');
        $tipoPelo = $this->input->post('tipoPelo');
        $edadEnAnios = $this->input->post('edadEnAnios');

        // invocate model and method create
        $res = $this->mascotaM->create($tipoAnimal,$nombre,$raza,$tamanio,$age,$tipoPelo,$edadEnAnios);

        // start validate
		if($res == "success"){
			redirect(site_url('CitasC/show'));// ok, invocate function read (list)
		}else{
			redirect(site_url('mascota/create_failed')); //error: invocate function create_failed()
		}
    }

    //function about message of error control for create
    public function create_failed(){
        echo "Error al registrar";
    }
    
    //function for list the data of employees after finalized the process of create the registers
    public function read(){
        $data['res_id'] = $this->mascotaM->read();
        $this->load->view("theme/head");
        $this->load->view('mascota/view',$data);
        $this->load->view("theme/footer");
    }

    //function for load the data of employee according to idMascota
    public function update($idMascota){
        $data['crud_data'] = $this->mascotaM->get_record_byID($idMascota);
        if(!empty($data['crud_data'])){
            $this->load->view("theme/head");
            $this->load->view('mascota/update',$data);
            $this->load->view("theme/footer");
        }else{
            redirect(site_url());
        }
    }

    //function post for process update the registers of employees
    public function update_post(){
		$tipoAnimal = $this->input->post('tipoAnimal');
		$nombre = $this->input->post('nombre');
		$raza = $this->input->post('raza');
		$tamanio = $this->input->post('tamanio');
		$age = $this->input->post('age');
        $tipoPelo = $this->input->post('tipoPelo');
        $edadEnAnios = $this->input->post('edadEnAnios');
		$idMascota = $this->input->post('idMascota');

        // invocate model and method update
		$res = $this->mascotaM->update($tipoAnimal,$nombre,$raza,$tamanio,$age,$tipoPelo,$edadEnAnios,$idMascota);
		if($res == "success"){
            redirect(site_url('CitasVC/show'));// ok, invocate function read (list)			
		}else{
			redirect(site_url('mascota/update_failed'));//error: invocate function update_failed()
		}
	}

    //function about message of error control for update
    public function update_failed(){
        echo "Error al actualizar";
    }       

    public function delete($idMascota){
        // invocate model and method delete
        $res = $this->mascotaM->delete($idMascota);
        if($res == "success"){
            redirect(site_url('mascota/read'));// ok, invocate function read (list)
        }else{
            redirect(site_url('mascota/delete_failed'));//error: invocate function delete_failed()
        }
    }

    //function about message of error control for delete
    public function delete_failed(){
        echo "Error al eliminar";
    }
}