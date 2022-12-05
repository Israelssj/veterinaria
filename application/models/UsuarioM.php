<?php  
/**
<?php  
/**
 * 
 */
class UsuarioM extends CI_Model
{
	
	function validaUsuario($email_id, $pass){
		$sql="Select idUsuario, email_id, perfil from Usuario where email_id = '$email_id' and pass = '$pass'";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();
		return $query->result();
	}
}?>