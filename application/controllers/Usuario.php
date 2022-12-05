<?php  
/**
 * 
 */
class Usuario extends CI_Controller
{
	public function login()
	{

	$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email_id', 'email_id', 'required');
	$this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('headers/head');
				$this->load->view('usuario/login');
        }
        else
        {
                $this->load->model('UsuarioM');
                $usuario = $this->UsuarioM->validaUsuario($this->input->post('email_id'), md5($this->input->post('pass')));
                if($usuario[0]->perfil==1){
                        $newdata = array(
                                'email_id'  => $this->input->post('email_id'),
                                'perfil'     => 1,
                                'Logeado' => TRUE
                        );

                        $this->session->set_userdata($newdata);
                       redirect(base_url('index.php/HomecC/show'),'refresh'); 
                }
                else{
                        redirect('http://localhost/veterinaria/index.php/HomevC/show');
                }
                
        }
	}
}?>