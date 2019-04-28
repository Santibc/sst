<?php
    $this->load->view("cabecera");
?>
            <div class="row">
                <div class="col-6">
                    <form action="<?= base_url()?>index.php/usuarios/insertar_usuario" method="post">
                        <div class="form-group">
                            <label>Cedula:</label>
                            <input type="number" name="cedula" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" name="NombreUsuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Correo:</label>
                            <input type="text" name="Correo" class="form-control">
                        </div>    
                         <div class="form-group">
                            <label>Celular:</label>
                            <input type="number" name="celular" class="form-control">
                        </div>
                         <div class="form-group">                                                         
                            <label>Ciudad:</label>
                            <select name="idCiudadU" class="form-control">
                                <?php                                
                                foreach ($ciudades as $ciudad){
                                ?>
                                <option value="<?=$ciudad->idCiudad?>"><?=$ciudad->NombreCiudad;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                         <div class="form-group">
                             <label>Cargo:</label>
                           <select name="idCargoU" class="form-control">
                                <?php                                
                                foreach ($cargos as $cargo){
                                ?>
                                <option value="<?=$cargo->idCargo?>"><?=$cargo->NombreCargo;?></option>
                                <?php
                                }
                                ?>
                            </select> 
                        </div>
                        <button type="submit" class="btn btn-dark">Crear</button>
                    </form>
                </div>
                <div class="col-6">
                    <?php if(isset($error)){?>
                    <h1> Error: <?=$error;?></h1>
                    <?php
                    } 
                    ?>
                </div>
            </div>
<?php
    $this->load->view("pie_pagina");