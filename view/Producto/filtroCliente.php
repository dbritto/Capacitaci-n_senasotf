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

                                <?php
                                echo "<a href='".getUrl("Producto","Producto","describe7",array("id"=>$producto['codigoProduc']))."'>";
                                echo"<button class='btn btn-primary'>BUSCAR...</button>";
                                echo"</a>";
                                ?>
                            </div>
                        </div>
                    </div>
        
                </div>    
            <?php
                }
            ?>