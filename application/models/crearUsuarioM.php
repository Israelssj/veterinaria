<?php

class crearUsuarioM extends CI_Model{
	/* Constuct access database */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    /* Function: insert (create) data on the table usuario */
    public function create($first,$last,$email,$gender,$age,$pass){
        $query = $this->db->query("insert into usuario (perfil,last_name,gender,age,email_id,pass) 
                                    values('$first','$last','$gender','$age','$email','$pass')");
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }
    /* Function: select (read) all row or data from table usuario */
    public function read(){ 
        $query = $this->db->query("SELECT case e.gender 
                                    WHEN 'm' THEN 'Masculino' 
                                    WHEN 'f' THEN 'Femenino' 
                                    END as gend, e.* FROM usuario e;");
        return $query;
    }
    /* Function: select (get_record_byID) record by usuario idUsuario from table usuario */
    public function get_record_byID($idUsuario){
        $query = $this->db->query("select * from usuario where idUsuario='$idUsuario'");
        return $query->row();
    }

    /* Funtion: update record by usuario idUsuario from table usuario */
    public function update($first,$last,$email,$gender,$age,$idUsuario,$pass){
		$query = $this->db->query("UPDATE `usuario` SET perfil='$first', last_name='$last',
                                            email_id='$email', gender='$gender', pass='$pass' age=$age WHERE idUsuario=$idUsuario");
	
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
    /* Funtion: delete row by usuario idUsuario */
    public function delete($idUsuario){
        $query = $this->db->query("delete from usuario where idUsuario ='$idUsuario'");
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

}	