<?php
include_once '../model/Cliente/ClienteModel.php';

class ClienteController{


//recibe la peticion cuando el usuario da clic en Usuario->registrar    
public function getCreate(){
    $obj = new ClienteModel();
    $sql='SELECT * FROM tipo_documento';
    $tipo_documento =$obj->consultar($sql);

    $sql="SELECT * FROM estado WHERE NOMBRE_ESTADO IN ('Activo','Inactivo')";
    $estado =$obj->consultar($sql);
    include_once '../view/Cliente/create.php';
}

//recibe la peticion de la vista create.php y realiza la funcion
public function postCreate(){
   //dd($_POST);

   $obj = new ClienteModel();

   $cliente_nombre = $_POST['nombreCliente'];
   $apellido_apellido = $_POST['apellidoCliente'];
   $documentoCliente = $_POST['documentoCliente'];
   $tipoDocumentoCliente =$_POST['tipoDeDocumento'];
   $estadoCliente =$_POST['estado'];
   $id = $obj->autoIncrement("cliente","documento");

   //$sql = "INSERT INTO usuarios VALUES ('$id','$usu_nombre','$usu_apellido','$usu_email','$usu_password','$usu_rol','$usu_estado')";
    $sql ="INSERT INTO cliente VALUES($id,'$cliente_nombre','$cliente_apellido','$documentoCliente','$tipoDocumentoCliente','$estadoCliente')";
  // dd($sql);
   $ejecutar = $obj->insertar($sql);

   if($ejecutar){
    redirect(getUrl("Cliente","Cliente","getCliente"));
   }else{
    echo "No se pudo registrar el usuario";
   }
}


public function getCliente(){
    $obj= new ClienteModel();
    $sql = "SELECT c.*, t.tipo_doc_nombre, e.NOMBRE_ESTADO FROM cliente c, tipo_documento t, estado e  WHERE c.tipoDeDocumento = t.tipo_doc_id and c.estado = e.ID_ESTADO";
    $cliente = $obj->consultar($sql);
    include_once '../view/Cliente/consult.php';
}


public function getUpdate(){
   //dd($_GET);

    $obj = new ClienteModel();
    $id = $_GET['documento'];
    //Consulta para poder traer toda a informacion
    $sql = "SELECT c.*, t.tipo_doc_nombre, e.NOMBRE_ESTADO FROM cliente c, tipo_documento t, estado e  WHERE c.tipoDeDocumento = t.tipo_doc_id and c.estado = e.ID_ESTADO AND c.documento =$id";
    $cliente = $obj->consultar($sql);

    //Consulta de la tabla de documento
    $sql='SELECT * FROM tipo_documento';
    $tipo_documento =$obj->consultar($sql);
    //Consulta de la tabla de estado
    $sql="SELECT * FROM estado WHERE NOMBRE_ESTADO IN ('Activo','Inactivo')";
    $estado =$obj->consultar($sql);    

    include_once '../view/Cliente/update.php';
}

public function postUpdate(){
    //dd($_POST);
    $obj = new ClienteModel();
    $cliente_id = $_POST['documento'];
    $nombre_cliente = $_POST['nombreCliente'];
    $apelldo_cliente = $_POST['apellidoCliente'];
    $documento_cliente=$_POST['documentoCliente'];
    $tipo_documento=$_POST['tipoDeDocumento'];
    $estado_cliente=$_POST['estado'];

    $sql = "UPDATE cliente SET  nombreCliente='$nombre_cliente',apellidoCliente ='$apellido_cliente', documentoCliente ='$documento_cliente',tipoDeDocumento ='$tipo_documento',estado ='$estado_cliente' where documento = $cliente_id";

    $ejecutar = $obj->editar($sql);

    if($ejecutar){
        redirect(getUrl("Cliente","Cliente","getCliente"));
    }else{
        echo "Ups se presento un error";
    }
}


public function getDelete(){
    
    $obj = new ClienteModel();
    $id = $_GET['documento'];
    $sql = "SELECT * FROM cliente WHERE documento = $id";
    $cliente = $obj->consultar($sql);

    include_once '../view/Cliente/delete.php';   
}

public function postDelete(){
    
    $obj = new ClienteModel();
    $cliente_id = $_POST['documento'];
    $nombre_cliente = $_POST['nombreCliente'];
    $apelldo_cliente = $_POST['apellidoCliente'];
    $documento_cliente=$_POST['documentoCliente'];
    $tipo_documento=$_POST['tipoDeDocumento'];
    $estado_cliente=$_POST['estado'];

    $sql ="DELETE FROM cliente WHERE documento= $cliente_id";

    $ejecutar = $obj->eliminar($sql);
    if($ejecutar){
        redirect(getUrl("Cliente","Cliente","getCliente"));
    }else{
        echo "Ups se presento un error";
    }

}


}
?>