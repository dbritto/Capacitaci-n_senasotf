<?php
include_once '../model/Roles/RolesModel.php';

class RolesController{


//recibe la peticion cuando el usuario da clic en Usuario->registrar    
public function getCreate(){
    $obj =new RolesModel();
    $sql="SELECT * FROM estado WHERE NOMBRE_ESTADO IN ('Activo','Inactivo')";
    $estado =$obj->consultar($sql);
    include_once '../view/Roles/create.php';
}

//recibe la peticion de la vista create.php y realiza la funcion
public function postCreate(){
    //dd($_POST);

   $obj = new RolesModel();

   $rol_nombre = $_POST['nom_rol'];
   $estadoID = $_POST['estadoID'];
   $id = $obj->autoIncrement("roles","cod_rol");

   $sql = "INSERT INTO roles VALUES ($id,'$rol_nombre','$estadoID')";

   $ejecutar = $obj->insertar($sql);

   if($ejecutar){
    redirect(getUrl("Roles","Roles","getRoles"));
   }else{
    echo "No se pudo registrar el usuario";
   }
}


public function getRoles(){
    $obj= new RolesModel();
    $sql = "SELECT * FROM  roles";
    $rol = $obj->consultar($sql);
    include_once '../view/Roles/consult.php';
}


public function getUpdate(){
  //dd($_GET);
    $obj = new RolesModel();

    $id = $_GET['id'];

    $sql = "SELECT * FROM roles WHERE cod_rol = $id";
    $rol = $obj->consultar($sql);

    include_once '../view/Roles/update.php';
}

public function postUpdate(){
   //dd($_POST);
    $obj = new RolesModel();
    $rol_id =$_POST['cod_rol'];
    $rol_nombre = $_POST['nom_rol'];
    $rol_estado = $_POST['estadoID'];
  

    $sql = "UPDATE roles SET nom_rol = '$rol_nombre',estadoID ='$rol_estado' where cod_rol = $rol_id";

    $ejecutar = $obj->editar($sql);

    if($ejecutar){
        redirect(getUrl("Roles","Roles","getRoles"));
    }else{
        echo "Ups se presento un error";
    }
}


public function getDelete(){
    
   // dd($_GET);
    $obj = new RolesModel();

    $id = $_GET['id'];

    $sql = "SELECT * FROM roles WHERE  cod_rol = $id";
    $Rol = $obj->consultar($sql);

    include_once '../view/Roles/delete.php';   
}

public function postDelete(){
   // dd($_POST);
    $obj = new RolesModel();

    $rol_cod = $_POST['id'];
    $rol_nombre = $_POST['nom_rol'];
    $rol_estado = $_POST['estadoID'];
    

    $sql ="DELETE FROM roles WHERE cod_rol= $rol_cod";

    $ejecutar = $obj->eliminar($sql);
    if($ejecutar){
        redirect(getUrl("Roles","Roles","getRoles"));
    }else{
        echo "Ups se presento un error";
    }

}


}
?>