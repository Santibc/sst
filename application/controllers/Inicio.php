<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    
    public function index()
    {
        $this->load->view('inicio/inicio');
    }
    
    public function saludar(){        
        $variable1 = 200;
        $variable2 = 500;
        $resultado = $variable1+$variable2;
        $datos['resultado']=$resultado;
        $datos['saludos']=4;
        $this->load->view("inicio/saludo", $datos);
    }
}
