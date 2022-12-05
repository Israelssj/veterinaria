<?php

class recetaM extends CI_Model{
	/* Constuct access database */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    /* Function: insert (create) data on the table receta */
    public function create($nombre,$last,$email,$gender,$age,$descripcion){
        $query = $this->db->query("insert into receta (nombre,last_name,gender,age,email_id,descripcion,recetas) 
                                    values('$nombre','$last','$gender','$age','$email','$descripcion','$recetas')");
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }
    /* Function: select (read) all row or data from table receta */
    public function read(){ 
        $query = $this->db->query("SELECT case e.gender 
                                    WHEN 'm' THEN 'Masculino' 
                                    WHEN 'f' THEN 'Femenino' 
                                    END as gend, e.* FROM receta e;");
        return $query;
    }
    /* Function: select (get_record_byID) record by receta idReceta from table receta */
    public function get_record_byID($idReceta){
        $query = $this->db->query("select * from receta where idReceta='$idReceta'");
        return $query->row();
    }

    /* Funtion: update record by receta idReceta from table receta */
    public function update($nombre,$last,$email,$gender,$age,$idReceta,$descripcion,$recetas){
		$query = $this->db->query("UPDATE `receta` SET nombre='$nombre', last_name='$last',
                                            email_id='$email', gender='$gender', age=$age, 
                                            descripcion='$descripcion', recetas='$recetas' WHERE idReceta=$idReceta");
	
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
    /* Funtion: delete row by receta idReceta */
    public function delete($idReceta){
        $query = $this->db->query("delete from receta where idReceta ='$idReceta'");
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

}