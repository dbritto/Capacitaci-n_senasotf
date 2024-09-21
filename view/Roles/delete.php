<div class="mt-5">
    <h4 class="display-4">Eliminar Rol</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($Rol as $roles){
?>

<form action="<?php echo getUrl("Roles","Roles","postDelete") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="id" value="<?php echo $roles['cod_rol']?>">
            Nombre Rol
            <input type="text" name="nom_rol" id="" class="form-control" placeholder="Nombre rol" readonly value="<?php echo $roles['nom_rol'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            estadoID
            <input type="text" name="estadoID" id="" class="form-control" placeholder="Estado Rol" readonly value="<?php echo $roles['estadoID'];?>">
        </label>
    </div>

</div>

<div class="mt-5">
    <input type="submit" value="Eliminar" class="btn btn-success">
</div>

</form>

<?php }?>