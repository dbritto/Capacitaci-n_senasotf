<div class="mt-5">
    <h4 class="display-4">Actualizar Usuario</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($usuario as $usu){
?>

<form action="<?php echo getUrl("Usuario","Usuario","postUpdate") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="id" value="<?php echo $usu['id']?>">
            Nombre
            <input type="text" name="nombreUsu" id="" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $usu['nombreUsu'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Apellido
            <input type="text" name="apellidoUsu" id="" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $usu['apellidoUsu'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Correo
            <input type="text" name="correo" id="" class="form-control" placeholder="Ingrese el email" value="<?php echo $usu['correo'];?>">
        </label>
    </div>

    
    <div class="form-group col-md-4">
        <label for="">
            Contraseña
            <input type="text" name="clave" id="" class="form-control" placeholder="Ingrese la contraseña del usuario" value="<?php echo $usu['clave'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Rol
            <input type="text" name="id_rol" id="" class="form-control" placeholder="Ingrese el rol del usuario" value="<?php echo $usu['id_rol']?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Estado
            <input type="text" name="estadoUsuario" id="" class="form-control" placeholder="Ingrese la contraseña del usuario" value="<?php echo $usu['estadoUsuario'];?>">
        </label>
    </div>

</div>

<div class="mt-5">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>

<?php }?>