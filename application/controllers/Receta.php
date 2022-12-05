<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receta extends CI_Controller {

    //function for start the contruct: load helper and model
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('recetaM');
    }

    //function for load of views template them and home
    //nombre page or view home when load web application
    public function index()
    {
    	//$this->load->view('welcome_message');
        $this->load->view("theme/head");
        $this->load->view("receta/home");
        $this->load->view("theme/footer");
    }

    //function for load of views template them and create
    //page or view for input register data the recetas
    public function create(){
    	$this->load->view("theme/head");
        $this->load->view("receta/create");
        $this->load->view("theme/footer");
    }

    //function post for process create the registers of recetas
    public function create_post(){
        $nombre = $this->input->post('nombre');
        $last_name = $this->input->post('lname');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');
        $descripcion = $this->input->post('descripcion');
        $recetas = $this->input->post('recetas');

        // invocate model and method create
        $res = $this->recetaM->create($nombre,$last_name,$email,$gender,$age,$descripcion,$recetas);

        // start validate
		if($res == "success"){
			redirect(site_url('receta/read'));// ok, invocate function read (list)
		}else{
			redirect(site_url('receta/create_failed')); //error: invocate function create_failed()
		}
    }

    //function about message of error control for create
    public function create_failed(){
        echo "Error al registrar";
    }
    
    //function for list the data of recetas after finalized the process of create the registers
    public function read(){
        $data['res_id'] = $this->recetaM->read();
        $this->load->view("theme/head");
        $this->load->view('receta/view',$data);
        $this->load->view("theme/footer");
    }

    //function for load the data of receta according to idReceta
    public function update($idReceta){
        $data['receta_data'] = $this->recetaM->get_record_byID($idReceta);
        if(!empty($data['receta_data'])){
            $this->load->view("theme/head");
            $this->load->view('receta/update',$data);
            $this->load->view("theme/footer");
        }else{
            redirect(site_url());
        }
    }

    //function post for process update the registers of recetas
    public function update_post(){
		$nombre = $this->input->post('nombre');
		$last_name = $this->input->post('lname');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$idReceta = $this->input->post('idReceta');
        $descripcion = $this->input->post('descripcion');
        $recetas = $this->input->post('recetas');

        // invocate model and method update
		$res = $this->recetaM->update($nombre,$last_name,$email,$gender,$age,$idReceta,$descripcion,$recetas);
		if($res == "success"){
            redirect(site_url('receta/read'));// ok, invocate function read (list)			
		}else{
			redirect(site_url('receta/update_failed'));//error: invocate function update_failed()
		}
	}

    //function about message of error control for update
    public function update_failed(){
        echo "Error al actualizar";
    }       

    public function delete($idReceta){
        // invocate model and method delete
        $res = $this->recetaM->delete($idReceta);
        if($res == "success"){
            redirect(site_url('receta/read'));// ok, invocate function read (list)
        }else{
            redirect(site_url('receta/delete_failed'));//error: invocate function delete_failed()
        }
    }

    //function about message of error control for delete
    public function delete_failed(){
        echo "Error al eliminar";
    }
}