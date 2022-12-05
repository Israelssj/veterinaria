<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    //function for start the contruct: load helper and model
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('crud_model');

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
        $this->load->view("crud/home");
        $this->load->view("theme/footer");
    }

    //function for load of views template them and create
    //page or view for input register data the employees
    public function create(){
    	$this->load->view("theme/head");
        $this->load->view("crud/create");
        $this->load->view("theme/footer");
    }

    //function post for process create the registers of employees
    public function create_post(){
        $first_name = $this->input->post('fname');
        $last_name = $this->input->post('lname');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');
        $numTelefono = $this->input->post('numTelefono');
        $direccion = $this->input->post('direccion');

        // invocate model and method create
        $res = $this->crud_model->create($first_name,$last_name,$email,$gender,$age,$numTelefono,$direccion);

        // start validate
		if($res == "success"){
			redirect(site_url('CitasC/show'));// ok, invocate function read (list)
		}else{
			redirect(site_url('crud/create_failed')); //error: invocate function create_failed()
		}
    }

    //function about message of error control for create
    public function create_failed(){
        echo "Error al registrar";
    }
    
    //function for list the data of employees after finalized the process of create the registers
    public function read(){
        $data['res_id'] = $this->crud_model->read();
        $this->load->view("theme/head");
        $this->load->view('crud/view',$data);
        $this->load->view("theme/footer");
    }

    //function for load the data of duenio according to idDuenio
    public function update($idDuenio){
        $data['crud_data'] = $this->crud_model->get_record_byID($idDuenio);
        if(!empty($data['crud_data'])){
            $this->load->view("theme/head");
            $this->load->view('crud/update',$data);
            $this->load->view("theme/footer");
        }else{
            redirect(site_url());
        }
    }

    //function post for process update the registers of employees
    public function update_post(){
		$first_name = $this->input->post('fname');
		$last_name = $this->input->post('lname');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
        $numTelefono = $this->input->post('numTelefono');
		$direccion = $this->input->post('direccion');
		$idDuenio = $this->input->post('idDuenio');

        // invocate model and method update
		$res = $this->crud_model->update($first_name,$last_name,$email,$gender,$age,$numTelefono,$direccion,$idDuenio);
		if($res == "success"){
            redirect(site_url('CitasVC/show'));// ok, invocate function read (list)			
		}else{
			redirect(site_url('crud/update_failed'));//error: invocate function update_failed()
		}
	}

    //function about message of error control for update
    public function update_failed(){
        echo "Error al actualizar";
    }       

    public function delete($idDuenio){
        // invocate model and method delete
        $res = $this->crud_model->delete($idDuenio);
        if($res == "success"){
            redirect(site_url('crud/read'));// ok, invocate function read (list)
        }else{
            redirect(site_url('crud/delete_failed'));//error: invocate function delete_failed()
        }
    }

    //function about message of error control for delete
    public function delete_failed(){
        echo "Error al eliminar";
    }
}