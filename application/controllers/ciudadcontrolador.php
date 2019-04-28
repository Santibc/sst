<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ciudadcontrolador extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model("ciudades_model");
      
    }


    public function index()
    {
        $datos['ciudades'] = $this->ciudades_model->traer_ciudades();
        $this->load->view('ciudadvista/ciudades',$datos);
    }
    

    
    public function insertar_ciudad(){
        $ciudad= $this->input->post();
        /*$datos['NombreUsuario']= $this->input->post('NombreUsuario');
        $datos['Correo']= $this->input->post('Correo');
        $datos['celular']= $this->input->post('celular');
        $datos['idCiudadU']= $this->input->post('idCiudad');
        $datos['idCargoU']= $this->input->post('idCargo');*/
        
        $estado=$this->ciudades_model->insertar_ciudades($ciudad);
        if($estado=true){
            $this->index();
        }else{
            $datos['error'] = "No se pudo insertar el usuario";
            $this->load->view('usuarios/formulario_usuarios',$datos);
        }
    }
    
}