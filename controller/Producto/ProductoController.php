<?php
include_once '../model/Producto/ProductoModel.php';

class ProductoController{


//recibe la peticion cuando el usuario da clic en Usuario->registrar    
public function getCreate(){
    $obj = new ProductoModel();

    $sql ='SELECT * FROM categoria';    
    $categoria = $obj->consultar($sql);

    $sql="SELECT * FROM estado WHERE NOMBRE_ESTADO IN ('Activo','Inactivo')";
    $estado =$obj->consultar($sql);
    
    include_once '../view/Producto/create.php';
}

public function postCreate(){
        //dd($_POST);
        //dd($_FILES);
    $obj = new ProductoModel();

    $nombre= $_POST['nombre'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $id_categoria = $_POST['id_categoria'];
    $estado=$_POST['estado'];
    $imagen= $_FILES['imagen']['name'];
    $desc=$_POST['detalle_producto'];

    $ruta ="img/$imagen";
    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);

    $id=$obj->autoIncrement("producto","codigoProduc");

    $sql ="INSERT INTO producto VALUES ($id,'$nombre',$precio,$cantidad,'$ruta',$id_categoria,'$desc',$estado)";

    $ejecutar = $obj->insertar($sql);
    if($ejecutar){
        //revisar el getALL
        redirect("Producto","Producto","getProducto");
    }else{
        echo"No se pudo insertar el producto";
    }

}

public function getProducto(){
    $obj = new ProductoModel();

    //esto me sirve para todo
    $sql = "SELECT p.*, c.nombreCate FROM producto p, categoria c WHERE p.id_categoria = c.codigoCate";
    
    $productos = $obj->consultar($sql);
    include_once '../view/producto/consult.php';

}


public function getUpdate(){
 $obj= new ProductoModel();
 $id = $_GET['id'];
 $sql="SELECT * FROM producto WHERE codigoProduc=$id";
 $productos= $obj->consultar($sql);

 $sql="SELECT * FROM categoria";
 $categoria=$obj->consultar($sql);
 
 include_once "../view/producto/update.php";
}

public function postUpdate(){
    $obj=new ProductoModel();
    dd($_POST);
    if(isset($_POST['imagenVieja'])&& $_FILES['imagenProduc']['name']!=""){
        $ruta_imagen_vieja=$_POST['imagenVieja'];
        $imagen = explode("/",$ruta_imagen_vieja);

        if($imagen[1] !="not-found.jpg"){
            unlink($ruta_imagen_vieja);
        }
    }
    $nombre=$_POST['producto_nombre'];
    $precio=$_POST['producto_precio'];
    $cantidad=$_POST['cantidad'];
    $id_categoria=$_POST['id_categoria'];
    $codigoProduc=$_POST['producto_id'];
    $detalle=$_POST['detalle_producto'];
    
    if(isset($_FILES['imagenProduc'])){
        $imagen=$_FILES['imagenProduc']['name'];
        if($_FILES['imagenProduc']['name']==""){
            $imagen="not-found.jpg";
        }
        $ruta="img/$imagen";

        move_uploaded_file($_FILES['imagenProduc']['tmp_name'],$ruta);

    }else if(isset($_POST['rutaImagen'])&&$_POST['rutaImagen']=="img/"){
        $ruta="img/not-found.jpg";
    }else{
        $ruta=$_POST['rutaImagen'];
    }

    $sql ="UPDATE producto SET nombre='$nombre',precio=$precio, cantidad=$cantidad, imagenProducto='$ruta', descripcion='$detalle' WHERE codigoProduc=$codigoProduc";

    $ejecutar=$obj->editar($sql);
    if($ejecutar){
        redirect(getUrl("Producto","Producto","getProducto"));
    }else{
        echo "No se pudo actualizar el producto";
    }

    
}

public function getDelete(){
    //dd($_GET);
    $obj = new ProductoModel();
    $id=$_GET['id'];

    $sql="SELECT p.*,c.nombreCate FROM producto p, categoria c where p.codigoProduc=$id AND p.id_categoria=c.codigoCate";

    $producto=$obj->consultar($sql);
    include_once '../view/producto/delete.php';
}

public function postDelete(){
    //dd($_POST);
    $obj= new ProductoModel();
    $id=$_POST['producto_id'];

    $sql="DELETE FROM producto where codigoProduc=$id";
    $ejecutar= $obj->eliminar($sql);

    if($ejecutar){
        redirect(getUrl("Producto","Producto","getProducto"));
    }else{
        echo "No se puede eliminar el producto";
    }


}

public function filtro(){
    $obj=new ProductoModel();
    $buscar=$_POST['buscar'];
    $sql = "SELECT p.*, c.nombreCate FROM producto p, categoria c WHERE p.id_categoria = c.codigoCate AND (p.nombre LIKE '%$buscar%' OR c.nombreCate LIKE '%$buscar%')";

    $productos = $obj->consultar($sql);
    include_once '../view/producto/filtro.php';
}

public function filtro_2(){
    $obj=new ProductoModel();
    $buscar=$_POST['buscar'];
    $sql = "SELECT p.*, c.nombreCate FROM producto p, categoria c WHERE p.id_categoria = c.codigoCate AND (p.nombre LIKE '%$buscar%' OR c.nombreCate LIKE '%$buscar%')";

    $productos = $obj->consultar($sql);
    include_once '../view/producto/filtroCliente.php';
}
public function describe(){
    dd($_GET);
    $obj=new ProductoModel();
    $pruducto=$_POST[''];
    include_once '../view/producto/describe.php ';
}



public function setCarrito(){
    $id_producto=$_GET['id'];
    $i=count($_SESSION['carrito']);
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito']=array();
    }

    foreach($product as $pro){
        $_SESSION['carrito'][$i]['id']=$pro['id'];
        $i++;
        redirect(getUrl('Producto','Producto','verCarrito'));
    }

}

}
?>