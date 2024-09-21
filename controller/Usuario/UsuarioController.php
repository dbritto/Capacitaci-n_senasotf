<?php
include_once '../model/Usuario/UsuarioModel.php';

class UsuarioController{


//recibe la peticion cuando el usuario da clic en Usuario->registrar    
public function getCreate(){
    $obj = new UsuarioModel();
    $sql='SELECT * FROM roles';
    $roles =$obj->consultar($sql);

    $sql="SELECT * FROM estado WHERE NOMBRE_ESTADO IN ('Activo','Inactivo')";
    $estado =$obj->consultar($sql);
    include_once '../view/Usuario/create.php';
}

//recibe la peticion de la vista create.php y realiza la funcion
public function postCreate(){
   //dd($_POST);

   $obj = new UsuarioModel();

   $usu_nombre = $_POST['nombreUsu'];
   $usu_apellido = $_POST['apellidoUsu'];
   $usu_email = $_POST['correo'];
   $usu_rol =$_POST['rol_id'];
   $usu_password = $_POST['clave'];
   $usu_estado = $_POST['estado_id'];
   $id = $obj->autoIncrement("usuarios","id");

   //$sql = "INSERT INTO usuarios VALUES ('$id','$usu_nombre','$usu_apellido','$usu_email','$usu_password','$usu_rol','$usu_estado')";
    $sql ="INSERT INTO usuarios VALUES('$id','$usu_nombre','$usu_apellido','$usu_email','$usu_password','$usu_rol','$usu_estado')";
  // dd($sql);
   $ejecutar = $obj->insertar($sql);

   if($ejecutar){
    redirect(getUrl("Usuario","Usuario","getUsers"));
   }else{
    echo "No se pudo registrar el usuario";
   }
}


public function getUsers(){
    $obj= new UsuarioModel();
    $sql = "SELECT * FROM  usuarios";
    $usuarios = $obj->consultar($sql);
    include_once '../view/Usuario/consult.php';
}


public function getUpdate(){
    
    $obj = new UsuarioModel();

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $usuario = $obj->consultar($sql);

    include_once '../view/Usuario/update.php';
}

public function postUpdate(){
    $obj = new UsuarioModel();

    $usu_nombre = $_POST['nombreUsu'];
    $usu_apellido = $_POST['apellidoUsu'];
    $usu_email = $_POST['correo'];
    $usu_id=$_POST['id'];
    $usu_rol=$_POST['id_rol'];
    $usu_password=$_POST['clave'];
    $usu_estado=$_POST['estadoUsuario'];

    $sql = "UPDATE usuarios SET nombreUsu ='$usu_nombre',apellidoUsu ='$usu_apellido', correo ='$usu_email',clave ='$usu_password',id_rol ='$usu_rol',estadoUsuario='$usu_estado' where id = $usu_id";

    $ejecutar = $obj->editar($sql);

    if($ejecutar){
        redirect(getUrl("Usuario","Usuario","getUsers"));
    }else{
        echo "Ups se presento un error";
    }
}


public function getDelete(){
    $obj = new UsuarioModel();

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $usuario = $obj->consultar($sql);

    include_once '../view/Usuario/delete.php';   
}

public function postDelete(){
    $obj = new UsuarioModel();

    $usu_nombre = $_POST['usu_nombre'];
    $usu_apellido = $_POST['usu_apellido'];
    $usu_email = $_POST['usu_email'];
    $usu_id=$_POST['id'];

    $sql ="DELETE FROM usuarios WHERE id= $usu_id";

    $ejecutar = $obj->eliminar($sql);
    if($ejecutar){
        redirect(getUrl("Usuario","Usuario","getUsers"));
    }else{
        echo "Ups se presento un error";
    }

}


}
?>