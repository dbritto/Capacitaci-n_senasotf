<div class="mt-5">
    <h4 class="display-4">
        Consultar Roles
    </h4>
</div>

<div class="mt-5">
    <table class="table table-hover table-striped">

        <thead>
            <tr>
                <th>id rol</th>
                <th>Nombre rol</th>
                <th>estado rol</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($rol as $Roles){
                echo "<tr>";
                    echo "<th>".$Roles['cod_rol']."</th>";
                    echo "<th>".$Roles['nom_rol']."</th>";
                    echo "<th>".$Roles['estadoID']."</th>";
                    echo "<th>".
                            "<a href='".getUrl("Roles","Roles","getUpdate",array("id"=>$Roles['cod_rol']))."'>"
                            ."<button class='btn btn-primary'>Editar</button>"."</a>".

                            "<a href='".getUrl("Roles","Roles","getDelete",array("id"=>$Roles['cod_rol']))."'>"
                            ."<button class='btn btn-primary'>Elminar</button>"."</a>"

                            
                        ."</th>";
                echo"</tr>";
            }
            ?>
        </tbody>

    </table>
</div>