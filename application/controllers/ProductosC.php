<?php  
/**
 * 
 */
class ProductosC extends CI_Controller
{
	public function show(){
		$this->load->model('ProductosM');
		$data['productos'] = $this->ProductosM->getProductos();
		$this->load->view('headers/head.php');
		$this->load->view('headers/menu.php');
		$this->load->view('productos/listaProductos.php',$data);
        $this->load->view('headers/footer.php');
		
	}
	public function showU(){
		$this->load->model('ProductosM');
		$data['productos'] = $this->ProductosM->getProductos();
		$this->load->view('headers/head.php');
		$this->load->view('headers/menuU.php');
		$this->load->view('productos/listaProductosU.php',$data);
        $this->load->view('headers/footer.php');
		
	}

	public function detalleProducto($idProducto){
		$this->load->model('ProductosM');
		$data['producto'] = $this->ProductosM->getProducto($idProducto);
		$this->load->view('headers/head.php');
		$this->load->view('headers/menu.php');
		$this->load->view('productos/detalleProducto.php',$data);
		$this->load->view('headers/footer.php');
	}

	public function borrarProducto($idProducto){
	    $this->load->model('ProductosM');
	    $this->ProductosM->deleteProducto($idProducto);
		redirect(base_url('index.php/ProductosC/show'),'refresh');
	}

	public function insertProducto(){
		$this->load->model('ProductosM');
		$data['productos'] = $this->ProductosM->getProductos();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
    	if ($this->form_validation->run() == FALSE)
            {	
            	$this->load->view('headers/head.php');
				$this->load->view('headers/menu.php');
                $this->load->view('productos/insertarProducto',$data);
                $this->load->view('headers/footer.php');
            }
            else
            {
               $this->ProductosM->insertProducto();
               redirect(base_url('index.php/ProductosC/show'),'refresh');
            }
	}


	public function updateProducto($idProducto){
		$this->load->model('ProductosM');
		$data['producto'] = $this->ProductosM->getProducto($idProducto);
        $this->load->view('headers/head.php');
	    $this->load->view('headers/menu.php');
        $this->load->view('productos/updateProducto',$data);
        $this->load->view('headers/footer.php');
        $this->ProductosM->updateProducto($idProducto);
    }

	public function getProducto($idProducto){
		$this->load->view('headers/head.php');
		$this->load->view('headers/menu.php');
		$this->load->view('headers/menuU.php');
		$this->load->view('headers/footer.php');
	}
}?>