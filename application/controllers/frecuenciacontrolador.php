<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class frecuenciacontrolador extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model("frecuencias_model");
      
    }


    public function index()
    {
        $datos['frecuencias'] = $this->frecuencias_model->traer_frecuencias();
        $this->load->view('frecuenciavista/frecuencias',$datos);
    }
    

    
    public function insertar_frecuencia(){
        $frecuencias= $this->input->post();
        /*$datos['NombreUsuario']= $this->input->post('NombreUsuario');
        $datos['Correo']= $this->input->post('Correo');
        $datos['celular']= $this->input->post('celular');
        $datos['idCiudadU']= $this->input->post('idCiudad');
        $datos['idCargoU']= $this->input->post('idCargo');*/
        
        $estado=$this->frecuencias_model->insertar_frecuencias($frecuencias);
        if($estado=true){
            $this->index();
        }else{
            $datos['error'] = "No se pudo insertar el usuario";
            $this->load->view('usuarios/formulario_usuarios',$datos);
        }
    }
    
}