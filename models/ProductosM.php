<?php 
/**
  * 
  */
 class ProductosM extends CI_Model
 {
 	
 	function getProductos(){
 		$query = $this->db->get('Productos');
 		return $query->result();
 	}

 	function getProducto($idProducto){
 		$this->db->where('idProducto',$idProducto);
 		$query = $this->db->get('Productos');
 		return $query->result();
 	}

 	function deleteProducto($idProducto){
 		$this->db->where('idProducto', $idProducto);
		$this->db->delete('Productos');
		return TRUE;
 	}

 	function insertProducto(){
		$data = array(
	   'Nombre' => $this->input->post('Nombre'),
	   'Precio' => $this->input->post('Precio'),
	   'Descripcion' =>$this->input->post('Descripcion'),
	   'Stock' =>$this->input->post('Stock')
		);
	   $this->db->insert('Productos', $data);
	}
	
 	function updateProducto($idProducto){
 		$data = array(
        'Nombre' => $this->input->post('Nombre'),
        'Precio' => $this->input->post('Precio'),
        'Descripcion' =>$this->input->post('Descripcion'),
        'Stock' =>$this->input->post('Stock')
		);
 		$this->db->where('idProducto',$idProducto);
		$this->db->update('Productos', $data);
 	}


 } ?>