<?php

class motivoM extends CI_Model{
	/* Constuct access database */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    /* Function: insert (create) data on the table datosmotivo */
    public function create($tipo,$descripcion,$email,$gender,$age,$dia,$hora){
        $query = $this->db->query("insert into datosmotivo (tipo,descripcion,gender,age,dia,hora,email_id) 
                                    values('$tipo','$descripcion','$gender','$age','$dia','$hora','$email')");
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }
    /* Function: select (read) all row or data from table datosmotivo */
    public function read(){ 
        $query = $this->db->query("SELECT case e.gender 
                                    WHEN 'm' THEN 'Masculino' 
                                    WHEN 'f' THEN 'Femenino' 
                                    END as gend, e.* FROM datosmotivo e;");
        return $query;
    }
    /* Function: select (get_record_byID) record by datosmotivo idMotivo from table datosmotivo */
    public function get_record_byID($idMotivo){
        $query = $this->db->query("select * from datosmotivo where idMotivo='$idMotivo'");
        return $query->row();
    }

    /* Funtion: update record by datosmotivo idMotivo from table datosmotivo */
    public function update($tipo,$descripcion,$email,$gender,$age,$dia,$hora,$idMotivo){
		$query = $this->db->query("UPDATE `datosmotivo` SET tipo='$tipo', descripcion='$descripcion',
                                            email_id='$email', gender='$gender', age=$age, dia='$dia', hora='$hora' WHERE idMotivo=$idMotivo");
	
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
    /* Funtion: delete row by datosmotivo idMotivo */
    public function delete($idMotivo){
        $query = $this->db->query("delete from datosmotivo where idMotivo ='$idMotivo'");
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

}