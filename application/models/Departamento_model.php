<?php

class Departamento_model extends CI_Model {

    public function traer_departamentos()
    {
        $this->db->select('*');
        $this->db->from('departamento');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertar_departamentos($departamento)
    {
        $this->db->insert('departamento', $departamento);
        if($this->db->affected_rows()>0){
            return true;
        }
    }
}