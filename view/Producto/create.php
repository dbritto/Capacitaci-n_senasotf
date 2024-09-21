<div class="mt-5">
    <h4 class="display-4">Registrar Producto</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<form action="<?php echo getUrl("Producto","Producto","postCreate") ?>" method="post" enctype="multipart/form-data">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            Nombre
            <input type="text" name="nombre" id="" class="form-control" placeholder="Ingrese el nombre">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Precio
            <input type="text" name="precio" id="" class="form-control" placeholder="Ingrese el precio">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Cantidad
            <input type="text" name="cantidad" id="" class="form-control" placeholder="Ingrese la cantidad">
        </label>
    </div>
    <div class="row mt-3">
        <div class="form-group col-md-4">
            <label for="">
            Categoria
                <select name="id_categoria" id="" class="form-control">
                <option value="">Seleccionar</option>
                <?php

                foreach($categoria as $cat){
                    echo "<option value='".$cat['codigoCate']."'>".$cat['nombreCate']."</option>";
                }

                ?>
                </select>
            </label>
        </div>

        <div class="col-md-4">
            <label for="imagen" >Imagen
                <input type="file" name="imagen">
            </label>
        </div>

        <div class="col-md-4">
            <label for="estado" >Estado
            <select name="estado" id="" class="form-control">
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

    <div class="row mt-3">  
        <label for="detalle-producto">
            Detalle Producto 
            <textarea name="detalle_producto" id="" class="form-control" placeholder="Ingrese la cantidad" cols='30' rows='5'></textarea>
        </label>
    </div>
</div>

<div class="mt-5">
    <input type="submit" value="Registar Producto" class="btn btn-success">
</div>

</form>