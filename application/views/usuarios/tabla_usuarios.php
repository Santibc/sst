<?php
    $this->load->view("cabecera");
?>
    <br>
    <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Cargo</th>
            <th>Ciudad</th>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $usuario){
            ?>
            <tr>
                <td><?= $usuario->Cedula ?></td>
                <td><?= $usuario->NombreUsuario ?></td>
                <td><?= $usuario->correo ?></td>
                <td><?= $usuario->celular ?></td>
                <td><?= $usuario->NombreCiudad ?></td>
                <td><?= $usuario->NombreCargo ?></td>
            </tr>           
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
<?php
    $this->load->view("pie_pagina");