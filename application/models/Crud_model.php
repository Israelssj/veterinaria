<?php

class Crud_model extends CI_Model{
	/* Constuct access database */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    
    public function create($first,$last,$email,$gender,$age,$numTelefono,$direccion){
        $query = $this->db->query("insert into duenio (first_name,last_name,gender,age,email_id,numTelefono,direccion) 
                                    values('$first','$last','$gender','$age','$email','$numTelefono','$direccion')");
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }
       public function read(){ 
        $query = $this->db->query("SELECT case e.gender 
                                    WHEN 'm' THEN 'Masculino' 
                                    WHEN 'f' THEN 'Femenino' 
                                    END as gend, e.* FROM duenio e;");
        return $query;
    }
    
    public function get_record_byID($idDuenio){
        $query = $this->db->query("select * from duenio where idDuenio='$idDuenio'");
        return $query->row();
    }

    
    public function update($first,$last,$email,$gender,$age,$numTelefono,$direccion,$idDuenio){
		$query = $this->db->query("UPDATE `duenio` SET first_name='$first', last_name='$last',
                                            email_id='$email', gender='$gender', age=$age, numTelefono='$numTelefono', 
                                            direccion='$direccion' WHERE idDuenio=$idDuenio");
	
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
    
    public function delete($idDuenio){
        $query = $this->db->query("delete from duenio where idDuenio ='$idDuenio'");
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

}