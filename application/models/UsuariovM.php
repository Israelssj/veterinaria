<?php  
/**
 * 
 */
class UsuariovM extends CI_Model
{
	
	function validaUsuariov($Correo, $Pass){
		$sql="Select IdUsuario, Correo, Perfil from Usuariov where Correo = '$Correo' and Pass = '$Pass'";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();
		return $query->result();
	}
}?>