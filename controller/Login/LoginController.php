<?php

include_once '../model/Login/LoginModel.php';


class LoginController {
    
    public function login(){
        $obj=new LoginModel();
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND  clave = '$password'";
        $user = $obj->consultar($sql);


        
        //TRAE LA CANTIDD DE REGISTRO
        if(mysqli_num_rows($user)>0){

            // if ($user['estadoUsuario']==2) {
            //     $_SESSION['msj'] = "El usuario se encuentra inactivo";
            //     redirect("login.php");
            // }

            foreach($user as $user){
                $_SESSION['auth'] = "ok";
                $_SESSION['nombre'] = $user['nombreUsu'];
                $_SESSION['apellido'] = $user['apellidoUsu'];
                $_SESSION['id_rol'] = $user['id_rol'];
            }
            redirect("index.php");

        }else{
            
            $_SESSION['msj'] = "Correo o Contrasenia incorrecta";
            //redirect("login.php");
        }
        
        
    }

    public function cerrar(){
        session_destroy();
        
        echo"<script>";
        echo "window.location.href='index.php' ";
        echo"</script>";

    }
}

?>