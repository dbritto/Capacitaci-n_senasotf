<div class="mt-5">
    <h4 class="display-4">
        Consultar Usuarios
    </h4>
</div>

<div class="mt-5">
    <table class="table table-hover table-striped">

        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($usuarios as $usuario){
                echo "<tr>";
                    echo "<th>".$usuario['id']."</th>";
                    echo "<th>".$usuario['nombreUsu']."</th>";
                    echo "<th>".$usuario['apellidoUsu']."</th>";
                    echo "<th>".$usuario['correo']."</th>";
                    echo "<th>".$usuario['clave']."</th>";
                    echo "<th>".$usuario['id_rol']."</th>";
                    echo "<th>".$usuario['estadoUsuario']."</th>";
                    echo "<th>".
                            "<a href='".getUrl("Usuario","Usuario","getUpdate",array("id"=>$usuario['id']))."'>"
                            ."<button class='btn btn-primary'>Editar</button>"."</a>".

                            "<a href='".getUrl("Usuario","Usuario","getDelete",array("id"=>$usuario['id']))."'>"
                            ."<button class='btn btn-primary'>Elminar</button>"."</a>"

                            
                        ."</th>";
                echo"</tr>";
            }
            ?>
        </tbody>

    </table>
</div>