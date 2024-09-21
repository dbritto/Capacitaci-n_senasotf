<div class="mt-5">
    <h4 class="display-4">Eliminar Cliente</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($cliente as $cli){
?>

<form action="<?php echo getUrl("Cliente","Cliente","postDelete") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="documento" value="<?php echo $cli['documento']?>">
            Nombre Cliente
            <input type="text" name="nombreCliente" id="" class="form-control" placeholder="Nombre rol" readonly value="<?php echo $cli['nombreCliente'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Apellido Cliente
            <input type="text" name="apellidoCliente" id="" class="form-control" placeholder="ingrese nombre" readonly value="<?php echo $cli['apellidoCliente'];?>">
        </label>
    </div>

    
    <div class="form-group col-md-4">
        <label for="">
            Numero de documento
            <input type="text" name="documentoCliente" id="" class="form-control" placeholder="ingrese nombre" readonly value="<?php echo $cli['documentoCliente'];?>">
        </label>
    </div>

    <div class="row mt-3">
        <div class="form-group col-md-4">
            <label for="">
                Tipo de documento
                <select name="tipoDeDocumento" id="" class="form-control">
                    <option readonly value="<?php echo $cli['tipoDeDocumento'];?>">
                        seleccionar
                    </option>
                    <?php
                        foreach($tipo_documento as $documento){
                            echo "<option value='".$documento['tipo_doc_id']."'>".$documento['tipo_doc_nombre']."</option>";
                        }
                    ?>
                </select>
            </label>
        </div>

        <div class="form-group col-md-4">
            <label for="">
                estado
                <select name="estado" id="" class="form-control">
                    <option readonly value="<?php echo $cli['estado'];?>">
                        seleccionar
                    </option>
                    <?php
                        foreach($estado as $esta){
                            echo "<option value='".$esta['ID_ESTADO']."'>".$esta['NOMBRE_ESTADO']."</option>";
                        }
                    ?>
                </select>    
            </label>
        </div>
    </div>

</div>

<div class="mt-5">
    <input type="submit" value="Eliminar" class="btn btn-success">
</div>

</form>

<?php }?>