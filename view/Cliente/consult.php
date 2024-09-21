<div class="mt-5">
    <h4 class="display-4">
        Consultar Roles
    </h4>
</div>

<div class="mt-5">
    <table class="table table-hover table-striped">

        <thead>
            <tr>
                <th>id Cliente</th>
                <th>Nombre Cliente</th>
                <th>Apellido Cliente</th>
                <th>Numero de Documento</th>
                <th>Tipo documento</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($cliente as $cli){
                echo "<tr>";
                    echo "<th>".$cli['documento']."</th>";
                    echo "<th>".$cli['nombreCliente']."</th>";
                    echo "<th>".$cli['apellidoCliente']."</th>";
                    echo "<th>".$cli['documentoCliente']."</th>";
                    echo "<th>".$cli['tipo_doc_nombre']."</th>";
                    echo "<th>".$cli['NOMBRE_ESTADO']."</th>";
                    
                    echo "<th>".
                            "<a href='".getUrl("Cliente","Cliente","getUpdate",array("documento"=>$cli['documento']))."'>"
                            ."<button class='btn btn-primary'>Editar</button>"."</a>".

                            "<a href='".getUrl("Cliente","Cliente","getDelete",array("documento"=>$cli['documento']))."'>"
                            ."<button class='btn btn-primary'>Elminar</button>"."</a>"

                            
                        ."</th>";
                echo"</tr>";
            }
            ?>
        </tbody>

    </table>
</div>