<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    public function __construct() {
        parent::__construct();
        $this->load->model("usuarios_model");
        $this->load->model("ciudades_model");
        $this->load->model("cargos_model");
    }


    public function index()
    {
        $datos['usuarios'] = $this->usuarios_model->traer_usuarios();
        $this->load->view('usuarios/tabla_usuarios',$datos);
    }
    
    public function crear_usuario(){
        $datos['ciudades']= $this->ciudades_model->traer_ciudades();
        $datos['cargos']= $this->cargos_model->traer_cargos();
        $this->load->view('usuarios/formulario_usuarios',$datos);
        
    }
    
    public function insertar_usuario(){
        $usuario= $this->input->post();
        /*$datos['NombreUsuario']= $this->input->post('NombreUsuario');
        $datos['Correo']= $this->input->post('Correo');
        $datos['celular']= $this->input->post('celular');
        $datos['idCiudadU']= $this->input->post('idCiudad');
        $datos['idCargoU']= $this->input->post('idCargo');*/
        
        $estado=$this->usuarios_model->insertar_usuario($usuario);
        if($estado=true){
            $this->index();
        }else{
            $datos['error'] = "No se pudo insertar el usuario";
            $this->load->view('usuarios/formulario_usuarios',$datos);
        }
    }
    
}
