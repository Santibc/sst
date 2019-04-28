<?php
    $this->load->view("cabecera");
?>
<h2>Crear ciudades:</h2>
            <div class="row">
                <div class="col-6">
                    <form action="<?= base_url()?>index.php/ciudadcontrolador/insertar_ciudad" method="post">
                      
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" name="NombreCiudad" class="form-control">
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
            <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
      
            <th>Ciudades existentes</th>

        </thead>
        <tbody>
            <?php
            foreach ($ciudades as $ciudad){
            ?>
            <tr>
            
                <td><?= $ciudad->NombreCiudad ?></td>
               
            </tr>           
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>

<?php
    $this->load->view("pie_pagina");