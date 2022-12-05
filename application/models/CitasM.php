<?php 
class CitasM extends CI_Model 
{
    function getCitas(){
        $query = $this->db->get('citas');
        return $query->result();
    }
}
?>