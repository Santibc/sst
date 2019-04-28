<?php

class Usuarios_model extends CI_Model {

    public function traer_usuarios()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->join('cargo', 'cargo.idCargo = usuario.idCargoU');//Cargo es nombre tabla y relacionar primero tabla luego foranea
        $this->db->join('ciudad', 'ciudad.idCiudad = usuario.idCiudadU'); 
        $query = $this->db->get();
        return $query->result();
    }

    public function insertar_usuario($usuario)
    {
        $this->db->insert('usuario', $usuario);
        if($this->db->affected_rows()>0){
            return true;
        }
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}