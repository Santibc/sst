<?php
    $this->load->view("cabecera");
?>

 
    <div class="row">
        <form>
            <div class="form-group">
                <label for="inputUsername">Correo</label>
                    <input type="text" class="form-control" id="inputUsername" name="inputUsername" aria-describedby="emailHelp" placeholder="Username">
                        <small id="emailHelp" class="form-text text-muted">Correo completo</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
            </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
<?php
    $this->load->view("pie_pagina");