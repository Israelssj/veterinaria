<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crearUsuario extends CI_Controller {

    //function for start the contruct: load helper and model
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('crearUsuarioM');
    }

    //function for load of views template them and home
    //first page or view home when load web application
    public function index()
    {
    	//$this->load->view('welcome_message');
        $this->load->view("theme/head");
        $this->load->view("crearUsuario/home");
        $this->load->view("theme/footer");
    }

    //function for load of views template them and create
    //page or view for input register data the usuarios
    public function create(){
    	$this->load->view("theme/head");
        $this->load->view("crearUsuario/create");
        $this->load->view("theme/footer");
    }

    //function post for process create the registers of usuarios
    public function create_post(){
        $perfil = $this->input->post('fname');
        $last_name = $this->input->post('lname');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');
        $pass = $this->input->post('pass');
        $pass=md5($_POST["pass"]);

        // invocate model and method create
        $res = $this->crearUsuarioM->create($perfil,$last_name,$email,$gender,$age,$pass);

        // start validate
		if($res == "success"){
			redirect(site_url('usuario/login'));// ok, invocate function read (list)
		}else{
			redirect(site_url('crearUsuario/create_failed')); //error: invocate function create_failed()
		}
    }

    //function about message of error control for create
    public function create_failed(){
        echo "Error al registrar";
    }
    
    //function for list the data of usuarios after finalized the process of create the registers
    public function read(){
        $data['res_id'] = $this->crearUsuarioM->read();
        $this->load->view("theme/head");
        $this->load->view('crearUsuario/view',$data);
        $this->load->view("theme/footer");
    }

    //function for load the data of usuario according to idUsuario
    public function update($idUsuario){
        $data['crearUsuario_data'] = $this->crearUsuarioM->get_record_byID($idUsuario);
        if(!empty($data['crearUsuario_data'])){
            $this->load->view("theme/head");
            $this->load->view('crearUsuario/update',$data);
            $this->load->view("theme/footer");
        }else{
            redirect(site_url());
        }
    }

    //function post for process update the registers of usuarios
    public function update_post(){
		$perfil = $this->input->post('fname');
		$last_name = $this->input->post('lname');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$idUsuario = $this->input->post('idUsuario');
        $pass = $this->input->post('pass');

        // invocate model and method update
		$res = $this->crearUsuarioM->update($perfil,$last_name,$email,$gender,$age,$idUsuario,$pass);
		if($res == "success"){
            redirect(site_url('crearUsuario/read'));// ok, invocate function read (list)			
		}else{
			redirect(site_url('crearUsuario/update_failed'));//error: invocate function update_failed()
		}
	}

    //function about message of error control for update
    public function update_failed(){
        echo "Error al actualizar";
    }       

    public function delete($idUsuario){
        // invocate model and method delete
        $res = $this->crearUsuarioM->delete($idUsuario);
        if($res == "success"){
            redirect(site_url('crearUsuario/read'));// ok, invocate function read (list)
        }else{
            redirect(site_url('crearUsuario/delete_failed'));//error: invocate function delete_failed()
        }
    }

    //function about message of error control for delete
    public function delete_failed(){
        echo "Error al eliminar";
    }
}