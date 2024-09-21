<div class="mt-5">
    <h4 class="display-4">Registrar Cliente</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<form action="<?php echo getUrl("Categoria","Categoria","postCreate") ?>" method="post"><div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            Nombre Categoria
            <input type="text" name="nombreCate" id="" class="form-control" placeholder="ingrese nombre de categoria">
        </label>
    </div>

    </div>
</div>

<div class="mt-5">
    <input type="submit" value="Registar" class="btn btn-success">
</div>

</form>