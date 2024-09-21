<div class="mt-5">
    <h4 class="display-4">Registrar Cliente</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<form action="<?php echo getUrl("Cliente","Cliente","postCreate") ?>" method="post"><div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            Nombre Cliente
            <input type="text" name="nombreCliente" id="" class="form-control" placeholder="ingrese nombre">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Apellido Cliente
            <input type="text" name="apellidoCliente" id="" class="form-control" placeholder="ingrese nombre">
        </label>
    </div>

    
    <div class="form-group col-md-4">
        <label for="">
            Numero de documento
            <input type="text" name="documentoCliente" id="" class="form-control" placeholder="ingrese nombre">
        </label>
    </div>
    <div class="row mt-3">
        <div class="form-group col-md-4">
            <label for="">
                Tipo de documento
                <select name="tipoDeDocumento" id="" class="form-control">
                    <option value="">
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
                    <option value="">
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
    <input type="submit" value="Registar" class="btn btn-success">
</div>

</form>