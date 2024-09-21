<?php
include_once '../model/Categoria/CategoriaModel.php';

class CategoriaController{


//recibe la peticion cuando el usuario da clic en Usuario->registrar    
public function getCreate(){
    $obj = new CategoriaModel();
    $sql="SELECT * FROM estado WHERE NOMBRE_ESTADO IN ('Activo','Inactivo')";
    $estado =$obj->consultar($sql);
    include_once '../view/Categoria/create.php';
}

//recibe la peticion de la vista create.php y realiza la funcion
public function postCreate(){
   //dd($_POST);

   $obj = new CategoriaModel();

   $nombreCate = $_POST['nombreCate'];
   $id = $obj->autoIncrement("categoria","codigoCate");

   $sql ="INSERT INTO categoria VALUES($id,'$nombreCate')";
  // dd($sql);
   $ejecutar = $obj->insertar($sql);

   if($ejecutar){
    redirect(getUrl("Categoria","Categoria","getCategoria"));
   }else{
    echo "No se pudo registrar la categoria";
   }
}


public function getCategoria(){
    $obj= new CategoriaModel();
    $sql = "SELECT * FROM cateogira";
    $categoria = $obj->consultar($sql);
    include_once '../view/Categoria/consult.php';
}


public function getUpdate(){
   //dd($_GET);

    $obj = new CategoriaModel();
    $id = $_GET['codigoCate'];
    //Consulta para poder traer toda a informacion
    $sql = "SELECT * FROM categoria  WHERE codigoCate=$id";
    $categoria = $obj->consultar($sql);    

    include_once '../view/Categoria/update.php';
}

public function postUpdate(){
    //dd($_POST);
    $obj = new CategoriaModel();
    $codigoCate = $_POST['codigoCate'];
    $nombreCate=$_POST['nombreCate'];

    $sql = "UPDATE categoria SET  nombreCate='$nombreCate'where codigoCate = $codigoCate";

    $ejecutar = $obj->editar($sql);

    if($ejecutar){
        redirect(getUrl("Categoria","Categoria","getCategoria"));
    }else{
        echo "Ups se presento un error";
    }
}


public function getDelete(){
    
    $obj = new CategoriaModel();
    $codigoCate = $_GET['codigoCate'];
    $sql = "SELECT * FROM categoria WHERE codigoCate = $codigoCate";
    $categoria = $obj->consultar($sql);

    include_once '../view/Categoria/delete.php';   
}

public function postDelete(){
    
    $obj = new CategoriaModel();
    $codigoCate = $_POST['codigoCate'];

    $sql ="DELETE FROM categoria WHERE codigoCate= $codigoCate";

    $ejecutar = $obj->eliminar($sql);
    if($ejecutar){
        redirect(getUrl("Categoria","Categoria","getCategoria"));
    }else{
        echo "Ups se presento un error";
    }

}


}
?>