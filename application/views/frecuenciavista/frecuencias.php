<?php
    $this->load->view("cabecera");
?>
<h2>Crear frecuencias:</h2>
            <div class="row">
                <div class="col-6">
                    <form action="<?= base_url()?>index.php/frecuenciacontrolador/insertar_frecuencia" method="post">
                      
                        <div class="form-group">
                            <label>Nombre frecuencia:</label>
                            <input type="text" name="NombreFrecuencia" class="form-control">
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
      
            <th>Frecuencias existentes:</th>

        </thead>
        <tbody>
            <?php
            foreach ($frecuencias as $frecuencia){
            ?>
            <tr>
            
                <td><?= $frecuencia->NombreFrecuencia ?></td>
               
            </tr>           
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>

<?php
    $this->load->view("pie_pagina");