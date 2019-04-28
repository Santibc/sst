<html>
    <head>
        <title>SST</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">SST Colombia</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="<?= base_url()?>index.php/inicio">Inicio <span class="sr-only">(current)</span></a>
              </li>
                         
               
                           
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>index.php/inicio/saludar">Saludar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>index.php/actividades/index">Actividades</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>index.php/departamentoscontrolador/index">Departamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>index.php/ciudadcontrolador/index">Ciudades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>index.php/frecuenciacontrolador/index">Frecuencias</a>
              </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Usuarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?= base_url()?>index.php/usuarios/index">Ver usuarios</a>
                      <a class="dropdown-item" href="<?= base_url()?>index.php/usuarios/crear_usuario">Crear usuarios</a>
                    </div>
                </li>
                
                 <li class="nav-item">
                  <a class="nav-link" tabindex="-1" href="<?= base_url()?>index.php/login/index">Login</a>
              </li>
     </ul>
             
              
           
          </div>
        </nav>
        <div class="container mt-5">
            
