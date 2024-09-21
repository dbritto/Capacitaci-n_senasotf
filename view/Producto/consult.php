<div class="mt-5">
    <h4 class="display-4">
        Consultar Producto
    </h4>
</div>

<div class="mt-5">
<?php 
    if($_SESSION['id_rol']==1){
    ?> 
        <div class="col-md-4">
            <input type="text" name="filtro" id="filtro" class="form-control" placeholder="Buscar.." data-url="<?=getUrl("Producto","Producto","filtro",false,"ajax");?>">
        </div>

    
     <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>

            <tbody>
                <?php
                foreach($productos as $producto){
                    echo "<tr>";
                        echo "<th>".$producto['codigoProduc']."</th>";
                        echo "<th>".$producto['nombre']."</th>";
                        echo "<th>".number_format($producto['precio'],'0',',','.')."</th>";
                        echo "<th>".$producto['cantidad']."</th>";
                        echo "<th>".$producto['nombreCate']."</th>";
                        echo "<th>";
                                echo "<a href='".getUrl("Producto","Producto","getUpdate",array("id"=>$producto['codigoProduc']))."'>";
                                echo"<button class='btn btn-primary'>Editar</button>";
                                echo"</a>";
                        echo"</th>";
                        echo"<th>";
                                echo "<a href='".getUrl("Producto","Producto","getDelete",array("id"=>$producto['codigoProduc']))."'>";
                                echo"<button class='btn btn-primary'>Elminar</button>";
                                echo"</a>";
                            "<th>";
                    echo"<tr>";
                }
                ?>
            </tbody>

    </table>
    <?php
    }else if($_SESSION['id_rol']==2){
    ?>   
        <div class="col-md-4">
            <input type="text" name="filtro_2" id="filtro_2" class="form-control" placeholder="Buscar.." data-url_2="<?=getUrl("Producto","Producto","filtro_2",false,"ajax");?>">
        </div>
        
        <div class="productos">
            
            <?php 
                foreach($productos as $producto){
            ?>
                <div class="card-group text-center display:flex;">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="imagen-contenedor">
                            <img src="<?php echo $producto['imagenProducto']?>" class="card-img-top text-center" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['nombre']?></h5>
                                <h6 class="card-title "><?php echo $producto['nombreCate']?></h6>
                                <p class="card-text"><?php echo number_format($producto['precio'],'0',',','.')?></p>

                                <div class="boton">
                                <?php     
                                echo "<a href='".getUrl("Producto","Producto","describe",array("id"=>$producto['codigoProduc']))."'>";
                                echo"<button class='button'>BUSCAR...</button>";
                                echo"</a>";
                                

                                echo "<a href='".getUrl("Producto","Producto","setCarrito",array("id"=>$producto['codigoProduc']))."'> ";
                                echo"<button class='button'>Agregar carrito</button>";
                                echo"</a>";
                                ?>
                                </div>
                                

                            </div>
                        </div>
                    </div>
        
                </div>    
            <?php
                }
            ?>
              
        </div>
    
    <?php } ?>
</div>