<?php
    include_once '../lib/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Loginazo</title>
</head>
<body>
<div class="container justify-content-center" >
     <div> 
          <h3 class="display-4" >
          Iniciar Sesion
          </h3> 
     </div>
     <div class="col-md-4 ">
        <form action="<?php echo getUrl("Login","Login","login");?>"  method="post">
               <div class="form-floating mb-3 mt-5">
                    <div class="form-floating">
                         <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Correo" autofocus >
                         <label for="floatingInput" >Correo</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" >
                        <label for="floatingInput">Contraseña</label>
                </div>
                    <div class="mt-5">
                        <input type="submit" value="Ingresar" class="btn btn-success">
                    
               
        </form>
     </div>
</div>
</body>
</html>
    