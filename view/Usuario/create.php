<div class="mt-5">
    <h4 class="display-4">Registrar Usuario</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<form action="<?php echo getUrl("Usuario","Usuario","postCreate") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            Nombre
            <input type="text" name="nombreUsu" id="" class="form-control" placeholder="Ingrese el nombre">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Apellido
            <input type="text" name="apellidoUsu" id="" class="form-control" placeholder="Ingrese el apellido">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Correo
            <input type="text" name="correo" id="" class="form-control" placeholder="Ingrese el email">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Contraseña
            <input type="text" name="clave" id="" class="form-control" placeholder="La contraseña del usuario">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Rol
            <select name="rol_id" id="" class="form-control">
                <option value="">
                    Seleccionar
                </option>
                <?php
                foreach($roles as $rol){
                    echo "<option value='".$rol['cod_rol']."'>".$rol['nom_rol']."</option>";
                }
                ?>
            </select>
        </label>
    </div>

    
    <div class="form-group col-md-4">
        <label for="">
            Estado
            <select name="estado_id" id="" class="form-control">
                <option value="">
                    Seleccionar
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

<div class="mt-5">
    <input type="submit" value="Registar" class="btn btn-success">
</div>

</form>