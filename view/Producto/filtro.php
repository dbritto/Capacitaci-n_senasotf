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