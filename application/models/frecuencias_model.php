<?php

class frecuencias_model extends CI_Model {
    
    public function traer_frecuencias(){
        $query= $this->db->get('frecuencia');
        return $query->result();
    }
        public function insertar_frecuencias($frecuencias){
        $this->db->insert('frecuencia', $frecuencias);
        if($this->db->affected_rows()>0){
            return true;
        }
    }
}