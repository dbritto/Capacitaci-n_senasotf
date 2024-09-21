<div class="mt-5">
    <h4 class="display-4">Eliminar Producto</h4>
</div>

<!-- Cuando el usuario realiza el formulario el mensaje llega a archivo ayuda que convierte a una URL y esta a su vez lo envia a UsuarioController -->

<?php
foreach($producto as $produc){
?>

<form action="<?php echo getUrl("Producto","Producto","postDelete") ?>" method="post">

<div class="row mt-5">
    <div class="form-group col-md-4">
        <label for="">
            <input type="hidden" name="producto_id" value="<?php echo $produc['codigoProduc']?>">
            Nombre
            <input type="text" name="producto_nombre" id="" class="form-control" placeholder="Ingrese el nombre" readonly value="<?php echo $produc['nombre'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Precio
            <input type="text" name="producto_precio" id="" class="form-control" placeholder="Ingrese el apellido" readonly value="<?php echo $produc['precio'];?>">
        </label>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            Cantidad
            <input type="text" name="cantidad" id="" class="form-control" placeholder="Ingrese el email" readonly value="<?php echo $produc['cantidad'];?>">
        </label>
    </div>

    
    <div class="form-group col-md-4">
        <label for="">
            Categoria
            <input type="text" name="categoria" id="" class="form-control" placeholder="Ingrese el email" readonly value="<?php echo $produc['nombreCate'];?>">
        </label>
    </div>
</div>

<div class="mt-5">
    <input type="submit" value="Eliminar" class="btn btn-success">
</div>

</form>

<?php }?>