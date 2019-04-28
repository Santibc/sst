<?php

class Cargos_model extends CI_Model {
    
    public function traer_cargos(){
        $query= $this->db->get('cargo');
        return $query->result();
    }
         public function insertar_cargos($cargos){
        $this->db->insert('cargo', $cargos);
        if($this->db->affected_rows()>0){
            return true;
        }
    }
}