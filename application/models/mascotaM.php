<?php

class mascotaM extends CI_Model{
	/* Constuct access database */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    /* Function: insert (create) data on the table datosmascota */
    public function create($tipoAnimal,$nombre,$raza,$tamanio,$age,$tipoPelo,$edadEnAnios){
        $query = $this->db->query("insert into datosmascota (tipoAnimal,nombre,tamanio,age,raza,tipoPelo,edadEnAnios) 
                                    values('$tipoAnimal','$nombre','$tamanio','$age','$raza','$tipoPelo','$edadEnAnios')");
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }
    /* Function: select (read) all row or data from table datosmascota */
    public function read(){ 
        $query = $this->db->query("SELECT case e.tamanio 
                                    WHEN 'm' THEN 'Masculino' 
                                    WHEN 'f' THEN 'Femenino' 
                                    END as gend, e.* FROM datosmascota e;");
        return $query;
    }
    /* Function: select (get_record_byID) record by datosmascota idMascota from table datosmascota */
    public function get_record_byID($idMascota){
        $query = $this->db->query("select * from datosmascota where idMascota='$idMascota'");
        return $query->row();
    }

    /* Funtion: update record by datosmascota idMascota from table datosmascota */
    public function update($tipoAnimal,$nombre,$raza,$tamanio,$age,$tipoPelo,$edadEnAnios,$idMascota){
		$query = $this->db->query("UPDATE `datosmascota` SET tipoAnimal='$tipoAnimal', nombre='$nombre',
                                            raza='$raza', tamanio='$tamanio', age=$age, tipoPelo='$tipoPelo', edadEnAnios='$edadEnAnios' WHERE idMascota=$idMascota");
	
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
    /* Funtion: delete row by datosmascota idMascota */
    public function delete($idMascota){
        $query = $this->db->query("delete from datosmascota where idMascota ='$idMascota'");
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

}