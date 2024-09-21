<div class="mt-5">
    <h4 class="display-4">Actualizar Cliente</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($cliente as $cli){
?>

<form action="<?php echo getUrl("Cliente","Cliente","postUpdate") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="documento" value="<?php echo $cli['documento']?>">
            Nombre
            <input type="text" name="nombreCliente" id="" class="form-control" placeholder="Ingrese el nombre del rol" value="<?php echo $cli['nombreCliente'];?>">
        </label>
    </div>

    
    <div class="form-group col-md-4">
        <label for="">
            Apellido 
            <input type="text" name="apellidoCliente" id="" class="form-control" placeholder="Ingrese el apellido" value="<?php echo $cli['apellidoCliente'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            numero de documento 
            <input type="text" name="documentoCliente" id="" class="form-control" placeholder="Ingrese el documento" value="<?php echo $cli['documentoCliente'];?>">
        </label>
    </div>

    <div class="row mt-3">
        <div class="form-group col-md-4">
            <label for="">
                Tipo de documento
                <select name="tipoDeDocumento" id="" class="form-control">
                    <option value="<?php $cli['tipo_doc_nombre']?>">
                        
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
                    <option value="<?php $cli['estado']?> ">
                        seleccionar
                    </option>
                    <?php
                        foreach($estado as $esta){
                            echo "<option value='".$esta ['ID_ESTADO']."'>".$esta['NOMBRE_ESTADO']."</option>";
                        }
                    ?>
                </select>    
            </label>
        </div>
</div>

<div class="mt-5">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>

<?php }?>