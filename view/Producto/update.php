<div class="mt-5">
    <h4 class="display-4">Actualizar Producto</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($productos as $pro){
?>

<form action="<?php echo getUrl("Producto","Producto","postUpdate") ?>" method="post" enctype='multipart/form-data'>

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="producto_id" value="<?php echo $pro['codigoProduc']?>">
            Nombre
            <input type="text" name="producto_nombre" id="" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $pro['nombre'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Precio
            <input type="text" name="producto_precio" id="" class="form-control" placeholder="Ingrese el apellido" value="<?php echo $pro['precio'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Cantidad
            <input type="text" name="cantidad" id="" class="form-control" placeholder="Ingrese el email" value="<?php echo $pro['cantidad'];?>">
        </label>
    </div>

    
     <div class="form-group col-md-4">
        <label for="id_categoria">
            Categoria
            <select name="id_categoria" id="" class="form-control">
                <option value="">Seleccione..</option>
                <?php
                    foreach($categoria as $cat){
                        if($cat['codigoCate']===$pro['id_categoria']){
                            $selected = "selected";
                        }else{
                            $selected="";
                        }
                        echo "<option value='".$cat['codigoCate']."'$selected>".$cat['nombreCate']."</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="form-group col-md-6">
                <label for="" class="d-block">Imagen</label>
                <img src="<?php echo $pro['imagenProducto'] ?>" id="imagen" width="150px">
                <button type="button" class="btn btn-primary" id="cambiarImagen">Cambiar imagen</button>
                <div id="nuevaImagen"></div>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Descripcion
            <textarea name="detalle_producto" id="" class="form-control" placeholder="Ingrese la cantidad" cols='30' rows='5'></textarea>
        </label>
    </div>

</div>

<div class="mt-5">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>

<?php }?>