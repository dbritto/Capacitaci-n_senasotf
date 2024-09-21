<div class="mt-5">
    <h4 class="display-4">Registrar Rol</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<form action="<?php echo getUrl("Roles","Roles","postCreate") ?>" method="post"><div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            Nombre rol
            <input type="text" name="nom_rol" id="" class="form-control" placeholder="ingrese el rol">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            estadocdel rol
           <select name="estadoID" id="" class="form-control">
            <option value="">
                seleccionar
            </option>
            <?php
                foreach($estado as $esta){
                    echo "<option value='".$esta['ID_ESTADO']."'>".$esta['NOMBRE_ESTADO']."</option>";
                }
            ?>
        </label>
    </div>
    
</div>

<div class="mt-5">
    <input type="submit" value="Registar" class="btn btn-success">
</div>

</form>