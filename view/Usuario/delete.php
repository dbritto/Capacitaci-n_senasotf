<div class="mt-5">
    <h4 class="display-4">Eliminar Usuario</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($usuario as $usu){
?>

<form action="<?php echo getUrl("Usuario","Usuario","postDelete") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="id" value="<?php echo $usu['id']?>">
            Nombre
            <input type="text" name="usu_nombre" id="" class="form-control" placeholder="Ingrese el nombre" readonly value="<?php echo $usu['nombreUsu'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Apellido
            <input type="text" name="usu_apellido" id="" class="form-control" placeholder="Ingrese el apellido" readonly value="<?php echo $usu['apellidoUsu'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Correo
            <input type="text" name="usu_email" id="" class="form-control" placeholder="Ingrese el email" readonly value="<?php echo $usu['correo'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Rol
            <input type="text" name="rol" id="" class="form-control" placeholder="Ingrese el email" readonly value="<?php echo $usu['id_rol'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Contraseña
            <input type="text" name="usu_password" id="" class="form-control" placeholder="Ingrese el email" readonly value="<?php echo $usu['clave'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Estado
            <input type="text" name="usu_password" id="" class="form-control" placeholder="Ingrese el email" readonly value="<?php echo $usu['estadoUsuario'];?>">
        </label>
    </div>
</div>

<div class="mt-5">
    <input type="submit" value="Eliminar" class="btn btn-success">
</div>

</form>

<?php }?>