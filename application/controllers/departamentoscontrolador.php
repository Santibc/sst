<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departamentoscontrolador extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model("departamento_model");
      
    }


    public function index()
    {
        $datos['departamentos'] = $this->departamento_model->traer_departamentos();
        $this->load->view('departamentovista/departamentos',$datos);
    }
    

    
    public function insertar_departamento(){
        $departamento= $this->input->post();
        /*$datos['NombreUsuario']= $this->input->post('NombreUsuario');
        $datos['Correo']= $this->input->post('Correo');
        $datos['celular']= $this->input->post('celular');
        $datos['idCiudadU']= $this->input->post('idCiudad');
        $datos['idCargoU']= $this->input->post('idCargo');*/
        
        $estado=$this->departamento_model->insertar_departamentos($departamento);
        if($estado=true){
            $this->index();
        }else{
            $datos['error'] = "No se pudo insertar el usuario";
            $this->load->view('usuarios/formulario_usuarios',$datos);
        }
    }
    
}
