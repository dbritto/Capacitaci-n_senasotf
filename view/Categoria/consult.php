<div class="mt-5">
    <h4 class="display-4">
        Consultar Categoria
    </h4>
</div>

<div class="mt-5">
    <table class="table table-hover table-striped">

        <thead>
            <tr>
                <th>id Categoria</th>
                <th>Nombre Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($categoria as $cate){
                echo "<tr>";
                    echo "<th>".$cate['codigoCate']."</th>";
                    echo "<th>".$cate['nombreCate']."</th>";

                    echo "<th>".
                            "<a href='".getUrl("Categoria","Categoria","getUpdate",array("codigoCate"=>$cate['codigoCate']))."'>"
                            ."<button class='btn btn-primary'>Editar</button>"."</a>".

                            "<a href='".getUrl("Categoria","Categoria","getDelete",array("codigoCate"=>$cate['codigoCate']))."'>"
                            ."<button class='btn btn-primary'>Elminar</button>"."</a>"

                            
                        ."</th>";
                echo"</tr>";
            }
            ?>
        </tbody>

    </table>
</div>