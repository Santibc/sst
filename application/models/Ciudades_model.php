<?php

class Ciudades_model extends CI_Model {
    
    public function traer_ciudades(){
        $query= $this->db->get('ciudad');
        return $query->result();
    }
        public function insertar_ciudades($ciudades){
        $this->db->insert('ciudad', $ciudades);
        if($this->db->affected_rows()>0){
            return true;
        }
    }
}