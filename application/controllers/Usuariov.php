<?php  
/**
 * 
 */
class Usuariov extends CI_Controller
{
	public function login()
	{

	$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('Correo', 'Correo', 'required');
	$this->form_validation->set_rules('Pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('headers/head');
				$this->load->view('usuariov/loginv');
        }
        else
        {
                $this->load->model('UsuariovM');
                $usuariov = $this->UsuariovM->validaUsuariov($this->input->post('Correo'), 
                md5($this->input->post('Pass')));
                //if($usuariov[0]->Perfil==1){
                if(count($usuariov)>0){
                        $newdata = array(
                                'Correo'  => $this->input->post('Correo'),
                                'Perfil'     => $usuariov[0]->Perfil,
                                'Logeado' => TRUE
                        );

                        $this->session->set_userdata($newdata);
                       redirect(base_url('index.php/HomevC/show'),'refresh'); 
                }
                //
        }
	}
}?>