<div class="mt-5">
    <h4 class="display-4">Actualizar Roles</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($rol as $Roles){
?>

<form action="<?php echo getUrl("Roles","Roles","postUpdate") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="cod_rol" value="<?php echo $Roles['cod_rol']?>">
            Nombre
            <input type="text" name="nom_rol" id="" class="form-control" placeholder="Ingrese el nombre del rol" value="<?php echo $Roles['nom_rol'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Estado
            <input type="text" name="estadoID" id="" class="form-control" placeholder="Estado Rol" value="<?php echo $Roles['estadoID'];?>">
        </label>
    </div>

    
</div>

<div class="mt-5">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>

<?php }?>